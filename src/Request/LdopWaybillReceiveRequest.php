<?php

namespace ACES\Request;


class LdopWaybillReceiveRequest
{
    private $apiParas = array();
    private $version;
    private $salePlat;
    private $customerCode;
    private $orderId;
    private $thrOrderId;
    private $senderName;
    private $senderAddress;
    private $senderTel;
    private $senderMobile;
    private $senderPostcode;
    private $receiveName;
    private $receiveAddress;
    private $province;
    private $city;
    private $county;
    private $town;
    private $provinceId;
    private $cityId;
    private $countyId;
    private $townId;
    private $siteType;
    private $siteId;
    private $siteName;
    private $receiveTel;
    private $receiveMobile;
    private $postcode;
    private $packageCount;
    private $weight;
    private $vloumLong;
    private $vloumWidth;
    private $vloumHeight;
    private $vloumn;
    private $description;
    private $collectionValue;
    private $collectionMoney;
    private $guaranteeValue;
    private $guaranteeValueAmount;
    private $signReturn;
    private $aging;
    private $transType;
    private $remark;
    private $goodsType;
    private $orderType;
    private $shopCode;
    private $orderSendTime;
    private $warehouseCode;
    private $areaProvId;
    private $areaCityId;
    private $shipmentStartTime;
    private $shipmentEndTime;
    private $idNumber;
    private $addedService;
    private $extendField1;
    private $extendField2;
    private $extendField3;
    private $extendField4;
    private $extendField5;
    private $senderCompany;
    private $receiveCompany;
    private $goods;
    private $goodsCount;
    private $promiseTimeType;
    private $freight;
    private $pickUpStartTime;
    private $pickUpEndTime;
    private $unpackingInspection;
    private $boxCode;
    private $fileUrl;
    private $pickMethod;
    private $customerBoxCode;
    private $customerBoxNumber;
    private $salesChannel;

    public function getApiMethodName()
    {
        return "jingdong.ldop.waybill.receive";
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

    public function getThrOrderId()
    {
        return $this->thrOrderId;
    }

    public function setThrOrderId($thrOrderId)
    {
        $this->thrOrderId = $thrOrderId;
        $this->apiParas["thrOrderId"] = $thrOrderId;
    }

    public function getSenderName()
    {
        return $this->senderName;
    }

    public function setSenderName($senderName)
    {
        $this->senderName = $senderName;
        $this->apiParas["senderName"] = $senderName;
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

    public function getSenderTel()
    {
        return $this->senderTel;
    }

    public function setSenderTel($senderTel)
    {
        $this->senderTel = $senderTel;
        $this->apiParas["senderTel"] = $senderTel;
    }

    public function getSenderMobile()
    {
        return $this->senderMobile;
    }

    public function setSenderMobile($senderMobile)
    {
        $this->senderMobile = $senderMobile;
        $this->apiParas["senderMobile"] = $senderMobile;
    }

    public function getSenderPostcode()
    {
        return $this->senderPostcode;
    }

    public function setSenderPostcode($senderPostcode)
    {
        $this->senderPostcode = $senderPostcode;
        $this->apiParas["senderPostcode"] = $senderPostcode;
    }

    public function getReceiveName()
    {
        return $this->receiveName;
    }

    public function setReceiveName($receiveName)
    {
        $this->receiveName = $receiveName;
        $this->apiParas["receiveName"] = $receiveName;
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

    public function getProvince()
    {
        return $this->province;
    }

    public function setProvince($province)
    {
        $this->province = $province;
        $this->apiParas["province"] = $province;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function setCity($city)
    {
        $this->city = $city;
        $this->apiParas["city"] = $city;
    }

    public function getCounty()
    {
        return $this->county;
    }

    public function setCounty($county)
    {
        $this->county = $county;
        $this->apiParas["county"] = $county;
    }

    public function getTown()
    {
        return $this->town;
    }

    public function setTown($town)
    {
        $this->town = $town;
        $this->apiParas["town"] = $town;
    }

    public function getProvinceId()
    {
        return $this->provinceId;
    }

    public function setProvinceId($provinceId)
    {
        $this->provinceId = $provinceId;
        $this->apiParas["provinceId"] = $provinceId;
    }

    public function getCityId()
    {
        return $this->cityId;
    }

    public function setCityId($cityId)
    {
        $this->cityId = $cityId;
        $this->apiParas["cityId"] = $cityId;
    }

    public function getCountyId()
    {
        return $this->countyId;
    }

    public function setCountyId($countyId)
    {
        $this->countyId = $countyId;
        $this->apiParas["countyId"] = $countyId;
    }

    public function getTownId()
    {
        return $this->townId;
    }

    public function setTownId($townId)
    {
        $this->townId = $townId;
        $this->apiParas["townId"] = $townId;
    }

    public function getSiteType()
    {
        return $this->siteType;
    }

    public function setSiteType($siteType)
    {
        $this->siteType = $siteType;
        $this->apiParas["siteType"] = $siteType;
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

    public function getReceiveTel()
    {
        return $this->receiveTel;
    }

    public function setReceiveTel($receiveTel)
    {
        $this->receiveTel = $receiveTel;
        $this->apiParas["receiveTel"] = $receiveTel;
    }

    public function getReceiveMobile()
    {
        return $this->receiveMobile;
    }

    public function setReceiveMobile($receiveMobile)
    {
        $this->receiveMobile = $receiveMobile;
        $this->apiParas["receiveMobile"] = $receiveMobile;
    }

    public function getPostcode()
    {
        return $this->postcode;
    }

    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;
        $this->apiParas["postcode"] = $postcode;
    }

    public function getPackageCount()
    {
        return $this->packageCount;
    }

    public function setPackageCount($packageCount)
    {
        $this->packageCount = $packageCount;
        $this->apiParas["packageCount"] = $packageCount;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;
        $this->apiParas["weight"] = $weight;
    }

    public function getVloumLong()
    {
        return $this->vloumLong;
    }

    public function setVloumLong($vloumLong)
    {
        $this->vloumLong = $vloumLong;
        $this->apiParas["vloumLong"] = $vloumLong;
    }

    public function getVloumWidth()
    {
        return $this->vloumWidth;
    }

    public function setVloumWidth($vloumWidth)
    {
        $this->vloumWidth = $vloumWidth;
        $this->apiParas["vloumWidth"] = $vloumWidth;
    }

    public function getVloumHeight()
    {
        return $this->vloumHeight;
    }

    public function setVloumHeight($vloumHeight)
    {
        $this->vloumHeight = $vloumHeight;
        $this->apiParas["vloumHeight"] = $vloumHeight;
    }

    public function getVloumn()
    {
        return $this->vloumn;
    }

    public function setVloumn($vloumn)
    {
        $this->vloumn = $vloumn;
        $this->apiParas["vloumn"] = $vloumn;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
        $this->apiParas["description"] = $description;
    }

    public function getCollectionValue()
    {
        return $this->collectionValue;
    }

    public function setCollectionValue($collectionValue)
    {
        $this->collectionValue = $collectionValue;
        $this->apiParas["collectionValue"] = $collectionValue;
    }

    public function getCollectionMoney()
    {
        return $this->collectionMoney;
    }

    public function setCollectionMoney($collectionMoney)
    {
        $this->collectionMoney = $collectionMoney;
        $this->apiParas["collectionMoney"] = $collectionMoney;
    }

    public function getGuaranteeValue()
    {
        return $this->guaranteeValue;
    }

    public function setGuaranteeValue($guaranteeValue)
    {
        $this->guaranteeValue = $guaranteeValue;
        $this->apiParas["guaranteeValue"] = $guaranteeValue;
    }

    public function getGuaranteeValueAmount()
    {
        return $this->guaranteeValueAmount;
    }

    public function setGuaranteeValueAmount($guaranteeValueAmount)
    {
        $this->guaranteeValueAmount = $guaranteeValueAmount;
        $this->apiParas["guaranteeValueAmount"] = $guaranteeValueAmount;
    }

    public function getSignReturn()
    {
        return $this->signReturn;
    }

    public function setSignReturn($signReturn)
    {
        $this->signReturn = $signReturn;
        $this->apiParas["signReturn"] = $signReturn;
    }

    public function getAging()
    {
        return $this->aging;
    }

    public function setAging($aging)
    {
        $this->aging = $aging;
        $this->apiParas["aging"] = $aging;
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

    public function getRemark()
    {
        return $this->remark;
    }

    public function setRemark($remark)
    {
        $this->remark = $remark;
        $this->apiParas["remark"] = $remark;
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

    public function getOrderType()
    {
        return $this->orderType;
    }

    public function setOrderType($orderType)
    {
        $this->orderType = $orderType;
        $this->apiParas["orderType"] = $orderType;
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

    public function getOrderSendTime()
    {
        return $this->orderSendTime;
    }

    public function setOrderSendTime($orderSendTime)
    {
        $this->orderSendTime = $orderSendTime;
        $this->apiParas["orderSendTime"] = $orderSendTime;
    }

    public function getWarehouseCode()
    {
        return $this->warehouseCode;
    }

    public function setWarehouseCode($warehouseCode)
    {
        $this->warehouseCode = $warehouseCode;
        $this->apiParas["warehouseCode"] = $warehouseCode;
    }

    public function getAreaProvId()
    {
        return $this->areaProvId;
    }

    public function setAreaProvId($areaProvId)
    {
        $this->areaProvId = $areaProvId;
        $this->apiParas["areaProvId"] = $areaProvId;
    }

    public function getAreaCityId()
    {
        return $this->areaCityId;
    }

    public function setAreaCityId($areaCityId)
    {
        $this->areaCityId = $areaCityId;
        $this->apiParas["areaCityId"] = $areaCityId;
    }

    public function getShipmentStartTime()
    {
        return $this->shipmentStartTime;
    }

    public function setShipmentStartTime($shipmentStartTime)
    {
        $this->shipmentStartTime = $shipmentStartTime;
        $this->apiParas["shipmentStartTime"] = $shipmentStartTime;
    }

    public function getShipmentEndTime()
    {
        return $this->shipmentEndTime;
    }

    public function setShipmentEndTime($shipmentEndTime)
    {
        $this->shipmentEndTime = $shipmentEndTime;
        $this->apiParas["shipmentEndTime"] = $shipmentEndTime;
    }

    public function getIdNumber()
    {
        return $this->idNumber;
    }

    public function setIdNumber($idNumber)
    {
        $this->idNumber = $idNumber;
        $this->apiParas["idNumber"] = $idNumber;
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

    public function getExtendField1()
    {
        return $this->extendField1;
    }

    public function setExtendField1($extendField1)
    {
        $this->extendField1 = $extendField1;
        $this->apiParas["extendField1"] = $extendField1;
    }

    public function getExtendField2()
    {
        return $this->extendField2;
    }

    public function setExtendField2($extendField2)
    {
        $this->extendField2 = $extendField2;
        $this->apiParas["extendField2"] = $extendField2;
    }

    public function getExtendField3()
    {
        return $this->extendField3;
    }

    public function setExtendField3($extendField3)
    {
        $this->extendField3 = $extendField3;
        $this->apiParas["extendField3"] = $extendField3;
    }

    public function getExtendField4()
    {
        return $this->extendField4;
    }

    public function setExtendField4($extendField4)
    {
        $this->extendField4 = $extendField4;
        $this->apiParas["extendField4"] = $extendField4;
    }

    public function getExtendField5()
    {
        return $this->extendField5;
    }

    public function setExtendField5($extendField5)
    {
        $this->extendField5 = $extendField5;
        $this->apiParas["extendField5"] = $extendField5;
    }

    public function getSenderCompany()
    {
        return $this->senderCompany;
    }

    public function setSenderCompany($senderCompany)
    {
        $this->senderCompany = $senderCompany;
        $this->apiParas["senderCompany"] = $senderCompany;
    }

    public function getReceiveCompany()
    {
        return $this->receiveCompany;
    }

    public function setReceiveCompany($receiveCompany)
    {
        $this->receiveCompany = $receiveCompany;
        $this->apiParas["receiveCompany"] = $receiveCompany;
    }

    public function getGoods()
    {
        return $this->goods;
    }

    public function setGoods($goods)
    {
        $this->goods = $goods;
        $this->apiParas["goods"] = $goods;
    }

    public function getGoodsCount()
    {
        return $this->goodsCount;
    }

    public function setGoodsCount($goodsCount)
    {
        $this->goodsCount = $goodsCount;
        $this->apiParas["goodsCount"] = $goodsCount;
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

    public function getFreight()
    {
        return $this->freight;
    }

    public function setFreight($freight)
    {
        $this->freight = $freight;
        $this->apiParas["freight"] = $freight;
    }

    public function getPickUpStartTime()
    {
        return $this->pickUpStartTime;
    }

    public function setPickUpStartTime($pickUpStartTime)
    {
        $this->pickUpStartTime = $pickUpStartTime;
        $this->apiParas["pickUpStartTime"] = $pickUpStartTime;
    }

    public function getPickUpEndTime()
    {
        return $this->pickUpEndTime;
    }

    public function setPickUpEndTime($pickUpEndTime)
    {
        $this->pickUpEndTime = $pickUpEndTime;
        $this->apiParas["pickUpEndTime"] = $pickUpEndTime;
    }

    public function getUnpackingInspection()
    {
        return $this->unpackingInspection;
    }

    public function setUnpackingInspection($unpackingInspection)
    {
        $this->unpackingInspection = $unpackingInspection;
        $this->apiParas["unpackingInspection"] = $unpackingInspection;
    }

    public function getBoxCode()
    {
        return $this->boxCode;
    }

    public function setBoxCode($boxCode)
    {
        $this->boxCode = $boxCode;
        $this->apiParas["boxCode"] = $boxCode;
    }

    public function getFileUrl()
    {
        return $this->fileUrl;
    }

    public function setFileUrl($fileUrl)
    {
        $this->fileUrl = $fileUrl;
        $this->apiParas["fileUrl"] = $fileUrl;
    }

    public function getPickMethod()
    {
        return $this->pickMethod;
    }

    public function setPickMethod($pickMethod)
    {
        $this->pickMethod = $pickMethod;
        $this->apiParas["pickMethod"] = $pickMethod;
    }

    public function getCustomerBoxCode()
    {
        return $this->customerBoxCode;
    }

    public function setCustomerBoxCode($customerBoxCode)
    {
        $this->customerBoxCode = $customerBoxCode;
        $this->apiParas["customerBoxCode"] = $customerBoxCode;
    }

    public function getCustomerBoxNumber()
    {
        return $this->customerBoxNumber;
    }

    public function setCustomerBoxNumber($customerBoxNumber)
    {
        $this->customerBoxNumber = $customerBoxNumber;
        $this->apiParas["customerBoxNumber"] = $customerBoxNumber;
    }

    public function getSalesChannel()
    {
        return $this->salesChannel;
    }

    public function setSalesChannel($salesChannel)
    {
        $this->salesChannel = $salesChannel;
        $this->apiParas["salesChannel"] = $salesChannel;
    }
}
