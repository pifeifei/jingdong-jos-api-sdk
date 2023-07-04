<?php

namespace ACES;

use ACES\Contracts\RequestInterface;
use ACES\Exceptions\JingdongException;
use ACES\Utils\HttpOptionsTrait;
use Composer\CaBundle\CaBundle;
use DateTimeZone;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;
use Psr\Log\LoggerInterface;
use Psr\SimpleCache\CacheInterface;

use function array_slice;
use function is_array;
use function is_string;

class JdClient
{
    use HttpOptionsTrait;

    protected string $serverUrl = 'https://api.jd.com/routerjson';

    protected JDToken $accessToken;

    /**
     * @var array{appKey: string, appSecret: string, redirectUrl: string, isvSource: null|string, shopNo: null|string, departmentNo: null|string, monthlyAccount: null|string}
     */
    protected array $config;

    protected string $version = '2.0';

    /**
     * 格式化类型.
     *
     * @var string 目前仅支持 json 格式
     */
    protected string $format = 'json';

    protected string $jsonParamKey = '360buy_param_json';

    protected array $options = [];

    protected ?LoggerInterface $logger = null;

    /**
     * @param array{appKey: string, appSecret: string, redirectUrl: string, isvSource: null|string, shopNo: null|string, departmentNo: null|string, monthlyAccount: null|string}|string $appKey
     * @param ?string $appSecret
     * @param ?string $redirectUrl
     */
    public function __construct($appKey, string $appSecret = null, string $redirectUrl = null, ?CacheInterface $cache = null)
    {
        if (is_array($appKey)) {
            $this->config = $appKey;
        } else {
            $this->config = [
                'appKey' => '', 'appSecret' => '', 'redirectUrl' => '',
                'isvSource' => null, 'shopNo' => null, 'departmentNo' => null, 'monthlyAccount' => null,
            ];
            $this->config['appKey'] = $appKey;
            $this->config['appSecret'] = (string) $appSecret;
            $this->config['redirectUrl'] = (string) $redirectUrl;
        }
        $this->accessToken = new JDToken($this, $cache);

        $options = [
            'base_uri' => $this->serverUrl,
            RequestOptions::ALLOW_REDIRECTS => false,
            RequestOptions::SSL_KEY => CaBundle::getSystemCaRootBundlePath(),
            RequestOptions::HTTP_ERRORS => false,
        ];

        if ($this->getOption(RequestOptions::TIMEOUT)) {
            $options[RequestOptions::TIMEOUT] = $this->getOption(RequestOptions::TIMEOUT);
        }
        if ($this->getOption(RequestOptions::CONNECT_TIMEOUT)) {
            $options[RequestOptions::CONNECT_TIMEOUT] = $this->getOption(RequestOptions::CONNECT_TIMEOUT);
        }

        $this->options = $options;
    }

    public function getAppKey(): string
    {
        return $this->config['appKey'];
    }

    public function getAppSecret(): string
    {
        return $this->config['appSecret'];
    }

    public function getRedirectUrl(): string
    {
        return $this->config['redirectUrl'];
    }

    public function getIsvSource(): ?string
    {
        return $this->config['isvSource'];
    }

    public function getShopNo(): ?string
    {
        return $this->config['shopNo'];
    }

    public function getDepartmentNo(): ?string
    {
        return $this->config['departmentNo'];
    }

    public function getMonthlyAccount(): ?string
    {
        return $this->config['monthlyAccount'];
    }

    public function getServerUrl(): string
    {
        return $this->serverUrl;
    }

    public function setServerUrl(string $serverUrl): void
    {
        $this->serverUrl = $serverUrl;
    }

    public function getVersion(): string
    {
        return $this->version;
    }

    /**
     * 获取 access_token.
     *
     * @throws JingdongException
     */
    public function accessToken(): string
    {
        return $this->accessToken->accessToken();
    }

    public function getAccessToken(): JDToken
    {
        return $this->accessToken;
    }

    public function setVersion(string $version): void
    {
        $this->version = $version;
    }

    public function setLogger(LoggerInterface $logger): void
    {
        $this->logger = $logger;
    }

    /**
     * 获取请求参数.
     *
     * @throws JingdongException
     *
     * @return array<string, mixed>
     */
    public function formatRequest(RequestInterface $request): array
    {
        $sysParams['app_key'] = $this->getAppKey();
        $sysParams['v'] = $request->getVersion($this->version);
        $sysParams['method'] = $request->getApiMethodName();
        $sysParams['timestamp'] = $this->getCurrentTimeFormatted();
        if ($request->isRequireAccessToken()) {
            $sysParams['access_token'] = $this->accessToken();
        }
        if ($request->toArray()) {
            $sysParams[$this->jsonParamKey] = $request->toJson();
        }
        $sysParams['sign'] = $this->generateSign($sysParams);

        return $sysParams;
    }

    /**
     * @throws JingdongException
     *
     * @return array<string, mixed>
     */
    public function execute(RequestInterface $request): array
    {
        $resp = $this->curl($this->serverUrl, $sysParams = $this->formatRequest($request));

        if ('json' === $this->format) {
            $respObject = json_decode($resp, true);
            if (json_last_error()) {
                $context = [
                    'url' => $this->serverUrl,
                    'request' => $sysParams,
                    'response' => $resp,
                ];

                throw new JingdongException('jingdong error:京东返回数据解析失败:' . json_last_error_msg(), $context);
            }

            if (isset($respObject['error_response'])) {
                $context = [
                    'url' => $this->serverUrl,
                    'request' => $sysParams,
                    'response' => $respObject,
                ];

                $this->logger?->error('jingdong error: ' . json_encode($context, JSON_UNESCAPED_UNICODE));

                throw new JingdongException(
                    'jingdong error:' . ($respObject['error_response']['zh_desc'] ?? $respObject['error_response']['en_desc']),
                    $context,
                );
            }

            if (null !== $respObject) {
                return $respObject;
            }
        }

        throw new JingdongException(
            'jingdong error: 未知异常,请截图这个界面给技术，' . $resp,
            ['url' => $this->serverUrl, 'request' => $sysParams, 'response' => $resp]
        );
    }

    /**
     * 请求数据.
     *
     * @param string $url 请求链接
     * @param null|array<bool|float|int|string> $postFields
     *
     * @throws JingdongException
     */
    public function curl(string $url, array $postFields = null): string
    {
        $options = $this->options();
        if ($postFields) {
            $options[RequestOptions::FORM_PARAMS] = $postFields;
            // $options[RequestOptions::BODY] = http_build_query($postFields, '', '&');
        }

        try {
            $debugStr = [
                'url' => $url,
                'data' => $options,
                'response' => null,
            ];
            $response = (new Client($this->options))->post($url, $options);
            $response->getBody()->rewind();

            return $response->getBody()->getContents(); // 可能是对象
        } catch (GuzzleException $e) {
            if (isset($response)) {
                $response->getBody()->rewind();
                $debugStr['response'] = $response->getBody()->getContents();
            }

            throw new JingdongException($e->getMessage(), $debugStr, $e);
        }
    }

    /**
     * @param array<bool|float|int|string> $params
     */
    protected function generateSign(array $params): string
    {
        ksort($params);
        $stringToBeSigned = $this->getAppSecret();
        foreach ($params as $k => $v) {
            if (is_string($v) && '@' !== substr($v, 0, 1)) {
                $stringToBeSigned .= $k . $v;
            }
        }
        unset($k, $v);
        $stringToBeSigned .= $this->getAppSecret();

        return strtoupper(md5($stringToBeSigned));
    }

    private function getCurrentTimeFormatted(): string
    {
        return date('Y-m-d H:i:s') . '.000' . $this->getStandardOffsetUTC(date_default_timezone_get());
    }

    private function getStandardOffsetUTC(string $timezone): string
    {
        if ('UTC' === $timezone) {
            return '+0000';
        }
        $timezone = new DateTimeZone($timezone);
        $transitions = array_slice($timezone->getTransitions(), -3, null, true);

        foreach (array_reverse($transitions, true) as $transition) {
            if (1 === $transition['isdst']) {
                continue;
            }

            return sprintf('%+03d%02u', $transition['offset'] / 3600, abs($transition['offset']) % 3600 / 60);
        }

        return '';
    }
}
