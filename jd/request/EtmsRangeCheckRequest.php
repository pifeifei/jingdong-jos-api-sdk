<?php

class EtmsRangeCheckRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.etms.range.check";
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
                                                                                                                                                                                            private $salePlat;

    public function setSalePlat($salePlat)
    {
        $this->salePlat = $salePlat;
         $this->apiParas["salePlat"] = $salePlat;
    }

    public function getSalePlat()
    {
        return $this->salePlat;
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

                                                        private $goodsType;

    public function setGoodsType($goodsType)
    {
        $this->goodsType = $goodsType;
         $this->apiParas["goodsType"] = $goodsType;
    }

    public function getGoodsType()
    {
        return $this->goodsType;
    }

                                                        private $wareHouseCode;

    public function setWareHouseCode($wareHouseCode)
    {
        $this->wareHouseCode = $wareHouseCode;
         $this->apiParas["wareHouseCode"] = $wareHouseCode;
    }

    public function getWareHouseCode()
    {
        return $this->wareHouseCode;
    }

                                                        private $receiveAddress;

    public function setReceiveAddress($receiveAddress)
    {
        $this->receiveAddress = $receiveAddress;
         $this->apiParas["receiveAddress"] = $receiveAddress;
    }

    public function getReceiveAddress()
    {
        return $this->receiveAddress;
    }

                                                        private $transType;

    public function setTransType($transType)
    {
        $this->transType = $transType;
         $this->apiParas["transType"] = $transType;
    }

    public function getTransType()
    {
        return $this->transType;
    }

                                                        private $senderProvinceId;

    public function setSenderProvinceId($senderProvinceId)
    {
        $this->senderProvinceId = $senderProvinceId;
         $this->apiParas["senderProvinceId"] = $senderProvinceId;
    }

    public function getSenderProvinceId()
    {
        return $this->senderProvinceId;
    }

                                                        private $senderCityId;

    public function setSenderCityId($senderCityId)
    {
        $this->senderCityId = $senderCityId;
         $this->apiParas["senderCityId"] = $senderCityId;
    }

    public function getSenderCityId()
    {
        return $this->senderCityId;
    }

                                                        private $senderCountyId;

    public function setSenderCountyId($senderCountyId)
    {
        $this->senderCountyId = $senderCountyId;
         $this->apiParas["senderCountyId"] = $senderCountyId;
    }

    public function getSenderCountyId()
    {
        return $this->senderCountyId;
    }

                                                        private $senderTownId;

    public function setSenderTownId($senderTownId)
    {
        $this->senderTownId = $senderTownId;
         $this->apiParas["senderTownId"] = $senderTownId;
    }

    public function getSenderTownId()
    {
        return $this->senderTownId;
    }

                                                        private $receiverProvinceId;

    public function setReceiverProvinceId($receiverProvinceId)
    {
        $this->receiverProvinceId = $receiverProvinceId;
         $this->apiParas["receiverProvinceId"] = $receiverProvinceId;
    }

    public function getReceiverProvinceId()
    {
        return $this->receiverProvinceId;
    }

                                                        private $receiverCityId;

    public function setReceiverCityId($receiverCityId)
    {
        $this->receiverCityId = $receiverCityId;
         $this->apiParas["receiverCityId"] = $receiverCityId;
    }

    public function getReceiverCityId()
    {
        return $this->receiverCityId;
    }

                                                        private $receiverCountyId;

    public function setReceiverCountyId($receiverCountyId)
    {
        $this->receiverCountyId = $receiverCountyId;
         $this->apiParas["receiverCountyId"] = $receiverCountyId;
    }

    public function getReceiverCountyId()
    {
        return $this->receiverCountyId;
    }

                                                        private $receiverTownId;

    public function setReceiverTownId($receiverTownId)
    {
        $this->receiverTownId = $receiverTownId;
         $this->apiParas["receiverTownId"] = $receiverTownId;
    }

    public function getReceiverTownId()
    {
        return $this->receiverTownId;
    }

                                                        private $sendTime;

    public function setSendTime($sendTime)
    {
        $this->sendTime = $sendTime;
         $this->apiParas["sendTime"] = $sendTime;
    }

    public function getSendTime()
    {
        return $this->sendTime;
    }

                                                        private $isCod;

    public function setIsCod($isCod)
    {
        $this->isCod = $isCod;
         $this->apiParas["isCod"] = $isCod;
    }

    public function getIsCod()
    {
        return $this->isCod;
    }

                                                        private $siteId;

    public function setSiteId($siteId)
    {
        $this->siteId = $siteId;
         $this->apiParas["siteId"] = $siteId;
    }

    public function getSiteId()
    {
        return $this->siteId;
    }

                                                        private $siteName;

    public function setSiteName($siteName)
    {
        $this->siteName = $siteName;
         $this->apiParas["siteName"] = $siteName;
    }

    public function getSiteName()
    {
        return $this->siteName;
    }

                                                        private $addedService;

    public function setAddedService($addedService)
    {
        $this->addedService = $addedService;
         $this->apiParas["addedService"] = $addedService;
    }

    public function getAddedService()
    {
        return $this->addedService;
    }

                                                        private $promiseTimeType;

    public function setPromiseTimeType($promiseTimeType)
    {
        $this->promiseTimeType = $promiseTimeType;
         $this->apiParas["promiseTimeType"] = $promiseTimeType;
    }

    public function getPromiseTimeType()
    {
        return $this->promiseTimeType;
    }

                                                        private $senderAddress;

    public function setSenderAddress($senderAddress)
    {
        $this->senderAddress = $senderAddress;
         $this->apiParas["senderAddress"] = $senderAddress;
    }

    public function getSenderAddress()
    {
        return $this->senderAddress;
    }

                                                        private $pickupSiteId;

    public function setPickupSiteId($pickupSiteId)
    {
        $this->pickupSiteId = $pickupSiteId;
         $this->apiParas["pickupSiteId"] = $pickupSiteId;
    }

    public function getPickupSiteId()
    {
        return $this->pickupSiteId;
    }

                                                        private $pickupSiteCode;

    public function setPickupSiteCode($pickupSiteCode)
    {
        $this->pickupSiteCode = $pickupSiteCode;
         $this->apiParas["pickupSiteCode"] = $pickupSiteCode;
    }

    public function getPickupSiteCode()
    {
        return $this->pickupSiteCode;
    }

                                                        private $siteCode;

    public function setSiteCode($siteCode)
    {
        $this->siteCode = $siteCode;
         $this->apiParas["siteCode"] = $siteCode;
    }

    public function getSiteCode()
    {
        return $this->siteCode;
    }

                                                        private $senderProvince;

    public function setSenderProvince($senderProvince)
    {
        $this->senderProvince = $senderProvince;
         $this->apiParas["senderProvince"] = $senderProvince;
    }

    public function getSenderProvince()
    {
        return $this->senderProvince;
    }

                                                        private $senderCity;

    public function setSenderCity($senderCity)
    {
        $this->senderCity = $senderCity;
         $this->apiParas["senderCity"] = $senderCity;
    }

    public function getSenderCity()
    {
        return $this->senderCity;
    }

                                                        private $senderCounty;

    public function setSenderCounty($senderCounty)
    {
        $this->senderCounty = $senderCounty;
         $this->apiParas["senderCounty"] = $senderCounty;
    }

    public function getSenderCounty()
    {
        return $this->senderCounty;
    }

                                                        private $senderTown;

    public function setSenderTown($senderTown)
    {
        $this->senderTown = $senderTown;
         $this->apiParas["senderTown"] = $senderTown;
    }

    public function getSenderTown()
    {
        return $this->senderTown;
    }

                                                        private $receiverProvince;

    public function setReceiverProvince($receiverProvince)
    {
        $this->receiverProvince = $receiverProvince;
         $this->apiParas["receiverProvince"] = $receiverProvince;
    }

    public function getReceiverProvince()
    {
        return $this->receiverProvince;
    }

                                                        private $receiverCity;

    public function setReceiverCity($receiverCity)
    {
        $this->receiverCity = $receiverCity;
         $this->apiParas["receiverCity"] = $receiverCity;
    }

    public function getReceiverCity()
    {
        return $this->receiverCity;
    }

                                                        private $receiverCounty;

    public function setReceiverCounty($receiverCounty)
    {
        $this->receiverCounty = $receiverCounty;
         $this->apiParas["receiverCounty"] = $receiverCounty;
    }

    public function getReceiverCounty()
    {
        return $this->receiverCounty;
    }

                                                        private $receiverTown;

    public function setReceiverTown($receiverTown)
    {
        $this->receiverTown = $receiverTown;
         $this->apiParas["receiverTown"] = $receiverTown;
    }

    public function getReceiverTown()
    {
        return $this->receiverTown;
    }

                                                        private $settleType;

    public function setSettleType($settleType)
    {
        $this->settleType = $settleType;
         $this->apiParas["settleType"] = $settleType;
    }

    public function getSettleType()
    {
        return $this->settleType;
    }

                                                        private $requireDeliveryPresortMode;

    public function setRequireDeliveryPresortMode($requireDeliveryPresortMode)
    {
        $this->requireDeliveryPresortMode = $requireDeliveryPresortMode;
         $this->apiParas["requireDeliveryPresortMode"] = $requireDeliveryPresortMode;
    }

    public function getRequireDeliveryPresortMode()
    {
        return $this->requireDeliveryPresortMode;
    }
}
