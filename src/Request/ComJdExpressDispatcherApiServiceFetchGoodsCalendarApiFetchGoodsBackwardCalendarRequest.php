<?php

namespace ACES\Request;

class ComJdExpressDispatcherApiServiceFetchGoodsCalendarApiFetchGoodsBackwardCalendarRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.com.jd.express.dispatcher.api.service.FetchGoodsCalendarApi.fetchGoodsBackwardCalendar';
    }

    public function check()
    {
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
    }

    public function getDistrictName()
    {
        return $this->apiParas['districtName'];
    }

    public function setDistrictName($districtName)
    {
        $this->apiParas['districtName'] = $districtName;
    }

    public function getFullAddress()
    {
        return $this->apiParas['fullAddress'];
    }

    public function setFullAddress($fullAddress)
    {
        $this->apiParas['fullAddress'] = $fullAddress;
    }

    public function getDistrictCode()
    {
        return $this->apiParas['districtCode'];
    }

    public function setDistrictCode($districtCode)
    {
        $this->apiParas['districtCode'] = $districtCode;
    }

    public function getTownName()
    {
        return $this->apiParas['townName'];
    }

    public function setTownName($townName)
    {
        $this->apiParas['townName'] = $townName;
    }

    public function getCityName()
    {
        return $this->apiParas['cityName'];
    }

    public function setCityName($cityName)
    {
        $this->apiParas['cityName'] = $cityName;
    }

    public function getProvinceCode()
    {
        return $this->apiParas['provinceCode'];
    }

    public function setProvinceCode($provinceCode)
    {
        $this->apiParas['provinceCode'] = $provinceCode;
    }

    public function getCityCode()
    {
        return $this->apiParas['cityCode'];
    }

    public function setCityCode($cityCode)
    {
        $this->apiParas['cityCode'] = $cityCode;
    }

    public function getProvinceName()
    {
        return $this->apiParas['provinceName'];
    }

    public function setProvinceName($provinceName)
    {
        $this->apiParas['provinceName'] = $provinceName;
    }

    public function getOrderId()
    {
        return $this->apiParas['orderId'];
    }

    public function setOrderId($orderId)
    {
        $this->apiParas['orderId'] = $orderId;
    }

    public function getDetailAddress()
    {
        return $this->apiParas['detailAddress'];
    }

    public function setDetailAddress($detailAddress)
    {
        $this->apiParas['detailAddress'] = $detailAddress;
    }

    public function getTownCode()
    {
        return $this->apiParas['townCode'];
    }

    public function setTownCode($townCode)
    {
        $this->apiParas['townCode'] = $townCode;
    }
}
