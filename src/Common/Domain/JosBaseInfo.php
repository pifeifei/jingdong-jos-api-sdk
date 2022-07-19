<?php

namespace ACES\Common\Domain;

class JosBaseInfo
{
    private string $appKey;
    private string $appSecret;
    private string $accessToken;
    private string $timestamp;
    private string $version = '2.0';
    private string $serverUrl;

    /**
     * JosBaseInfo constructor.
     *
     * @param string $appKey
     * @param string $appSecret
     * @param string $accessToken
     * @param string $serverUrl
     */
    public function __construct(string $appKey, string $appSecret, string $accessToken, string $serverUrl)
    {
        $this->appKey = $appKey;
        $this->appSecret = $appSecret;
        $this->accessToken = $accessToken;
        $this->serverUrl = $serverUrl;
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
    public function getAccessToken(): string
    {
        return $this->accessToken;
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
    public function getServerUrl(): string
    {
        return $this->serverUrl;
    }

    /**
     * @param bool $init
     *
     * @return string
     */
    public function getTimestamp(bool $init = true): string
    {
        if ($init || !isset($this->timestamp)) {
            // TODO delete date_default_timezone_set
            date_default_timezone_set('prc');
            $this->timestamp = date('Y-m-d H:i:s');
        }

        return $this->timestamp;
    }

    /**
     * @param \ACES\Common\ProduceRequest $josReuqest
     *
     * @return array
     */
    public function getFormParams($josReuqest): array
    {
        $request = [];
        $request['360buy_param_json'] = $josReuqest->to360buyParamJson();
        $request['app_key'] = $this->getAppKey();
        $request['access_token'] = $this->getAccessToken();
        $request['timestamp'] = $this->getTimestamp();
        $request['v'] = $this->getVersion();
        $request['method'] = $josReuqest->getJosMethod();
        $request['sign'] = $this->generateSign($request);

        return $request;
    }

    private function generateSign($params): string
    {
        ksort($params);
        $stringToBeSigned = $this->appSecret;
        foreach ($params as $k => $v) {
            $stringToBeSigned .= $k.$v;
        }
        $stringToBeSigned .= $this->appSecret;

        return strtoupper(md5($stringToBeSigned));
    }
}
