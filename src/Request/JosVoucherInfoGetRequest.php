<?php

namespace ACES\Request;


class JosVoucherInfoGetRequest
{
    private $apiParas = array();
    private $version;
    private $accessToken;
    private $customerUserId;

    public function getApiMethodName()
    {
        return "jingdong.jos.voucher.info.get";
    }

    public function getApiParas()
    {
        if (empty($this->apiParas)) {
            return "{}";
        }
        return json_encode($this->apiParas);
    }

    public function check()
    {
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }

    public function getVersion()
    {
        return $this->version;
    }

    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function getAccessToken()
    {
        return $this->accessToken;
    }

    public function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;
        $this->apiParas["access_token"] = $accessToken;
    }

    public function getCustomerUserId()
    {
        return $this->customerUserId;
    }

    public function setCustomerUserId($customerUserId)
    {
        $this->customerUserId = $customerUserId;
        $this->apiParas["customer_user_id"] = $customerUserId;
    }
}
