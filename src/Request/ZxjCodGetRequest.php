<?php

namespace ACES\Request;

class ZxjCodGetRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.zxj.cod.get';
    }

    public function check()
    {
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

    public function getCountyId()
    {
        return $this->apiParas['countyId'];
    }

    public function setCountyId($countyId)
    {
        $this->apiParas['countyId'] = $countyId;

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
}
