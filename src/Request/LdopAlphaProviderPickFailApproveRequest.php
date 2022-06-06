<?php

namespace ACES\Request;


class LdopAlphaProviderPickFailApproveRequest
{
    private $apiParas = array();
    private $version;
    private $pickupCode;
    private $providerCode;
    private $failCode;
    private $failReason;
    private $operateTime;

    public function getApiMethodName()
    {
        return "jingdong.ldop.alpha.provider.pick.fail.approve";
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

    public function getPickupCode()
    {
        return $this->pickupCode;
    }

    public function setPickupCode($pickupCode)
    {
        $this->pickupCode = $pickupCode;
        $this->apiParas["pickupCode"] = $pickupCode;
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

    public function getFailCode()
    {
        return $this->failCode;
    }

    public function setFailCode($failCode)
    {
        $this->failCode = $failCode;
        $this->apiParas["failCode"] = $failCode;
    }

    public function getFailReason()
    {
        return $this->failReason;
    }

    public function setFailReason($failReason)
    {
        $this->failReason = $failReason;
        $this->apiParas["failReason"] = $failReason;
    }

    public function getOperateTime()
    {
        return $this->operateTime;
    }

    public function setOperateTime($operateTime)
    {
        $this->operateTime = $operateTime;
        $this->apiParas["operateTime"] = $operateTime;
    }
}
