<?php

class LdopProCheckRequest
{
    private $apiParas = array();

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

    private $version;

    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function getVersion()
    {
        return $this->version;
    }
                                                                                                                                    private $checkType;

    public function setCheckType($checkType)
    {
        $this->checkType = $checkType;
         $this->apiParas["checkType"] = $checkType;
    }

    public function getCheckType()
    {
        return $this->checkType;
    }

                                                        private $customerCode;

    public function setCustomerCode($customerCode)
    {
        $this->customerCode = $customerCode;
         $this->apiParas["customerCode"] = $customerCode;
    }

    public function getCustomerCode()
    {
        return $this->customerCode;
    }

                                                        private $tid;

    public function setTid($tid)
    {
        $this->tid = $tid;
         $this->apiParas["tid"] = $tid;
    }

    public function getTid()
    {
        return $this->tid;
    }

                                                                                                                                                                                                                                                                                                                                                                        private $provinceName;
    public function setProvinceName($provinceName)
    {
        $this->provinceName = $provinceName;
        $this->apiParas["provinceName"] = $provinceName;
    }

    public function getProvinceName()
    {
        return $this->provinceName;
    }
                                                                                                                                                                                                                                                                                                                       private $cityName;
    public function setCityName($cityName)
    {
        $this->cityName = $cityName;
        $this->apiParas["cityName"] = $cityName;
    }

    public function getCityName()
    {
        return $this->cityName;
    }
                                                                                                                                                                                                                                                                                                                       private $countyName;
    public function setCountyName($countyName)
    {
        $this->countyName = $countyName;
        $this->apiParas["countyName"] = $countyName;
    }

    public function getCountyName()
    {
        return $this->countyName;
    }
                                                                                                                                                                                                                                                                                                                       private $townName;
    public function setTownName($townName)
    {
        $this->townName = $townName;
        $this->apiParas["townName"] = $townName;
    }

    public function getTownName()
    {
        return $this->townName;
    }
                                                                                                                                                                                                                                                                                                                       private $longitude;
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
        $this->apiParas["longitude"] = $longitude;
    }

    public function getLongitude()
    {
        return $this->longitude;
    }
                                                                                                                                                                                                                                                                                                                       private $latitude;
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
        $this->apiParas["latitude"] = $latitude;
    }

    public function getLatitude()
    {
        return $this->latitude;
    }
                                                                                                                                                                                                                                                                                                                       private $detailedAddress;
    public function setDetailedAddress($detailedAddress)
    {
        $this->detailedAddress = $detailedAddress;
        $this->apiParas["detailedAddress"] = $detailedAddress;
    }

    public function getDetailedAddress()
    {
        return $this->detailedAddress;
    }
                                                                                                                                                                                                                                                                                                                       private $addressType;
    public function setAddressType($addressType)
    {
        $this->addressType = $addressType;
        $this->apiParas["addressType"] = $addressType;
    }

    public function getAddressType()
    {
        return $this->addressType;
    }
}
