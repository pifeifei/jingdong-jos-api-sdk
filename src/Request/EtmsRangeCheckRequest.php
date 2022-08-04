<?php

namespace ACES\Request;

class EtmsRangeCheckRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.etms.range.check';
    }

    public function check()
    {
    }

    public function getSalePlat()
    {
        return $this->apiParas['salePlat'];
    }

    public function setSalePlat($salePlat)
    {
        $this->apiParas['salePlat'] = $salePlat;

        return $this;
    }

    public function getCustomerCode()
    {
        return $this->apiParas['customerCode'];
    }

    public function setCustomerCode($customerCode)
    {
        $this->apiParas['customerCode'] = $customerCode;

        return $this;
    }

    public function getOrderId()
    {
        return $this->apiParas['orderId'];
    }

    public function setOrderId($orderId)
    {
        $this->apiParas['orderId'] = $orderId;

        return $this;
    }

    public function getGoodsType()
    {
        return $this->apiParas['goodsType'];
    }

    public function setGoodsType($goodsType)
    {
        $this->apiParas['goodsType'] = $goodsType;

        return $this;
    }

    public function getWareHouseCode()
    {
        return $this->apiParas['wareHouseCode'];
    }

    public function setWareHouseCode($wareHouseCode)
    {
        $this->apiParas['wareHouseCode'] = $wareHouseCode;

        return $this;
    }

    public function getReceiveAddress()
    {
        return $this->apiParas['receiveAddress'];
    }

    public function setReceiveAddress($receiveAddress)
    {
        $this->apiParas['receiveAddress'] = $receiveAddress;

        return $this;
    }

    public function getTransType()
    {
        return $this->apiParas['transType'];
    }

    public function setTransType($transType)
    {
        $this->apiParas['transType'] = $transType;

        return $this;
    }

    public function getSenderProvinceId()
    {
        return $this->apiParas['senderProvinceId'];
    }

    public function setSenderProvinceId($senderProvinceId)
    {
        $this->apiParas['senderProvinceId'] = $senderProvinceId;

        return $this;
    }

    public function getSenderCityId()
    {
        return $this->apiParas['senderCityId'];
    }

    public function setSenderCityId($senderCityId)
    {
        $this->apiParas['senderCityId'] = $senderCityId;

        return $this;
    }

    public function getSenderCountyId()
    {
        return $this->apiParas['senderCountyId'];
    }

    public function setSenderCountyId($senderCountyId)
    {
        $this->apiParas['senderCountyId'] = $senderCountyId;

        return $this;
    }

    public function getSenderTownId()
    {
        return $this->apiParas['senderTownId'];
    }

    public function setSenderTownId($senderTownId)
    {
        $this->apiParas['senderTownId'] = $senderTownId;

        return $this;
    }

    public function getReceiverProvinceId()
    {
        return $this->apiParas['receiverProvinceId'];
    }

    public function setReceiverProvinceId($receiverProvinceId)
    {
        $this->apiParas['receiverProvinceId'] = $receiverProvinceId;

        return $this;
    }

    public function getReceiverCityId()
    {
        return $this->apiParas['receiverCityId'];
    }

    public function setReceiverCityId($receiverCityId)
    {
        $this->apiParas['receiverCityId'] = $receiverCityId;

        return $this;
    }

    public function getReceiverCountyId()
    {
        return $this->apiParas['receiverCountyId'];
    }

    public function setReceiverCountyId($receiverCountyId)
    {
        $this->apiParas['receiverCountyId'] = $receiverCountyId;

        return $this;
    }

    public function getReceiverTownId()
    {
        return $this->apiParas['receiverTownId'];
    }

    public function setReceiverTownId($receiverTownId)
    {
        $this->apiParas['receiverTownId'] = $receiverTownId;

        return $this;
    }

    public function getSendTime()
    {
        return $this->apiParas['sendTime'];
    }

    public function setSendTime($sendTime)
    {
        $this->apiParas['sendTime'] = $sendTime;

        return $this;
    }

    public function getIsCod()
    {
        return $this->apiParas['isCod'];
    }

    public function setIsCod($isCod)
    {
        $this->apiParas['isCod'] = $isCod;

        return $this;
    }

    public function getSiteId()
    {
        return $this->apiParas['siteId'];
    }

    public function setSiteId($siteId)
    {
        $this->apiParas['siteId'] = $siteId;

        return $this;
    }

    public function getSiteName()
    {
        return $this->apiParas['siteName'];
    }

    public function setSiteName($siteName)
    {
        $this->apiParas['siteName'] = $siteName;

        return $this;
    }

    public function getAddedService()
    {
        return $this->apiParas['addedService'];
    }

    public function setAddedService($addedService)
    {
        $this->apiParas['addedService'] = $addedService;

        return $this;
    }

    public function getPromiseTimeType()
    {
        return $this->apiParas['promiseTimeType'];
    }

    public function setPromiseTimeType($promiseTimeType)
    {
        $this->apiParas['promiseTimeType'] = $promiseTimeType;

        return $this;
    }

    public function getSenderAddress()
    {
        return $this->apiParas['senderAddress'];
    }

    public function setSenderAddress($senderAddress)
    {
        $this->apiParas['senderAddress'] = $senderAddress;

        return $this;
    }

    public function getPickupSiteId()
    {
        return $this->apiParas['pickupSiteId'];
    }

    public function setPickupSiteId($pickupSiteId)
    {
        $this->apiParas['pickupSiteId'] = $pickupSiteId;

        return $this;
    }

    public function getPickupSiteCode()
    {
        return $this->apiParas['pickupSiteCode'];
    }

    public function setPickupSiteCode($pickupSiteCode)
    {
        $this->apiParas['pickupSiteCode'] = $pickupSiteCode;

        return $this;
    }

    public function getSiteCode()
    {
        return $this->apiParas['siteCode'];
    }

    public function setSiteCode($siteCode)
    {
        $this->apiParas['siteCode'] = $siteCode;

        return $this;
    }

    public function getSenderProvince()
    {
        return $this->apiParas['senderProvince'];
    }

    public function setSenderProvince($senderProvince)
    {
        $this->apiParas['senderProvince'] = $senderProvince;

        return $this;
    }

    public function getSenderCity()
    {
        return $this->apiParas['senderCity'];
    }

    public function setSenderCity($senderCity)
    {
        $this->apiParas['senderCity'] = $senderCity;

        return $this;
    }

    public function getSenderCounty()
    {
        return $this->apiParas['senderCounty'];
    }

    public function setSenderCounty($senderCounty)
    {
        $this->apiParas['senderCounty'] = $senderCounty;

        return $this;
    }

    public function getSenderTown()
    {
        return $this->apiParas['senderTown'];
    }

    public function setSenderTown($senderTown)
    {
        $this->apiParas['senderTown'] = $senderTown;

        return $this;
    }

    public function getReceiverProvince()
    {
        return $this->apiParas['receiverProvince'];
    }

    public function setReceiverProvince($receiverProvince)
    {
        $this->apiParas['receiverProvince'] = $receiverProvince;

        return $this;
    }

    public function getReceiverCity()
    {
        return $this->apiParas['receiverCity'];
    }

    public function setReceiverCity($receiverCity)
    {
        $this->apiParas['receiverCity'] = $receiverCity;

        return $this;
    }

    public function getReceiverCounty()
    {
        return $this->apiParas['receiverCounty'];
    }

    public function setReceiverCounty($receiverCounty)
    {
        $this->apiParas['receiverCounty'] = $receiverCounty;

        return $this;
    }

    public function getReceiverTown()
    {
        return $this->apiParas['receiverTown'];
    }

    public function setReceiverTown($receiverTown)
    {
        $this->apiParas['receiverTown'] = $receiverTown;

        return $this;
    }

    public function getSettleType()
    {
        return $this->apiParas['settleType'];
    }

    public function setSettleType($settleType)
    {
        $this->apiParas['settleType'] = $settleType;

        return $this;
    }

    public function getRequireDeliveryPresortMode()
    {
        return $this->apiParas['requireDeliveryPresortMode'];
    }

    public function setRequireDeliveryPresortMode($requireDeliveryPresortMode)
    {
        $this->apiParas['requireDeliveryPresortMode'] = $requireDeliveryPresortMode;

        return $this;
    }
}
