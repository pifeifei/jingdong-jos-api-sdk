<?php

class LdopAlphaProviderPickFailApproveRequest
{
    private $apiParas = array();

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

    private $version;

    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function getVersion()
    {
        return $this->version;
    }
                                                                                                                                    private $pickupCode;

    public function setPickupCode($pickupCode)
    {
        $this->pickupCode = $pickupCode;
         $this->apiParas["pickupCode"] = $pickupCode;
    }

    public function getPickupCode()
    {
        return $this->pickupCode;
    }

                                                        private $providerCode;

    public function setProviderCode($providerCode)
    {
        $this->providerCode = $providerCode;
         $this->apiParas["providerCode"] = $providerCode;
    }

    public function getProviderCode()
    {
        return $this->providerCode;
    }

                                                        private $failCode;

    public function setFailCode($failCode)
    {
        $this->failCode = $failCode;
         $this->apiParas["failCode"] = $failCode;
    }

    public function getFailCode()
    {
        return $this->failCode;
    }

                                                        private $failReason;

    public function setFailReason($failReason)
    {
        $this->failReason = $failReason;
         $this->apiParas["failReason"] = $failReason;
    }

    public function getFailReason()
    {
        return $this->failReason;
    }

                                                        private $operateTime;

    public function setOperateTime($operateTime)
    {
        $this->operateTime = $operateTime;
         $this->apiParas["operateTime"] = $operateTime;
    }

    public function getOperateTime()
    {
        return $this->operateTime;
    }
}
