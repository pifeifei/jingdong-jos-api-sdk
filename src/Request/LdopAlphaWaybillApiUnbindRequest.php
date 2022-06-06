<?php

namespace ACES\Request;


class LdopAlphaWaybillApiUnbindRequest
{
    private $apiParas = array();
    private $version;
    private $providerId;
    private $providerCode;
    private $waybillCode;

    public function getApiMethodName()
    {
        return "jingdong.ldop.alpha.waybill.api.unbind";
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

    public function getProviderId()
    {
        return $this->providerId;
    }

    public function setProviderId($providerId)
    {
        $this->providerId = $providerId;
        $this->apiParas["providerId"] = $providerId;
    }

    public function getProviderCode()
    {
        return $this->providerCode;
    }

    public function setProviderCode($providerCode)
    {
        $this->providerCode = $providerCode;
        $this->apiParas["providerCode"] = $providerCode;
    }

    public function getWaybillCode()
    {
        return $this->waybillCode;
    }

    public function setWaybillCode($waybillCode)
    {
        $this->waybillCode = $waybillCode;
        $this->apiParas["waybillCode"] = $waybillCode;
    }
}
