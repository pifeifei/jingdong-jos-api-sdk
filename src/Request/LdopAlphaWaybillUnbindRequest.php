<?php

namespace ACES\Request;


class LdopAlphaWaybillUnbindRequest
{
    private $apiParas = array();
    private $version;
    private $platformOrderNo;
    private $providerId;
    private $providerCode;
    private $operatorName;
    private $operatorTime;
    private $waybillCodeList;

    public function getApiMethodName()
    {
        return "jingdong.ldop.alpha.waybill.unbind";
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

    public function getPlatformOrderNo()
    {
        return $this->platformOrderNo;
    }

    public function setPlatformOrderNo($platformOrderNo)
    {
        $this->platformOrderNo = $platformOrderNo;
        $this->apiParas["platformOrderNo"] = $platformOrderNo;
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

    public function getOperatorName()
    {
        return $this->operatorName;
    }

    public function setOperatorName($operatorName)
    {
        $this->operatorName = $operatorName;
        $this->apiParas["operatorName"] = $operatorName;
    }

    public function getOperatorTime()
    {
        return $this->operatorTime;
    }

    public function setOperatorTime($operatorTime)
    {
        $this->operatorTime = $operatorTime;
        $this->apiParas["operatorTime"] = $operatorTime;
    }

    public function getWaybillCodeList()
    {
        return $this->waybillCodeList;
    }

    public function setWaybillCodeList($waybillCodeList)
    {
        $this->waybillCodeList = $waybillCodeList;
        $this->apiParas["waybillCodeList"] = $waybillCodeList;
    }
}
