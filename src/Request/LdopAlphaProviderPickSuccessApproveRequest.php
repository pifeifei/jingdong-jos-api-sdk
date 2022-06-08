<?php

namespace ACES\Request;

class LdopAlphaProviderPickSuccessApproveRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.ldop.alpha.provider.pick.success.approve';
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

    public function getDeliveryId()
    {
        return $this->apiParas['deliveryId'];
    }

    public function setDeliveryId($deliveryId)
    {
        $this->apiParas['deliveryId'] = $deliveryId;

        return $this;
    }

    public function getWeight()
    {
        return $this->apiParas['weight'];
    }

    public function setWeight($weight)
    {
        $this->apiParas['weight'] = $weight;

        return $this;
    }

    public function getVolume()
    {
        return $this->apiParas['volume'];
    }

    public function setVolume($volume)
    {
        $this->apiParas['volume'] = $volume;

        return $this;
    }

    public function getMoney()
    {
        return $this->apiParas['money'];
    }

    public function setMoney($money)
    {
        $this->apiParas['money'] = $money;

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
