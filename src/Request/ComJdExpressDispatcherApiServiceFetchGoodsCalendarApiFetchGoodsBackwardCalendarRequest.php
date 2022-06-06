<?php

namespace ACES\Request;


class ComJdExpressDispatcherApiServiceFetchGoodsCalendarApiFetchGoodsBackwardCalendarRequest
{
    private $apiParas = array();
    private $version;
    private $districtName;
    private $fullAddress;
    private $districtCode;
    private $townName;
    private $cityName;
    private $provinceCode;
    private $cityCode;
    private $provinceName;
    private $orderId;
    private $detailAddress;
    private $townCode;

    public function getApiMethodName()
    {
        return "jingdong.com.jd.express.dispatcher.api.service.FetchGoodsCalendarApi.fetchGoodsBackwardCalendar";
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

    public function getDistrictName()
    {
        return $this->districtName;
    }

    public function setDistrictName($districtName)
    {
        $this->districtName = $districtName;
        $this->apiParas["districtName"] = $districtName;
    }

    public function getFullAddress()
    {
        return $this->fullAddress;
    }

    public function setFullAddress($fullAddress)
    {
        $this->fullAddress = $fullAddress;
        $this->apiParas["fullAddress"] = $fullAddress;
    }

    public function getDistrictCode()
    {
        return $this->districtCode;
    }

    public function setDistrictCode($districtCode)
    {
        $this->districtCode = $districtCode;
        $this->apiParas["districtCode"] = $districtCode;
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

    public function getCityName()
    {
        return $this->cityName;
    }

    public function setCityName($cityName)
    {
        $this->cityName = $cityName;
        $this->apiParas["cityName"] = $cityName;
    }

    public function getProvinceCode()
    {
        return $this->provinceCode;
    }

    public function setProvinceCode($provinceCode)
    {
        $this->provinceCode = $provinceCode;
        $this->apiParas["provinceCode"] = $provinceCode;
    }

    public function getCityCode()
    {
        return $this->cityCode;
    }

    public function setCityCode($cityCode)
    {
        $this->cityCode = $cityCode;
        $this->apiParas["cityCode"] = $cityCode;
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

    public function getOrderId()
    {
        return $this->orderId;
    }

    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
        $this->apiParas["orderId"] = $orderId;
    }

    public function getDetailAddress()
    {
        return $this->detailAddress;
    }

    public function setDetailAddress($detailAddress)
    {
        $this->detailAddress = $detailAddress;
        $this->apiParas["detailAddress"] = $detailAddress;
    }

    public function getTownCode()
    {
        return $this->townCode;
    }

    public function setTownCode($townCode)
    {
        $this->townCode = $townCode;
        $this->apiParas["townCode"] = $townCode;
    }
}
