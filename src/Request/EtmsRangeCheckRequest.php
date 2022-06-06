<?php

namespace ACES\Request;


class EtmsRangeCheckRequest
{
    private $apiParas = array();
    private $version;
    private $salePlat;
    private $customerCode;
    private $orderId;
    private $goodsType;
    private $wareHouseCode;
    private $receiveAddress;
    private $transType;
    private $senderProvinceId;
    private $senderCityId;
    private $senderCountyId;
    private $senderTownId;
    private $receiverProvinceId;
    private $receiverCityId;
    private $receiverCountyId;
    private $receiverTownId;
    private $sendTime;
    private $isCod;
    private $siteId;
    private $siteName;
    private $addedService;
    private $promiseTimeType;
    private $senderAddress;
    private $pickupSiteId;
    private $pickupSiteCode;
    private $siteCode;
    private $senderProvince;
    private $senderCity;
    private $senderCounty;
    private $senderTown;
    private $receiverProvince;
    private $receiverCity;
    private $receiverCounty;
    private $receiverTown;
    private $settleType;
    private $requireDeliveryPresortMode;

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

    public function getVersion()
    {
        return $this->version;
    }

    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function getSalePlat()
    {
        return $this->salePlat;
    }

    public function setSalePlat($salePlat)
    {
        $this->salePlat = $salePlat;
        $this->apiParas["salePlat"] = $salePlat;
    }

    public function getCustomerCode()
    {
        return $this->customerCode;
    }

    public function setCustomerCode($customerCode)
    {
        $this->customerCode = $customerCode;
        $this->apiParas["customerCode"] = $customerCode;
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

    public function getGoodsType()
    {
        return $this->goodsType;
    }

    public function setGoodsType($goodsType)
    {
        $this->goodsType = $goodsType;
        $this->apiParas["goodsType"] = $goodsType;
    }

    public function getWareHouseCode()
    {
        return $this->wareHouseCode;
    }

    public function setWareHouseCode($wareHouseCode)
    {
        $this->wareHouseCode = $wareHouseCode;
        $this->apiParas["wareHouseCode"] = $wareHouseCode;
    }

    public function getReceiveAddress()
    {
        return $this->receiveAddress;
    }

    public function setReceiveAddress($receiveAddress)
    {
        $this->receiveAddress = $receiveAddress;
        $this->apiParas["receiveAddress"] = $receiveAddress;
    }

    public function getTransType()
    {
        return $this->transType;
    }

    public function setTransType($transType)
    {
        $this->transType = $transType;
        $this->apiParas["transType"] = $transType;
    }

    public function getSenderProvinceId()
    {
        return $this->senderProvinceId;
    }

    public function setSenderProvinceId($senderProvinceId)
    {
        $this->senderProvinceId = $senderProvinceId;
        $this->apiParas["senderProvinceId"] = $senderProvinceId;
    }

    public function getSenderCityId()
    {
        return $this->senderCityId;
    }

    public function setSenderCityId($senderCityId)
    {
        $this->senderCityId = $senderCityId;
        $this->apiParas["senderCityId"] = $senderCityId;
    }

    public function getSenderCountyId()
    {
        return $this->senderCountyId;
    }

    public function setSenderCountyId($senderCountyId)
    {
        $this->senderCountyId = $senderCountyId;
        $this->apiParas["senderCountyId"] = $senderCountyId;
    }

    public function getSenderTownId()
    {
        return $this->senderTownId;
    }

    public function setSenderTownId($senderTownId)
    {
        $this->senderTownId = $senderTownId;
        $this->apiParas["senderTownId"] = $senderTownId;
    }

    public function getReceiverProvinceId()
    {
        return $this->receiverProvinceId;
    }

    public function setReceiverProvinceId($receiverProvinceId)
    {
        $this->receiverProvinceId = $receiverProvinceId;
        $this->apiParas["receiverProvinceId"] = $receiverProvinceId;
    }

    public function getReceiverCityId()
    {
        return $this->receiverCityId;
    }

    public function setReceiverCityId($receiverCityId)
    {
        $this->receiverCityId = $receiverCityId;
        $this->apiParas["receiverCityId"] = $receiverCityId;
    }

    public function getReceiverCountyId()
    {
        return $this->receiverCountyId;
    }

    public function setReceiverCountyId($receiverCountyId)
    {
        $this->receiverCountyId = $receiverCountyId;
        $this->apiParas["receiverCountyId"] = $receiverCountyId;
    }

    public function getReceiverTownId()
    {
        return $this->receiverTownId;
    }

    public function setReceiverTownId($receiverTownId)
    {
        $this->receiverTownId = $receiverTownId;
        $this->apiParas["receiverTownId"] = $receiverTownId;
    }

    public function getSendTime()
    {
        return $this->sendTime;
    }

    public function setSendTime($sendTime)
    {
        $this->sendTime = $sendTime;
        $this->apiParas["sendTime"] = $sendTime;
    }

    public function getIsCod()
    {
        return $this->isCod;
    }

    public function setIsCod($isCod)
    {
        $this->isCod = $isCod;
        $this->apiParas["isCod"] = $isCod;
    }

    public function getSiteId()
    {
        return $this->siteId;
    }

    public function setSiteId($siteId)
    {
        $this->siteId = $siteId;
        $this->apiParas["siteId"] = $siteId;
    }

    public function getSiteName()
    {
        return $this->siteName;
    }

    public function setSiteName($siteName)
    {
        $this->siteName = $siteName;
        $this->apiParas["siteName"] = $siteName;
    }

    public function getAddedService()
    {
        return $this->addedService;
    }

    public function setAddedService($addedService)
    {
        $this->addedService = $addedService;
        $this->apiParas["addedService"] = $addedService;
    }

    public function getPromiseTimeType()
    {
        return $this->promiseTimeType;
    }

    public function setPromiseTimeType($promiseTimeType)
    {
        $this->promiseTimeType = $promiseTimeType;
        $this->apiParas["promiseTimeType"] = $promiseTimeType;
    }

    public function getSenderAddress()
    {
        return $this->senderAddress;
    }

    public function setSenderAddress($senderAddress)
    {
        $this->senderAddress = $senderAddress;
        $this->apiParas["senderAddress"] = $senderAddress;
    }

    public function getPickupSiteId()
    {
        return $this->pickupSiteId;
    }

    public function setPickupSiteId($pickupSiteId)
    {
        $this->pickupSiteId = $pickupSiteId;
        $this->apiParas["pickupSiteId"] = $pickupSiteId;
    }

    public function getPickupSiteCode()
    {
        return $this->pickupSiteCode;
    }

    public function setPickupSiteCode($pickupSiteCode)
    {
        $this->pickupSiteCode = $pickupSiteCode;
        $this->apiParas["pickupSiteCode"] = $pickupSiteCode;
    }

    public function getSiteCode()
    {
        return $this->siteCode;
    }

    public function setSiteCode($siteCode)
    {
        $this->siteCode = $siteCode;
        $this->apiParas["siteCode"] = $siteCode;
    }

    public function getSenderProvince()
    {
        return $this->senderProvince;
    }

    public function setSenderProvince($senderProvince)
    {
        $this->senderProvince = $senderProvince;
        $this->apiParas["senderProvince"] = $senderProvince;
    }

    public function getSenderCity()
    {
        return $this->senderCity;
    }

    public function setSenderCity($senderCity)
    {
        $this->senderCity = $senderCity;
        $this->apiParas["senderCity"] = $senderCity;
    }

    public function getSenderCounty()
    {
        return $this->senderCounty;
    }

    public function setSenderCounty($senderCounty)
    {
        $this->senderCounty = $senderCounty;
        $this->apiParas["senderCounty"] = $senderCounty;
    }

    public function getSenderTown()
    {
        return $this->senderTown;
    }

    public function setSenderTown($senderTown)
    {
        $this->senderTown = $senderTown;
        $this->apiParas["senderTown"] = $senderTown;
    }

    public function getReceiverProvince()
    {
        return $this->receiverProvince;
    }

    public function setReceiverProvince($receiverProvince)
    {
        $this->receiverProvince = $receiverProvince;
        $this->apiParas["receiverProvince"] = $receiverProvince;
    }

    public function getReceiverCity()
    {
        return $this->receiverCity;
    }

    public function setReceiverCity($receiverCity)
    {
        $this->receiverCity = $receiverCity;
        $this->apiParas["receiverCity"] = $receiverCity;
    }

    public function getReceiverCounty()
    {
        return $this->receiverCounty;
    }

    public function setReceiverCounty($receiverCounty)
    {
        $this->receiverCounty = $receiverCounty;
        $this->apiParas["receiverCounty"] = $receiverCounty;
    }

    public function getReceiverTown()
    {
        return $this->receiverTown;
    }

    public function setReceiverTown($receiverTown)
    {
        $this->receiverTown = $receiverTown;
        $this->apiParas["receiverTown"] = $receiverTown;
    }

    public function getSettleType()
    {
        return $this->settleType;
    }

    public function setSettleType($settleType)
    {
        $this->settleType = $settleType;
        $this->apiParas["settleType"] = $settleType;
    }

    public function getRequireDeliveryPresortMode()
    {
        return $this->requireDeliveryPresortMode;
    }

    public function setRequireDeliveryPresortMode($requireDeliveryPresortMode)
    {
        $this->requireDeliveryPresortMode = $requireDeliveryPresortMode;
        $this->apiParas["requireDeliveryPresortMode"] = $requireDeliveryPresortMode;
    }
}
