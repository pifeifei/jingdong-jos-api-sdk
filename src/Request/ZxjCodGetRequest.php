<?php

namespace ACES\Request;


class ZxjCodGetRequest
{
    private $apiParas = array();
    private $version;
    private $provinceId;
    private $cityId;
    private $countyId;
    private $townId;

    public function getApiMethodName()
    {
        return "jingdong.zxj.cod.get";
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

    public function getProvinceId()
    {
        return $this->provinceId;
    }

    public function setProvinceId($provinceId)
    {
        $this->provinceId = $provinceId;
        $this->apiParas["province_id"] = $provinceId;
    }

    public function getCityId()
    {
        return $this->cityId;
    }

    public function setCityId($cityId)
    {
        $this->cityId = $cityId;
        $this->apiParas["city_id"] = $cityId;
    }

    public function getCountyId()
    {
        return $this->countyId;
    }

    public function setCountyId($countyId)
    {
        $this->countyId = $countyId;
        $this->apiParas["county_id"] = $countyId;
    }

    public function getTownId()
    {
        return $this->townId;
    }

    public function setTownId($townId)
    {
        $this->townId = $townId;
        $this->apiParas["town_id"] = $townId;
    }
}
