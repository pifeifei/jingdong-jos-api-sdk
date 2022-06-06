<?php

namespace ACES\Request;


class LdopDeliveryDeliveryPickupReceiveRequest
{
    private $apiParas = array();
    private $version;
    private $josPin;
    private $salePlat;
    private $customerCode;
    private $orderId;
    private $thrOrderId;
    private $senderName;
    private $senderAddress;
    private $senderTel;
    private $senderMobile;
    private $receiveName;
    private $receiveAddress;
    private $receiveTel;
    private $receiveMobile;
    private $province;
    private $city;
    private $county;
    private $town;
    private $packageCount;
    private $weight;
    private $vloumLong;
    private $vloumWidth;
    private $vloumHeight;
    private $vloumn;
    private $description;
    private $goodsMoney;
    private $collectionValue;
    private $collectionMoney;
    private $guaranteeValue;
    private $guaranteeValueAmount;
    private $signReturn;
    private $aging;
    private $goodsType;
    private $warehouseCode;
    private $remark;
    private $idNumber;
    private $addedService;
    private $senderCompany;
    private $receiveCompany;
    private $senderIdNumber;
    private $senderIdType;
    private $sendAndPickupType;
    private $openIdSeller;
    private $xidSeller;
    private $customerTel;
    private $backAddress;
    private $customerContract;
    private $pickupOrderId;
    private $pickupWeight;
    private $pickupRemark;
    private $pickupVolume;
    private $isGuaranteeValue;
    private $pickupGuaranteeValueAmount;
    private $pickupGoodsType;
    private $pickupBizType;
    private $valueAddService;
    private $pickupSenderIdNumber;
    private $pickupSenderIdType;
    private $productId;
    private $snCode;
    private $productName;
    private $productCount;
    private $skuAddService;
    private $skuCheckOutShapes;
    private $skuCheckAttachFile;
    private $promiseTimeType;
    private $guaranteeSettleType;
    private $packingSettleType;
    private $freightSettleType;

    public function getApiMethodName()
    {
        return "jingdong.ldop.delivery.deliveryPickupReceive";
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

    public function getJosPin()
    {
        return $this->josPin;
    }

    public function setJosPin($josPin)
    {
        $this->josPin = $josPin;
        $this->apiParas["josPin"] = $josPin;
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

    public function getGoodsMoney()
    {
        return $this->goodsMoney;
    }

    public function setGoodsMoney($goodsMoney)
    {
        $this->goodsMoney = $goodsMoney;
        $this->apiParas["goodsMoney"] = $goodsMoney;
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

    public function getGoodsType()
    {
        return $this->goodsType;
    }

    public function setGoodsType($goodsType)
    {
        $this->goodsType = $goodsType;
        $this->apiParas["goodsType"] = $goodsType;
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

    public function getRemark()
    {
        return $this->remark;
    }

    public function setRemark($remark)
    {
        $this->remark = $remark;
        $this->apiParas["remark"] = $remark;
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

    public function getSenderIdNumber()
    {
        return $this->senderIdNumber;
    }

    public function setSenderIdNumber($senderIdNumber)
    {
        $this->senderIdNumber = $senderIdNumber;
        $this->apiParas["senderIdNumber"] = $senderIdNumber;
    }

    public function getSenderIdType()
    {
        return $this->senderIdType;
    }

    public function setSenderIdType($senderIdType)
    {
        $this->senderIdType = $senderIdType;
        $this->apiParas["senderIdType"] = $senderIdType;
    }

    public function getSendAndPickupType()
    {
        return $this->sendAndPickupType;
    }

    public function setSendAndPickupType($sendAndPickupType)
    {
        $this->sendAndPickupType = $sendAndPickupType;
        $this->apiParas["sendAndPickupType"] = $sendAndPickupType;
    }

    public function getOpenIdSeller()
    {
        return $this->openIdSeller;
    }

    public function setOpenIdSeller($openIdSeller)
    {
        $this->openIdSeller = $openIdSeller;
        $this->apiParas["open_id_seller"] = $openIdSeller;
    }

    public function getXidSeller()
    {
        return $this->xidSeller;
    }

    public function setXidSeller($xidSeller)
    {
        $this->xidSeller = $xidSeller;
        $this->apiParas["xid_seller"] = $xidSeller;
    }

    public function getCustomerTel()
    {
        return $this->customerTel;
    }

    public function setCustomerTel($customerTel)
    {
        $this->customerTel = $customerTel;
        $this->apiParas["customerTel"] = $customerTel;
    }

    public function getBackAddress()
    {
        return $this->backAddress;
    }

    public function setBackAddress($backAddress)
    {
        $this->backAddress = $backAddress;
        $this->apiParas["backAddress"] = $backAddress;
    }

    public function getCustomerContract()
    {
        return $this->customerContract;
    }

    public function setCustomerContract($customerContract)
    {
        $this->customerContract = $customerContract;
        $this->apiParas["customerContract"] = $customerContract;
    }

    public function getPickupOrderId()
    {
        return $this->pickupOrderId;
    }

    public function setPickupOrderId($pickupOrderId)
    {
        $this->pickupOrderId = $pickupOrderId;
        $this->apiParas["pickupOrderId"] = $pickupOrderId;
    }

    public function getPickupWeight()
    {
        return $this->pickupWeight;
    }

    public function setPickupWeight($pickupWeight)
    {
        $this->pickupWeight = $pickupWeight;
        $this->apiParas["pickupWeight"] = $pickupWeight;
    }

    public function getPickupRemark()
    {
        return $this->pickupRemark;
    }

    public function setPickupRemark($pickupRemark)
    {
        $this->pickupRemark = $pickupRemark;
        $this->apiParas["pickupRemark"] = $pickupRemark;
    }

    public function getPickupVolume()
    {
        return $this->pickupVolume;
    }

    public function setPickupVolume($pickupVolume)
    {
        $this->pickupVolume = $pickupVolume;
        $this->apiParas["pickupVolume"] = $pickupVolume;
    }

    public function getIsGuaranteeValue()
    {
        return $this->isGuaranteeValue;
    }

    public function setIsGuaranteeValue($isGuaranteeValue)
    {
        $this->isGuaranteeValue = $isGuaranteeValue;
        $this->apiParas["isGuaranteeValue"] = $isGuaranteeValue;
    }

    public function getPickupGuaranteeValueAmount()
    {
        return $this->pickupGuaranteeValueAmount;
    }

    public function setPickupGuaranteeValueAmount($pickupGuaranteeValueAmount)
    {
        $this->pickupGuaranteeValueAmount = $pickupGuaranteeValueAmount;
        $this->apiParas["pickupGuaranteeValueAmount"] = $pickupGuaranteeValueAmount;
    }

    public function getPickupGoodsType()
    {
        return $this->pickupGoodsType;
    }

    public function setPickupGoodsType($pickupGoodsType)
    {
        $this->pickupGoodsType = $pickupGoodsType;
        $this->apiParas["pickupGoodsType"] = $pickupGoodsType;
    }

    public function getPickupBizType()
    {
        return $this->pickupBizType;
    }

    public function setPickupBizType($pickupBizType)
    {
        $this->pickupBizType = $pickupBizType;
        $this->apiParas["pickupBizType"] = $pickupBizType;
    }

    public function getValueAddService()
    {
        return $this->valueAddService;
    }

    public function setValueAddService($valueAddService)
    {
        $this->valueAddService = $valueAddService;
        $this->apiParas["valueAddService"] = $valueAddService;
    }

    public function getPickupSenderIdNumber()
    {
        return $this->pickupSenderIdNumber;
    }

    public function setPickupSenderIdNumber($pickupSenderIdNumber)
    {
        $this->pickupSenderIdNumber = $pickupSenderIdNumber;
        $this->apiParas["pickupSenderIdNumber"] = $pickupSenderIdNumber;
    }

    public function getPickupSenderIdType()
    {
        return $this->pickupSenderIdType;
    }

    public function setPickupSenderIdType($pickupSenderIdType)
    {
        $this->pickupSenderIdType = $pickupSenderIdType;
        $this->apiParas["pickupSenderIdType"] = $pickupSenderIdType;
    }

    public function getProductId()
    {
        return $this->productId;
    }

    public function setProductId($productId)
    {
        $this->productId = $productId;
        $this->apiParas["productId"] = $productId;
    }

    public function getSnCode()
    {
        return $this->snCode;
    }

    public function setSnCode($snCode)
    {
        $this->snCode = $snCode;
        $this->apiParas["snCode"] = $snCode;
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

    public function getProductCount()
    {
        return $this->productCount;
    }

    public function setProductCount($productCount)
    {
        $this->productCount = $productCount;
        $this->apiParas["productCount"] = $productCount;
    }

    public function getSkuAddService()
    {
        return $this->skuAddService;
    }

    public function setSkuAddService($skuAddService)
    {
        $this->skuAddService = $skuAddService;
        $this->apiParas["skuAddService"] = $skuAddService;
    }

    public function getSkuCheckOutShapes()
    {
        return $this->skuCheckOutShapes;
    }

    public function setSkuCheckOutShapes($skuCheckOutShapes)
    {
        $this->skuCheckOutShapes = $skuCheckOutShapes;
        $this->apiParas["skuCheckOutShapes"] = $skuCheckOutShapes;
    }

    public function getSkuCheckAttachFile()
    {
        return $this->skuCheckAttachFile;
    }

    public function setSkuCheckAttachFile($skuCheckAttachFile)
    {
        $this->skuCheckAttachFile = $skuCheckAttachFile;
        $this->apiParas["skuCheckAttachFile"] = $skuCheckAttachFile;
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

    public function getGuaranteeSettleType()
    {
        return $this->guaranteeSettleType;
    }

    public function setGuaranteeSettleType($guaranteeSettleType)
    {
        $this->guaranteeSettleType = $guaranteeSettleType;
        $this->apiParas["guaranteeSettleType"] = $guaranteeSettleType;
    }

    public function getPackingSettleType()
    {
        return $this->packingSettleType;
    }

    public function setPackingSettleType($packingSettleType)
    {
        $this->packingSettleType = $packingSettleType;
        $this->apiParas["packingSettleType"] = $packingSettleType;
    }

    public function getFreightSettleType()
    {
        return $this->freightSettleType;
    }

    public function setFreightSettleType($freightSettleType)
    {
        $this->freightSettleType = $freightSettleType;
        $this->apiParas["freightSettleType"] = $freightSettleType;
    }
}
