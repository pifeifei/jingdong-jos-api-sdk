<?php

class ServiceOrderUpdateRequest
{
    private $apiParas = array();

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

    private $version;

    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function getVersion()
    {
        return $this->version;
    }
                                                                                                                                    private $model;

    public function setModel($model)
    {
        $this->model = $model;
         $this->apiParas["model"] = $model;
    }

    public function getModel()
    {
        return $this->model;
    }

                                                        private $wineCount;

    public function setWineCount($wineCount)
    {
        $this->wineCount = $wineCount;
         $this->apiParas["wineCount"] = $wineCount;
    }

    public function getWineCount()
    {
        return $this->wineCount;
    }

                                                        private $presortType;

    public function setPresortType($presortType)
    {
        $this->presortType = $presortType;
         $this->apiParas["presortType"] = $presortType;
    }

    public function getPresortType()
    {
        return $this->presortType;
    }

                                                        private $remark;

    public function setRemark($remark)
    {
        $this->remark = $remark;
         $this->apiParas["remark"] = $remark;
    }

    public function getRemark()
    {
        return $this->remark;
    }

                                                        private $saleRegion;

    public function setSaleRegion($saleRegion)
    {
        $this->saleRegion = $saleRegion;
         $this->apiParas["saleRegion"] = $saleRegion;
    }

    public function getSaleRegion()
    {
        return $this->saleRegion;
    }

                                                        private $productUnit;

    public function setProductUnit($productUnit)
    {
        $this->productUnit = $productUnit;
         $this->apiParas["productUnit"] = $productUnit;
    }

    public function getProductUnit()
    {
        return $this->productUnit;
    }

                                                        private $banquetDeskNum;

    public function setBanquetDeskNum($banquetDeskNum)
    {
        $this->banquetDeskNum = $banquetDeskNum;
         $this->apiParas["banquetDeskNum"] = $banquetDeskNum;
    }

    public function getBanquetDeskNum()
    {
        return $this->banquetDeskNum;
    }

                                                        private $serviceName;

    public function setServiceName($serviceName)
    {
        $this->serviceName = $serviceName;
         $this->apiParas["serviceName"] = $serviceName;
    }

    public function getServiceName()
    {
        return $this->serviceName;
    }

                                                        private $saleName;

    public function setSaleName($saleName)
    {
        $this->saleName = $saleName;
         $this->apiParas["saleName"] = $saleName;
    }

    public function getSaleName()
    {
        return $this->saleName;
    }

                                                        private $serviceTime;

    public function setServiceTime($serviceTime)
    {
        $this->serviceTime = $serviceTime;
         $this->apiParas["serviceTime"] = $serviceTime;
    }

    public function getServiceTime()
    {
        return $this->serviceTime;
    }

                                                        private $serviceCityName;

    public function setServiceCityName($serviceCityName)
    {
        $this->serviceCityName = $serviceCityName;
         $this->apiParas["serviceCityName"] = $serviceCityName;
    }

    public function getServiceCityName()
    {
        return $this->serviceCityName;
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

                                                        private $serviceProvinceName;

    public function setServiceProvinceName($serviceProvinceName)
    {
        $this->serviceProvinceName = $serviceProvinceName;
         $this->apiParas["serviceProvinceName"] = $serviceProvinceName;
    }

    public function getServiceProvinceName()
    {
        return $this->serviceProvinceName;
    }

                                                        private $balcony;

    public function setBalcony($balcony)
    {
        $this->balcony = $balcony;
         $this->apiParas["balcony"] = $balcony;
    }

    public function getBalcony()
    {
        return $this->balcony;
    }

                                                        private $banquetType;

    public function setBanquetType($banquetType)
    {
        $this->banquetType = $banquetType;
         $this->apiParas["banquetType"] = $banquetType;
    }

    public function getBanquetType()
    {
        return $this->banquetType;
    }

                                                        private $servicePersonMobile;

    public function setServicePersonMobile($servicePersonMobile)
    {
        $this->servicePersonMobile = $servicePersonMobile;
         $this->apiParas["servicePersonMobile"] = $servicePersonMobile;
    }

    public function getServicePersonMobile()
    {
        return $this->servicePersonMobile;
    }

                                                        private $imei;

    public function setImei($imei)
    {
        $this->imei = $imei;
         $this->apiParas["imei"] = $imei;
    }

    public function getImei()
    {
        return $this->imei;
    }

                                                        private $serviceCountryName;

    public function setServiceCountryName($serviceCountryName)
    {
        $this->serviceCountryName = $serviceCountryName;
         $this->apiParas["serviceCountryName"] = $serviceCountryName;
    }

    public function getServiceCountryName()
    {
        return $this->serviceCountryName;
    }

                                                        private $serviceDetailAddress;

    public function setServiceDetailAddress($serviceDetailAddress)
    {
        $this->serviceDetailAddress = $serviceDetailAddress;
         $this->apiParas["serviceDetailAddress"] = $serviceDetailAddress;
    }

    public function getServiceDetailAddress()
    {
        return $this->serviceDetailAddress;
    }

                                                        private $orderTime;

    public function setOrderTime($orderTime)
    {
        $this->orderTime = $orderTime;
         $this->apiParas["orderTime"] = $orderTime;
    }

    public function getOrderTime()
    {
        return $this->orderTime;
    }

                                                        private $businessCategory;

    public function setBusinessCategory($businessCategory)
    {
        $this->businessCategory = $businessCategory;
         $this->apiParas["businessCategory"] = $businessCategory;
    }

    public function getBusinessCategory()
    {
        return $this->businessCategory;
    }

                                                                                    private $shopRegion;

    public function setShopRegion($shopRegion)
    {
        $this->shopRegion = $shopRegion;
         $this->apiParas["shopRegion"] = $shopRegion;
    }

    public function getShopRegion()
    {
        return $this->shopRegion;
    }

                                                        private $shopCode;

    public function setShopCode($shopCode)
    {
        $this->shopCode = $shopCode;
         $this->apiParas["shopCode"] = $shopCode;
    }

    public function getShopCode()
    {
        return $this->shopCode;
    }

                                                        private $serviceTownName;

    public function setServiceTownName($serviceTownName)
    {
        $this->serviceTownName = $serviceTownName;
         $this->apiParas["serviceTownName"] = $serviceTownName;
    }

    public function getServiceTownName()
    {
        return $this->serviceTownName;
    }

                                                        private $color;

    public function setColor($color)
    {
        $this->color = $color;
         $this->apiParas["color"] = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

                                                        private $banquetBelong;

    public function setBanquetBelong($banquetBelong)
    {
        $this->banquetBelong = $banquetBelong;
         $this->apiParas["banquetBelong"] = $banquetBelong;
    }

    public function getBanquetBelong()
    {
        return $this->banquetBelong;
    }

                                                        private $brand;

    public function setBrand($brand)
    {
        $this->brand = $brand;
         $this->apiParas["brand"] = $brand;
    }

    public function getBrand()
    {
        return $this->brand;
    }

                                                        private $serviceCode;

    public function setServiceCode($serviceCode)
    {
        $this->serviceCode = $serviceCode;
         $this->apiParas["serviceCode"] = $serviceCode;
    }

    public function getServiceCode()
    {
        return $this->serviceCode;
    }

                                                        private $servicePersonName;

    public function setServicePersonName($servicePersonName)
    {
        $this->servicePersonName = $servicePersonName;
         $this->apiParas["servicePersonName"] = $servicePersonName;
    }

    public function getServicePersonName()
    {
        return $this->servicePersonName;
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

                                                        private $deptCode;

    public function setDeptCode($deptCode)
    {
        $this->deptCode = $deptCode;
         $this->apiParas["deptCode"] = $deptCode;
    }

    public function getDeptCode()
    {
        return $this->deptCode;
    }

                                                        private $productName;

    public function setProductName($productName)
    {
        $this->productName = $productName;
         $this->apiParas["productName"] = $productName;
    }

    public function getProductName()
    {
        return $this->productName;
    }

                                                        private $saleMobile;

    public function setSaleMobile($saleMobile)
    {
        $this->saleMobile = $saleMobile;
         $this->apiParas["saleMobile"] = $saleMobile;
    }

    public function getSaleMobile()
    {
        return $this->saleMobile;
    }

                                                        private $orderSubmitTime;

    public function setOrderSubmitTime($orderSubmitTime)
    {
        $this->orderSubmitTime = $orderSubmitTime;
         $this->apiParas["orderSubmitTime"] = $orderSubmitTime;
    }

    public function getOrderSubmitTime()
    {
        return $this->orderSubmitTime;
    }

                                                        private $withAddedService;

    public function setWithAddedService($withAddedService)
    {
        $this->withAddedService = $withAddedService;
         $this->apiParas["withAddedService"] = $withAddedService;
    }

    public function getWithAddedService()
    {
        return $this->withAddedService;
    }
}
