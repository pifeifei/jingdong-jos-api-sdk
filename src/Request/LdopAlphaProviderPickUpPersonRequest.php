<?php

namespace ACES\Request;


class LdopAlphaProviderPickUpPersonRequest
{
    private $apiParas = array();
    private $version;
    private $pickupCode;
    private $providerCode;
    private $siteName;
    private $pickPerson;
    private $phone;
    private $operateTime;

    public function getApiMethodName()
    {
        return "jingdong.ldop.alpha.provider.pick.up.person";
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

    public function getSiteName()
    {
        return $this->siteName;
    }

    public function setSiteName($siteName)
    {
        $this->siteName = $siteName;
        $this->apiParas["siteName"] = $siteName;
    }

    public function getPickPerson()
    {
        return $this->pickPerson;
    }

    public function setPickPerson($pickPerson)
    {
        $this->pickPerson = $pickPerson;
        $this->apiParas["pickPerson"] = $pickPerson;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
        $this->apiParas["phone"] = $phone;
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
