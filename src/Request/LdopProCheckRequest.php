<?php

namespace ACES\Request;


class LdopProCheckRequest
{
    private $apiParas = array();
    private $version;
    private $checkType;
    private $customerCode;
    private $tid;
    private $provinceName;
    private $cityName;
    private $countyName;
    private $townName;
    private $longitude;
    private $latitude;
    private $detailedAddress;
    private $addressType;

    public function getApiMethodName()
    {
        return "jingdong.ldop.pro.check";
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

    public function getCheckType()
    {
        return $this->checkType;
    }

    public function setCheckType($checkType)
    {
        $this->checkType = $checkType;
        $this->apiParas["checkType"] = $checkType;
    }

    public function getCustomerCode()
    {
        return $this->customerCode;
    }

    public function setCustomerCode($customerCode)
    {
        $this->customerCode = $customerCode;
        $this->apiParas["customerCode"] = $customerCode;
    }

    public function getTid()
    {
        return $this->tid;
    }

    public function setTid($tid)
    {
        $this->tid = $tid;
        $this->apiParas["tid"] = $tid;
    }

    public function getProvinceName()
    {
        return $this->provinceName;
    }

    public function setProvinceName($provinceName)
    {
        $this->provinceName = $provinceName;
        $this->apiParas["provinceName"] = $provinceName;
    }

    public function getCityName()
    {
        return $this->cityName;
    }

    public function setCityName($cityName)
    {
        $this->cityName = $cityName;
        $this->apiParas["cityName"] = $cityName;
    }

    public function getCountyName()
    {
        return $this->countyName;
    }

    public function setCountyName($countyName)
    {
        $this->countyName = $countyName;
        $this->apiParas["countyName"] = $countyName;
    }

    public function getTownName()
    {
        return $this->townName;
    }

    public function setTownName($townName)
    {
        $this->townName = $townName;
        $this->apiParas["townName"] = $townName;
    }

    public function getLongitude()
    {
        return $this->longitude;
    }

    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
        $this->apiParas["longitude"] = $longitude;
    }

    public function getLatitude()
    {
        return $this->latitude;
    }

    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
        $this->apiParas["latitude"] = $latitude;
    }

    public function getDetailedAddress()
    {
        return $this->detailedAddress;
    }

    public function setDetailedAddress($detailedAddress)
    {
        $this->detailedAddress = $detailedAddress;
        $this->apiParas["detailedAddress"] = $detailedAddress;
    }

    public function getAddressType()
    {
        return $this->addressType;
    }

    public function setAddressType($addressType)
    {
        $this->addressType = $addressType;
        $this->apiParas["addressType"] = $addressType;
    }
}
