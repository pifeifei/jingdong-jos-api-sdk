<?php

namespace ACES\Request;

class JosSecretApiReportGetRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.jos.secret.api.report.get';
    }

    public function check()
    {
    }

    public function getAccessToken()
    {
        return $this->apiParas['accessToken'];
    }

    public function setAccessToken($accessToken)
    {
        $this->apiParas['accessToken'] = $accessToken;

        return $this;
    }

    public function getBusinessId()
    {
        return $this->apiParas['businessId'];
    }

    public function setBusinessId($businessId)
    {
        $this->apiParas['businessId'] = $businessId;

        return $this;
    }

    public function getText()
    {
        return $this->apiParas['text'];
    }

    public function setText($text)
    {
        $this->apiParas['text'] = $text;

        return $this;
    }

    public function getAttribute()
    {
        return $this->apiParas['attribute'];
    }

    public function setAttribute($attribute)
    {
        $this->apiParas['attribute'] = $attribute;

        return $this;
    }

    public function getCustomerUserId()
    {
        return $this->apiParas['customerUserId'];
    }

    public function setCustomerUserId($customerUserId)
    {
        $this->apiParas['customerUserId'] = $customerUserId;

        return $this;
    }

    public function getServerUrl()
    {
        return $this->apiParas['serverUrl'];
    }

    public function setServerUrl($serverUrl)
    {
        $this->apiParas['serverUrl'] = $serverUrl;

        return $this;
    }
}
