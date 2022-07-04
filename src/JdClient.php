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

class JdClient
{
    use HttpOptionsTrait;

    protected string $serverUrl = 'https://api.jd.com/routerjson';

    protected JDToken $accessToken;

    protected string $appKey;

    protected string $appSecret;

    protected string $redirectUrl;

    protected string $version = '2.0';

    /**
     * 格式化类型
     * @var string 目前仅支持 json 格式
     */
    protected string $format = 'json';

//    private $charset = 'UTF-8';

    protected string $jsonParamKey = '360buy_param_json';

    protected Client $client;

    public function __construct($appKey, $appSecret, $redirectUrl)
    {
        $this->appKey = $appKey;
        $this->appSecret = $appSecret;
        $this->redirectUrl = $redirectUrl;
        $this->accessToken = new JDToken($this);

        $options = [
            'base_uri'        => $this->serverUrl,
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

        $this->client = new Client($options);
    }

    /**
     * @return string
     */
    public function getAppKey(): string
    {
        return $this->appKey;
    }

    /**
     * @return string
     */
    public function getAppSecret(): string
    {
        return $this->appSecret;
    }

    /**
     * @return string
     */
    public function getRedirectUrl(): string
    {
        return $this->redirectUrl;
    }

    /**
     * @return string
     */
    public function getServerUrl(): string
    {
        return $this->serverUrl;
    }

    /**
     * @param  string  $serverUrl
     */
    public function setServerUrl(string $serverUrl): void
    {
        $this->serverUrl = $serverUrl;
    }

    /**
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }

    /**
     * 获取 access_token
     *
     * @return string
     * @throws JingdongException
     */
    public function accessToken(): string
    {
        return $this->accessToken->accessToken();
    }

    /**
     * @return JDToken
     */
    public function getAccessToken(): JDToken
    {
        return $this->accessToken;
    }

    /**
     * @param  string  $version
     */
    public function setVersion(string $version): void
    {
        $this->version = $version;
    }

    /**
     *
     * @param RequestInterface $request
     * @return array
     * @throws JingdongException
     */
    public function execute(RequestInterface $request): array
    {
        $sysParams['app_key'] = $this->appKey;
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

        $resp = $this->curl($this->serverUrl, $sysParams);

        if ('json' == $this->format) {
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

                if (function_exists('logger')) {
                    logger()->debug('jingdong error: ', $context);
                }

                throw new JingdongException(
                    'jingdong error:' . $respObject['error_response']['zh_desc'] ?? $respObject['error_response']['en_desc'],
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
     * 请求数据
     *
     * @param string $url 请求链接
     * @param array|null $postFields
     * @return string
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
                'response' => null
            ];
            $response = $this->client->post($url, $options);
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

    protected function generateSign($params): string
    {
        ksort($params);
        $stringToBeSigned = $this->appSecret;
        foreach ($params as $k => $v) {
            if ('@' != substr($v, 0, 1)) {
                $stringToBeSigned .= $k . $v;
            }
        }
        unset($k, $v);
        $stringToBeSigned .= $this->appSecret;

        return strtoupper(md5($stringToBeSigned));
    }

    private function getCurrentTimeFormatted(): string
    {
        return date('Y-m-d H:i:s').'.000'.$this->getStandardOffsetUTC(date_default_timezone_get());
    }

    private function getStandardOffsetUTC($timezone)
    {
        if ('UTC' == $timezone) {
            return '+0000';
        }
        $timezone = new DateTimeZone($timezone);
        $transitions = array_slice($timezone->getTransitions(), -3, null, true);

        foreach (array_reverse($transitions, true) as $transition) {
            if (1 == $transition['isdst']) {
                continue;
            }

            return sprintf('%+03d%02u', $transition['offset'] / 3600, abs($transition['offset']) % 3600 / 60);
        }

        return false;
    }
}
