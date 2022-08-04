<?php

namespace ACES\Request;

class LdopProCheckRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.ldop.pro.check';
    }

    public function check()
    {
    }

    public function getCheckType()
    {
        return $this->apiParas['checkType'];
    }

    public function setCheckType($checkType)
    {
        $this->apiParas['checkType'] = $checkType;

        return $this;
    }

    public function getCustomerCode()
    {
        return $this->apiParas['customerCode'];
    }

    public function setCustomerCode($customerCode)
    {
        $this->apiParas['customerCode'] = $customerCode;

        return $this;
    }

    public function getTid()
    {
        return $this->apiParas['tid'];
    }

    public function setTid($tid)
    {
        $this->apiParas['tid'] = $tid;

        return $this;
    }

    public function getProvinceName()
    {
        return $this->apiParas['provinceName'];
    }

    public function setProvinceName($provinceName)
    {
        $this->apiParas['provinceName'] = $provinceName;

        return $this;
    }

    public function getCityName()
    {
        return $this->apiParas['cityName'];
    }

    public function setCityName($cityName)
    {
        $this->apiParas['cityName'] = $cityName;

        return $this;
    }

    public function getCountyName()
    {
        return $this->apiParas['countyName'];
    }

    public function setCountyName($countyName)
    {
        $this->apiParas['countyName'] = $countyName;

        return $this;
    }

    public function getTownName()
    {
        return $this->apiParas['townName'];
    }

    public function setTownName($townName)
    {
        $this->apiParas['townName'] = $townName;

        return $this;
    }

    public function getLongitude()
    {
        return $this->apiParas['longitude'];
    }

    public function setLongitude($longitude)
    {
        $this->apiParas['longitude'] = $longitude;

        return $this;
    }

    public function getLatitude()
    {
        return $this->apiParas['latitude'];
    }

    public function setLatitude($latitude)
    {
        $this->apiParas['latitude'] = $latitude;

        return $this;
    }

    public function getDetailedAddress()
    {
        return $this->apiParas['detailedAddress'];
    }

    public function setDetailedAddress($detailedAddress)
    {
        $this->apiParas['detailedAddress'] = $detailedAddress;

        return $this;
    }

    public function getAddressType()
    {
        return $this->apiParas['addressType'];
    }

    public function setAddressType($addressType)
    {
        $this->apiParas['addressType'] = $addressType;

        return $this;
    }
}
