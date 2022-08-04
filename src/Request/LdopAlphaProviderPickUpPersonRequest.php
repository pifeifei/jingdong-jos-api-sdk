<?php

namespace ACES\Request;

class LdopAlphaProviderPickUpPersonRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.ldop.alpha.provider.pick.up.person';
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

    public function getSiteName()
    {
        return $this->apiParas['siteName'];
    }

    public function setSiteName($siteName)
    {
        $this->apiParas['siteName'] = $siteName;

        return $this;
    }

    public function getPickPerson()
    {
        return $this->apiParas['pickPerson'];
    }

    public function setPickPerson($pickPerson)
    {
        $this->apiParas['pickPerson'] = $pickPerson;

        return $this;
    }

    public function getPhone()
    {
        return $this->apiParas['phone'];
    }

    public function setPhone($phone)
    {
        $this->apiParas['phone'] = $phone;

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
