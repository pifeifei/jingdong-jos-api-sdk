<?php

namespace ACES\Request;

class LdopReceiveTraceGetRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.ldop.receive.trace.get';
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

    public function getWaybillCode()
    {
        return $this->apiParas['waybillCode'];
    }

    public function setWaybillCode($waybillCode)
    {
        $this->apiParas['waybillCode'] = $waybillCode;

        return $this;
    }
}
