<?php

namespace ACES\Request;

class JosVoucherInfoGetRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.jos.voucher.info.get';
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

    public function getCustomerUserId()
    {
        return $this->apiParas['customerUserId'];
    }

    public function setCustomerUserId($customerUserId)
    {
        $this->apiParas['customerUserId'] = $customerUserId;

        return $this;
    }
}
