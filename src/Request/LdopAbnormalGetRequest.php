<?php

namespace ACES\Request;

class LdopAbnormalGetRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.ldop.abnormal.get';
    }

    public function check()
    {
    }

    public function getCustomerCode()
    {
        return $this->apiParas['customerCode'];
    }

    public function setCustomerCode($customerCode)
    {
        $this->apiParas['customerCode'] = $customerCode;

        return $this;
    }
}
