<?php

namespace ACES;

use ACES\Contracts\RequestInterFace;
use DateTimeZone;
use Exception;
use stdClass;

class JdClient
{
    protected string $serverUrl = 'https://api.jd.com/routerjson';

    /**
     * @var JDToken
     */
    protected $accessToken;

    protected int $connectTimeout = 0;

    protected int $readTimeout = 0;

    protected string $appKey;

    protected string $appSecret;

    protected string $version = '2.0';

    /**
     * 格式化类型
     * @var string 目前仅支持 json 格式
     */
    protected string $format = 'json';

//    private $charset = 'UTF-8';

    protected $jsonParamKey = '360buy_param_json';

    public function __construct($appKey, $appSecret)
    {
        $this->appKey = $appKey;
        $this->appSecret = $appSecret;
        $this->accessToken = new JDToken($appKey, $appSecret);
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
     * @return int
     */
    public function getConnectTimeout(): int
    {
        return $this->connectTimeout;
    }

    /**
     * @param  int  $connectTimeout
     */
    public function setConnectTimeout(int $connectTimeout): void
    {
        $this->connectTimeout = $connectTimeout;
    }

    /**
     * @return int
     */
    public function getReadTimeout(): int
    {
        return $this->readTimeout;
    }

    /**
     * @param  int  $readTimeout
     */
    public function setReadTimeout(int $readTimeout): void
    {
        $this->readTimeout = $readTimeout;
    }

    /**
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }

    /**
     * @return string
     */
    public function accessToken()
    {
        return $this->accessToken->accessToken();
    }

    /**
     * @return JDToken
     */
    public function getAccessToken()
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
     * @param  string|null  $accessToken
     *
     * @return false|\SimpleXMLElement|stdClass
     */
    public function execute(RequestInterFace $request, string $accessToken = null)
    {
        $sysParams['app_key'] = $this->appKey;
        $sysParams['v'] = $request->getVersion($this->version);
        $sysParams['method'] = $request->getApiMethodName();
        $sysParams['timestamp'] = $this->getCurrentTimeFormatted();
        if (null != $accessToken) {
            $sysParams['access_token'] = $accessToken;
        }

        $apiParams = $request->getApiParas();
        $sysParams[$this->jsonParamKey] = $apiParams;
        $sysParams['sign'] = $this->generateSign($sysParams);

        $requestUrl = $this->serverUrl.'?'.http_build_query($sysParams);

//        foreach ($sysParams as $sysParamKey => $sysParamValue) {
//            $requestUrl .= "$sysParamKey=".urlencode($sysParamValue)."&";
//        }

        try {
            $resp = $this->curl($requestUrl, $apiParams);
        } catch (Exception $e) {
            $result = new stdClass();
            $result->code = $e->getCode();
            $result->msg = $e->getMessage();

            return $result;
        }

        if ('json' == $this->format) {
            $respObject = json_decode($resp);
            if (null !== $respObject) {
                return $respObject;
            }
        }

        $result = new stdClass();
        $result->code = 0;
        $result->msg = 'HTTP_RESPONSE_NOT_WELL_FORMED';

        return $result;
    }

    public function curl($url, $postFields = null)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_FAILONERROR, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        if ($this->readTimeout) {
            curl_setopt($ch, CURLOPT_TIMEOUT, $this->readTimeout);
        }
        if ($this->connectTimeout) {
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $this->connectTimeout);
        }
        // https
        if (strlen($url) > 5 && 'https' == strtolower(substr($url, 0, 5))) {
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        }

        if (is_array($postFields) && 0 < count($postFields)) {
            $postBodyString = '';
            $postMultipart = false;
            foreach ($postFields as $k => $v) {
                if ('@' != substr($v, 0, 1)) {
                    $postBodyString .= "{$k}=".urlencode($v).'&';
                } else { // multipart/form-data www-form-urlencoded
                    $postMultipart = true;
                }
            }
            unset($k, $v);
            curl_setopt($ch, CURLOPT_POST, true);
            if ($postMultipart) {
                curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
            } else {
                curl_setopt($ch, CURLOPT_POSTFIELDS, substr($postBodyString, 0, -1));
            }
        }
        $reponse = curl_exec($ch);

        if (curl_errno($ch)) {
            throw new Exception(curl_error($ch), 0);
        }
        $httpStatusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        if (200 !== $httpStatusCode) {
            throw new Exception($reponse, $httpStatusCode);
        }

        curl_close($ch);

        return $reponse;
    }

    protected function generateSign($params)
    {
        ksort($params);
        $stringToBeSigned = $this->appSecret;
        foreach ($params as $k => $v) {
            if ('@' != substr($v, 0, 1)) {
                $stringToBeSigned .= "{$k}{$v}";
            }
        }
        unset($k, $v);
        $stringToBeSigned .= $this->appSecret;

        return strtoupper(md5($stringToBeSigned));
    }

    private function getCurrentTimeFormatted()
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
