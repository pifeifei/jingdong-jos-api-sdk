<?php

namespace ACES\Request;

class LdopAlphaVendorBigshotQueryRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.ldop.alpha.vendor.bigshot.query';
    }

    public function check()
    {
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

    public function getProviderId()
    {
        return $this->apiParas['providerId'];
    }

    public function setProviderId($providerId)
    {
        $this->apiParas['providerId'] = $providerId;

        return $this;
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
}
