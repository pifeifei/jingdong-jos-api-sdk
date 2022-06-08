<?php

namespace ACES\Request;

class LdopAlphaWaybillQueryRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.ldop.alpha.waybill.query';
    }

    public function check()
    {
    }

    public function getProviderCode()
    {
        return $this->apiParas['providerCode'];
    }

    public function setProviderCode($providerCode)
    {
        $this->apiParas['providerCode'] = $providerCode;

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
