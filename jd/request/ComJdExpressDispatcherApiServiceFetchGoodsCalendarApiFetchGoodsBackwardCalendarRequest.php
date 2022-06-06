<?php

class ComJdExpressDispatcherApiServiceFetchGoodsCalendarApiFetchGoodsBackwardCalendarRequest
{
    private $apiParas = array();

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

    private $version;

    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function getVersion()
    {
        return $this->version;
    }
                                                                                                                                    private $districtName;

    public function setDistrictName($districtName)
    {
        $this->districtName = $districtName;
         $this->apiParas["districtName"] = $districtName;
    }

    public function getDistrictName()
    {
        return $this->districtName;
    }

                                                        private $fullAddress;

    public function setFullAddress($fullAddress)
    {
        $this->fullAddress = $fullAddress;
         $this->apiParas["fullAddress"] = $fullAddress;
    }

    public function getFullAddress()
    {
        return $this->fullAddress;
    }

                                                        private $districtCode;

    public function setDistrictCode($districtCode)
    {
        $this->districtCode = $districtCode;
         $this->apiParas["districtCode"] = $districtCode;
    }

    public function getDistrictCode()
    {
        return $this->districtCode;
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

                                                        private $provinceCode;

    public function setProvinceCode($provinceCode)
    {
        $this->provinceCode = $provinceCode;
         $this->apiParas["provinceCode"] = $provinceCode;
    }

    public function getProvinceCode()
    {
        return $this->provinceCode;
    }

                                                        private $cityCode;

    public function setCityCode($cityCode)
    {
        $this->cityCode = $cityCode;
         $this->apiParas["cityCode"] = $cityCode;
    }

    public function getCityCode()
    {
        return $this->cityCode;
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

                                                        private $orderId;

    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
         $this->apiParas["orderId"] = $orderId;
    }

    public function getOrderId()
    {
        return $this->orderId;
    }

                                                        private $detailAddress;

    public function setDetailAddress($detailAddress)
    {
        $this->detailAddress = $detailAddress;
         $this->apiParas["detailAddress"] = $detailAddress;
    }

    public function getDetailAddress()
    {
        return $this->detailAddress;
    }

                                                        private $townCode;

    public function setTownCode($townCode)
    {
        $this->townCode = $townCode;
         $this->apiParas["townCode"] = $townCode;
    }

    public function getTownCode()
    {
        return $this->townCode;
    }
}
