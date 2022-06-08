<?php

namespace ACES\Request;

class JdAddressFromAddressGetRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.JdAddressFromAddress.get';
    }

    public function check()
    {
    }

    public function getUserid()
    {
        return $this->apiParas['userid'];
    }

    public function setUserid($userid)
    {
        $this->apiParas['userid'] = $userid;

        return $this;
    }

    public function getKey()
    {
        return $this->apiParas['key'];
    }

    public function setKey($key)
    {
        $this->apiParas['key'] = $key;

        return $this;
    }

    public function getProvinceId()
    {
        return $this->apiParas['provinceId'];
    }

    public function setProvinceId($provinceId)
    {
        $this->apiParas['provinceId'] = $provinceId;

        return $this;
    }

    public function getCityId()
    {
        return $this->apiParas['cityId'];
    }

    public function setCityId($cityId)
    {
        $this->apiParas['cityId'] = $cityId;

        return $this;
    }

    public function getCountryId()
    {
        return $this->apiParas['countryId'];
    }

    public function setCountryId($countryId)
    {
        $this->apiParas['countryId'] = $countryId;

        return $this;
    }

    public function getTownId()
    {
        return $this->apiParas['townId'];
    }

    public function setTownId($townId)
    {
        $this->apiParas['townId'] = $townId;

        return $this;
    }

    public function getAddress()
    {
        return $this->apiParas['address'];
    }

    public function setAddress($address)
    {
        $this->apiParas['address'] = $address;

        return $this;
    }

    public function getShipping()
    {
        return $this->apiParas['shipping'];
    }

    public function setShipping($shipping)
    {
        $this->apiParas['shipping'] = $shipping;

        return $this;
    }
}
