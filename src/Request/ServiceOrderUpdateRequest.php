<?php

namespace ACES\Request;


class ServiceOrderUpdateRequest
{
    private $apiParas = array();
    private $version;
    private $model;
    private $wineCount;
    private $presortType;
    private $remark;
    private $saleRegion;
    private $productUnit;
    private $banquetDeskNum;
    private $serviceName;
    private $saleName;
    private $serviceTime;
    private $serviceCityName;
    private $longitude;
    private $serviceProvinceName;
    private $balcony;
    private $banquetType;
    private $servicePersonMobile;
    private $imei;
    private $serviceCountryName;
    private $serviceDetailAddress;
    private $orderTime;
    private $businessCategory;
    private $shopRegion;
    private $shopCode;
    private $serviceTownName;
    private $color;
    private $banquetBelong;
    private $brand;
    private $serviceCode;
    private $servicePersonName;
    private $latitude;
    private $deptCode;
    private $productName;
    private $saleMobile;
    private $orderSubmitTime;
    private $withAddedService;

    public function getApiMethodName()
    {
        return "jingdong.service.order.update";
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

    public function getModel()
    {
        return $this->model;
    }

    public function setModel($model)
    {
        $this->model = $model;
        $this->apiParas["model"] = $model;
    }

    public function getWineCount()
    {
        return $this->wineCount;
    }

    public function setWineCount($wineCount)
    {
        $this->wineCount = $wineCount;
        $this->apiParas["wineCount"] = $wineCount;
    }

    public function getPresortType()
    {
        return $this->presortType;
    }

    public function setPresortType($presortType)
    {
        $this->presortType = $presortType;
        $this->apiParas["presortType"] = $presortType;
    }

    public function getRemark()
    {
        return $this->remark;
    }

    public function setRemark($remark)
    {
        $this->remark = $remark;
        $this->apiParas["remark"] = $remark;
    }

    public function getSaleRegion()
    {
        return $this->saleRegion;
    }

    public function setSaleRegion($saleRegion)
    {
        $this->saleRegion = $saleRegion;
        $this->apiParas["saleRegion"] = $saleRegion;
    }

    public function getProductUnit()
    {
        return $this->productUnit;
    }

    public function setProductUnit($productUnit)
    {
        $this->productUnit = $productUnit;
        $this->apiParas["productUnit"] = $productUnit;
    }

    public function getBanquetDeskNum()
    {
        return $this->banquetDeskNum;
    }

    public function setBanquetDeskNum($banquetDeskNum)
    {
        $this->banquetDeskNum = $banquetDeskNum;
        $this->apiParas["banquetDeskNum"] = $banquetDeskNum;
    }

    public function getServiceName()
    {
        return $this->serviceName;
    }

    public function setServiceName($serviceName)
    {
        $this->serviceName = $serviceName;
        $this->apiParas["serviceName"] = $serviceName;
    }

    public function getSaleName()
    {
        return $this->saleName;
    }

    public function setSaleName($saleName)
    {
        $this->saleName = $saleName;
        $this->apiParas["saleName"] = $saleName;
    }

    public function getServiceTime()
    {
        return $this->serviceTime;
    }

    public function setServiceTime($serviceTime)
    {
        $this->serviceTime = $serviceTime;
        $this->apiParas["serviceTime"] = $serviceTime;
    }

    public function getServiceCityName()
    {
        return $this->serviceCityName;
    }

    public function setServiceCityName($serviceCityName)
    {
        $this->serviceCityName = $serviceCityName;
        $this->apiParas["serviceCityName"] = $serviceCityName;
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

    public function getServiceProvinceName()
    {
        return $this->serviceProvinceName;
    }

    public function setServiceProvinceName($serviceProvinceName)
    {
        $this->serviceProvinceName = $serviceProvinceName;
        $this->apiParas["serviceProvinceName"] = $serviceProvinceName;
    }

    public function getBalcony()
    {
        return $this->balcony;
    }

    public function setBalcony($balcony)
    {
        $this->balcony = $balcony;
        $this->apiParas["balcony"] = $balcony;
    }

    public function getBanquetType()
    {
        return $this->banquetType;
    }

    public function setBanquetType($banquetType)
    {
        $this->banquetType = $banquetType;
        $this->apiParas["banquetType"] = $banquetType;
    }

    public function getServicePersonMobile()
    {
        return $this->servicePersonMobile;
    }

    public function setServicePersonMobile($servicePersonMobile)
    {
        $this->servicePersonMobile = $servicePersonMobile;
        $this->apiParas["servicePersonMobile"] = $servicePersonMobile;
    }

    public function getImei()
    {
        return $this->imei;
    }

    public function setImei($imei)
    {
        $this->imei = $imei;
        $this->apiParas["imei"] = $imei;
    }

    public function getServiceCountryName()
    {
        return $this->serviceCountryName;
    }

    public function setServiceCountryName($serviceCountryName)
    {
        $this->serviceCountryName = $serviceCountryName;
        $this->apiParas["serviceCountryName"] = $serviceCountryName;
    }

    public function getServiceDetailAddress()
    {
        return $this->serviceDetailAddress;
    }

    public function setServiceDetailAddress($serviceDetailAddress)
    {
        $this->serviceDetailAddress = $serviceDetailAddress;
        $this->apiParas["serviceDetailAddress"] = $serviceDetailAddress;
    }

    public function getOrderTime()
    {
        return $this->orderTime;
    }

    public function setOrderTime($orderTime)
    {
        $this->orderTime = $orderTime;
        $this->apiParas["orderTime"] = $orderTime;
    }

    public function getBusinessCategory()
    {
        return $this->businessCategory;
    }

    public function setBusinessCategory($businessCategory)
    {
        $this->businessCategory = $businessCategory;
        $this->apiParas["businessCategory"] = $businessCategory;
    }

    public function getShopRegion()
    {
        return $this->shopRegion;
    }

    public function setShopRegion($shopRegion)
    {
        $this->shopRegion = $shopRegion;
        $this->apiParas["shopRegion"] = $shopRegion;
    }

    public function getShopCode()
    {
        return $this->shopCode;
    }

    public function setShopCode($shopCode)
    {
        $this->shopCode = $shopCode;
        $this->apiParas["shopCode"] = $shopCode;
    }

    public function getServiceTownName()
    {
        return $this->serviceTownName;
    }

    public function setServiceTownName($serviceTownName)
    {
        $this->serviceTownName = $serviceTownName;
        $this->apiParas["serviceTownName"] = $serviceTownName;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
        $this->apiParas["color"] = $color;
    }

    public function getBanquetBelong()
    {
        return $this->banquetBelong;
    }

    public function setBanquetBelong($banquetBelong)
    {
        $this->banquetBelong = $banquetBelong;
        $this->apiParas["banquetBelong"] = $banquetBelong;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function setBrand($brand)
    {
        $this->brand = $brand;
        $this->apiParas["brand"] = $brand;
    }

    public function getServiceCode()
    {
        return $this->serviceCode;
    }

    public function setServiceCode($serviceCode)
    {
        $this->serviceCode = $serviceCode;
        $this->apiParas["serviceCode"] = $serviceCode;
    }

    public function getServicePersonName()
    {
        return $this->servicePersonName;
    }

    public function setServicePersonName($servicePersonName)
    {
        $this->servicePersonName = $servicePersonName;
        $this->apiParas["servicePersonName"] = $servicePersonName;
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

    public function getDeptCode()
    {
        return $this->deptCode;
    }

    public function setDeptCode($deptCode)
    {
        $this->deptCode = $deptCode;
        $this->apiParas["deptCode"] = $deptCode;
    }

    public function getProductName()
    {
        return $this->productName;
    }

    public function setProductName($productName)
    {
        $this->productName = $productName;
        $this->apiParas["productName"] = $productName;
    }

    public function getSaleMobile()
    {
        return $this->saleMobile;
    }

    public function setSaleMobile($saleMobile)
    {
        $this->saleMobile = $saleMobile;
        $this->apiParas["saleMobile"] = $saleMobile;
    }

    public function getOrderSubmitTime()
    {
        return $this->orderSubmitTime;
    }

    public function setOrderSubmitTime($orderSubmitTime)
    {
        $this->orderSubmitTime = $orderSubmitTime;
        $this->apiParas["orderSubmitTime"] = $orderSubmitTime;
    }

    public function getWithAddedService()
    {
        return $this->withAddedService;
    }

    public function setWithAddedService($withAddedService)
    {
        $this->withAddedService = $withAddedService;
        $this->apiParas["withAddedService"] = $withAddedService;
    }
}
