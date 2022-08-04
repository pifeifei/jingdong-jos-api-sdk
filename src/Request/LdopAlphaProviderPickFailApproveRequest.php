<?php

namespace ACES\Request;

class LdopAlphaProviderPickFailApproveRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.ldop.alpha.provider.pick.fail.approve';
    }

    public function check()
    {
    }

    public function getPickupCode()
    {
        return $this->apiParas['pickupCode'];
    }

    public function setPickupCode($pickupCode)
    {
        $this->apiParas['pickupCode'] = $pickupCode;

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

    public function getFailCode()
    {
        return $this->apiParas['failCode'];
    }

    public function setFailCode($failCode)
    {
        $this->apiParas['failCode'] = $failCode;

        return $this;
    }

    public function getFailReason()
    {
        return $this->apiParas['failReason'];
    }

    public function setFailReason($failReason)
    {
        $this->apiParas['failReason'] = $failReason;

        return $this;
    }

    public function getOperateTime()
    {
        return $this->apiParas['operateTime'];
    }

    public function setOperateTime($operateTime)
    {
        $this->apiParas['operateTime'] = $operateTime;

        return $this;
    }
}
