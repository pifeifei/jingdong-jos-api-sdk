<?php

namespace ACES\Request;

class ServiceOrderUpdateRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.service.order.update';
    }

    public function check()
    {
    }

    public function getModel()
    {
        return $this->apiParas['model'];
    }

    public function setModel($model)
    {
        $this->apiParas['model'] = $model;

        return $this;
    }

    public function getWineCount()
    {
        return $this->apiParas['wineCount'];
    }

    public function setWineCount($wineCount)
    {
        $this->apiParas['wineCount'] = $wineCount;

        return $this;
    }

    public function getPresortType()
    {
        return $this->apiParas['presortType'];
    }

    public function setPresortType($presortType)
    {
        $this->apiParas['presortType'] = $presortType;

        return $this;
    }

    public function getRemark()
    {
        return $this->apiParas['remark'];
    }

    public function setRemark($remark)
    {
        $this->apiParas['remark'] = $remark;

        return $this;
    }

    public function getSaleRegion()
    {
        return $this->apiParas['saleRegion'];
    }

    public function setSaleRegion($saleRegion)
    {
        $this->apiParas['saleRegion'] = $saleRegion;

        return $this;
    }

    public function getProductUnit()
    {
        return $this->apiParas['productUnit'];
    }

    public function setProductUnit($productUnit)
    {
        $this->apiParas['productUnit'] = $productUnit;

        return $this;
    }

    public function getBanquetDeskNum()
    {
        return $this->apiParas['banquetDeskNum'];
    }

    public function setBanquetDeskNum($banquetDeskNum)
    {
        $this->apiParas['banquetDeskNum'] = $banquetDeskNum;

        return $this;
    }

    public function getServiceName()
    {
        return $this->apiParas['serviceName'];
    }

    public function setServiceName($serviceName)
    {
        $this->apiParas['serviceName'] = $serviceName;

        return $this;
    }

    public function getSaleName()
    {
        return $this->apiParas['saleName'];
    }

    public function setSaleName($saleName)
    {
        $this->apiParas['saleName'] = $saleName;

        return $this;
    }

    public function getServiceTime()
    {
        return $this->apiParas['serviceTime'];
    }

    public function setServiceTime($serviceTime)
    {
        $this->apiParas['serviceTime'] = $serviceTime;

        return $this;
    }

    public function getServiceCityName()
    {
        return $this->apiParas['serviceCityName'];
    }

    public function setServiceCityName($serviceCityName)
    {
        $this->apiParas['serviceCityName'] = $serviceCityName;

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

    public function getServiceProvinceName()
    {
        return $this->apiParas['serviceProvinceName'];
    }

    public function setServiceProvinceName($serviceProvinceName)
    {
        $this->apiParas['serviceProvinceName'] = $serviceProvinceName;

        return $this;
    }

    public function getBalcony()
    {
        return $this->apiParas['balcony'];
    }

    public function setBalcony($balcony)
    {
        $this->apiParas['balcony'] = $balcony;

        return $this;
    }

    public function getBanquetType()
    {
        return $this->apiParas['banquetType'];
    }

    public function setBanquetType($banquetType)
    {
        $this->apiParas['banquetType'] = $banquetType;

        return $this;
    }

    public function getServicePersonMobile()
    {
        return $this->apiParas['servicePersonMobile'];
    }

    public function setServicePersonMobile($servicePersonMobile)
    {
        $this->apiParas['servicePersonMobile'] = $servicePersonMobile;

        return $this;
    }

    public function getImei()
    {
        return $this->apiParas['imei'];
    }

    public function setImei($imei)
    {
        $this->apiParas['imei'] = $imei;

        return $this;
    }

    public function getServiceCountryName()
    {
        return $this->apiParas['serviceCountryName'];
    }

    public function setServiceCountryName($serviceCountryName)
    {
        $this->apiParas['serviceCountryName'] = $serviceCountryName;

        return $this;
    }

    public function getServiceDetailAddress()
    {
        return $this->apiParas['serviceDetailAddress'];
    }

    public function setServiceDetailAddress($serviceDetailAddress)
    {
        $this->apiParas['serviceDetailAddress'] = $serviceDetailAddress;

        return $this;
    }

    public function getOrderTime()
    {
        return $this->apiParas['orderTime'];
    }

    public function setOrderTime($orderTime)
    {
        $this->apiParas['orderTime'] = $orderTime;

        return $this;
    }

    public function getBusinessCategory()
    {
        return $this->apiParas['businessCategory'];
    }

    public function setBusinessCategory($businessCategory)
    {
        $this->apiParas['businessCategory'] = $businessCategory;

        return $this;
    }

    public function getShopRegion()
    {
        return $this->apiParas['shopRegion'];
    }

    public function setShopRegion($shopRegion)
    {
        $this->apiParas['shopRegion'] = $shopRegion;

        return $this;
    }

    public function getShopCode()
    {
        return $this->apiParas['shopCode'];
    }

    public function setShopCode($shopCode)
    {
        $this->apiParas['shopCode'] = $shopCode;

        return $this;
    }

    public function getServiceTownName()
    {
        return $this->apiParas['serviceTownName'];
    }

    public function setServiceTownName($serviceTownName)
    {
        $this->apiParas['serviceTownName'] = $serviceTownName;

        return $this;
    }

    public function getColor()
    {
        return $this->apiParas['color'];
    }

    public function setColor($color)
    {
        $this->apiParas['color'] = $color;

        return $this;
    }

    public function getBanquetBelong()
    {
        return $this->apiParas['banquetBelong'];
    }

    public function setBanquetBelong($banquetBelong)
    {
        $this->apiParas['banquetBelong'] = $banquetBelong;

        return $this;
    }

    public function getBrand()
    {
        return $this->apiParas['brand'];
    }

    public function setBrand($brand)
    {
        $this->apiParas['brand'] = $brand;

        return $this;
    }

    public function getServiceCode()
    {
        return $this->apiParas['serviceCode'];
    }

    public function setServiceCode($serviceCode)
    {
        $this->apiParas['serviceCode'] = $serviceCode;

        return $this;
    }

    public function getServicePersonName()
    {
        return $this->apiParas['servicePersonName'];
    }

    public function setServicePersonName($servicePersonName)
    {
        $this->apiParas['servicePersonName'] = $servicePersonName;

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

    public function getDeptCode()
    {
        return $this->apiParas['deptCode'];
    }

    public function setDeptCode($deptCode)
    {
        $this->apiParas['deptCode'] = $deptCode;

        return $this;
    }

    public function getProductName()
    {
        return $this->apiParas['productName'];
    }

    public function setProductName($productName)
    {
        $this->apiParas['productName'] = $productName;

        return $this;
    }

    public function getSaleMobile()
    {
        return $this->apiParas['saleMobile'];
    }

    public function setSaleMobile($saleMobile)
    {
        $this->apiParas['saleMobile'] = $saleMobile;

        return $this;
    }

    public function getOrderSubmitTime()
    {
        return $this->apiParas['orderSubmitTime'];
    }

    public function setOrderSubmitTime($orderSubmitTime)
    {
        $this->apiParas['orderSubmitTime'] = $orderSubmitTime;

        return $this;
    }

    public function getWithAddedService()
    {
        return $this->apiParas['withAddedService'];
    }

    public function setWithAddedService($withAddedService)
    {
        $this->apiParas['withAddedService'] = $withAddedService;

        return $this;
    }
}
