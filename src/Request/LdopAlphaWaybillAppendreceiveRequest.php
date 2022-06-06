<?php

namespace ACES\Request;


class LdopAlphaWaybillAppendreceiveRequest
{
    private $apiParas = array();
    private $version;
    private $attribute1;
    private $parentWaybillCode;
    private $providerCode;
    private $signReturn;
    private $source;
    private $receiveTimeType;
    private $vendorCode;
    private $promiseCompleteTime;
    private $payType;
    private $needGuarantee;
    private $pin;
    private $appKey;
    private $goodsName;
    private $thirdSectionCode;
    private $height;
    private $expressType;
    private $weight;
    private $vendorName;
    private $branchCode;
    private $volume;
    private $guaranteeMoney;
    private $transType;
    private $vendorOrderCode;
    private $remark;
    private $idNumber;
    private $warehouseCode;
    private $expressPayMethod;
    private $waybillType;
    private $salePlatform;
    private $addedService;
    private $providerId;
    private $secondSectionCode;
    private $length;
    private $waybillCount;
    private $pickUpStartTime;
    private $promiseTimeType;
    private $settlementCode;
    private $shouldPayMoney;
    private $goodsMoney;
    private $createTime;
    private $platformOrderNo;
    private $coldChainType;
    private $pickUpEndTime;
    private $width;
    private $fromProvinceId;
    private $fromProvinceName;
    private $fromCityId;
    private $fromCityName;
    private $fromCountryId;
    private $fromCountryName;
    private $fromCountrysideId;
    private $fromCountrysideName;
    private $fromAddressDetail;
    private $fromContact;
    private $fromPhone;
    private $fromMobile;
    private $toProvinceId;
    private $toProvinceName;
    private $toCityId;
    private $toCityName;
    private $toCountryId;
    private $toCountryName;
    private $toCountrysideId;
    private $toCountrysideName;
    private $toAddressDetail;
    private $toContact;
    private $toPhone;
    private $toMobile;

    public function getApiMethodName()
    {
        return "jingdong.ldop.alpha.waybill.appendreceive";
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

    public function getAttribute1()
    {
        return $this->attribute1;
    }

    public function setAttribute1($attribute1)
    {
        $this->attribute1 = $attribute1;
        $this->apiParas["attribute1"] = $attribute1;
    }

    public function getParentWaybillCode()
    {
        return $this->parentWaybillCode;
    }

    public function setParentWaybillCode($parentWaybillCode)
    {
        $this->parentWaybillCode = $parentWaybillCode;
        $this->apiParas["parentWaybillCode"] = $parentWaybillCode;
    }

    public function getProviderCode()
    {
        return $this->providerCode;
    }

    public function setProviderCode($providerCode)
    {
        $this->providerCode = $providerCode;
        $this->apiParas["providerCode"] = $providerCode;
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

    public function getSource()
    {
        return $this->source;
    }

    public function setSource($source)
    {
        $this->source = $source;
        $this->apiParas["source"] = $source;
    }

    public function getReceiveTimeType()
    {
        return $this->receiveTimeType;
    }

    public function setReceiveTimeType($receiveTimeType)
    {
        $this->receiveTimeType = $receiveTimeType;
        $this->apiParas["receiveTimeType"] = $receiveTimeType;
    }

    public function getVendorCode()
    {
        return $this->vendorCode;
    }

    public function setVendorCode($vendorCode)
    {
        $this->vendorCode = $vendorCode;
        $this->apiParas["vendorCode"] = $vendorCode;
    }

    public function getPromiseCompleteTime()
    {
        return $this->promiseCompleteTime;
    }

    public function setPromiseCompleteTime($promiseCompleteTime)
    {
        $this->promiseCompleteTime = $promiseCompleteTime;
        $this->apiParas["promiseCompleteTime"] = $promiseCompleteTime;
    }

    public function getPayType()
    {
        return $this->payType;
    }

    public function setPayType($payType)
    {
        $this->payType = $payType;
        $this->apiParas["payType"] = $payType;
    }

    public function getNeedGuarantee()
    {
        return $this->needGuarantee;
    }

    public function setNeedGuarantee($needGuarantee)
    {
        $this->needGuarantee = $needGuarantee;
        $this->apiParas["needGuarantee"] = $needGuarantee;
    }

    public function getPin()
    {
        return $this->pin;
    }

    public function setPin($pin)
    {
        $this->pin = $pin;
        $this->apiParas["pin"] = $pin;
    }

    public function getAppKey()
    {
        return $this->appKey;
    }

    public function setAppKey($appKey)
    {
        $this->appKey = $appKey;
        $this->apiParas["appKey"] = $appKey;
    }

    public function getGoodsName()
    {
        return $this->goodsName;
    }

    public function setGoodsName($goodsName)
    {
        $this->goodsName = $goodsName;
        $this->apiParas["goodsName"] = $goodsName;
    }

    public function getThirdSectionCode()
    {
        return $this->thirdSectionCode;
    }

    public function setThirdSectionCode($thirdSectionCode)
    {
        $this->thirdSectionCode = $thirdSectionCode;
        $this->apiParas["thirdSectionCode"] = $thirdSectionCode;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setHeight($height)
    {
        $this->height = $height;
        $this->apiParas["height"] = $height;
    }

    public function getExpressType()
    {
        return $this->expressType;
    }

    public function setExpressType($expressType)
    {
        $this->expressType = $expressType;
        $this->apiParas["expressType"] = $expressType;
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

    public function getVendorName()
    {
        return $this->vendorName;
    }

    public function setVendorName($vendorName)
    {
        $this->vendorName = $vendorName;
        $this->apiParas["vendorName"] = $vendorName;
    }

    public function getBranchCode()
    {
        return $this->branchCode;
    }

    public function setBranchCode($branchCode)
    {
        $this->branchCode = $branchCode;
        $this->apiParas["branchCode"] = $branchCode;
    }

    public function getVolume()
    {
        return $this->volume;
    }

    public function setVolume($volume)
    {
        $this->volume = $volume;
        $this->apiParas["volume"] = $volume;
    }

    public function getGuaranteeMoney()
    {
        return $this->guaranteeMoney;
    }

    public function setGuaranteeMoney($guaranteeMoney)
    {
        $this->guaranteeMoney = $guaranteeMoney;
        $this->apiParas["guaranteeMoney"] = $guaranteeMoney;
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

    public function getVendorOrderCode()
    {
        return $this->vendorOrderCode;
    }

    public function setVendorOrderCode($vendorOrderCode)
    {
        $this->vendorOrderCode = $vendorOrderCode;
        $this->apiParas["vendorOrderCode"] = $vendorOrderCode;
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

    public function getWarehouseCode()
    {
        return $this->warehouseCode;
    }

    public function setWarehouseCode($warehouseCode)
    {
        $this->warehouseCode = $warehouseCode;
        $this->apiParas["warehouseCode"] = $warehouseCode;
    }

    public function getExpressPayMethod()
    {
        return $this->expressPayMethod;
    }

    public function setExpressPayMethod($expressPayMethod)
    {
        $this->expressPayMethod = $expressPayMethod;
        $this->apiParas["expressPayMethod"] = $expressPayMethod;
    }

    public function getWaybillType()
    {
        return $this->waybillType;
    }

    public function setWaybillType($waybillType)
    {
        $this->waybillType = $waybillType;
        $this->apiParas["waybillType"] = $waybillType;
    }

    public function getSalePlatform()
    {
        return $this->salePlatform;
    }

    public function setSalePlatform($salePlatform)
    {
        $this->salePlatform = $salePlatform;
        $this->apiParas["salePlatform"] = $salePlatform;
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

    public function getProviderId()
    {
        return $this->providerId;
    }

    public function setProviderId($providerId)
    {
        $this->providerId = $providerId;
        $this->apiParas["providerId"] = $providerId;
    }

    public function getSecondSectionCode()
    {
        return $this->secondSectionCode;
    }

    public function setSecondSectionCode($secondSectionCode)
    {
        $this->secondSectionCode = $secondSectionCode;
        $this->apiParas["secondSectionCode"] = $secondSectionCode;
    }

    public function getLength()
    {
        return $this->length;
    }

    public function setLength($length)
    {
        $this->length = $length;
        $this->apiParas["length"] = $length;
    }

    public function getWaybillCount()
    {
        return $this->waybillCount;
    }

    public function setWaybillCount($waybillCount)
    {
        $this->waybillCount = $waybillCount;
        $this->apiParas["waybillCount"] = $waybillCount;
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

    public function getPromiseTimeType()
    {
        return $this->promiseTimeType;
    }

    public function setPromiseTimeType($promiseTimeType)
    {
        $this->promiseTimeType = $promiseTimeType;
        $this->apiParas["promiseTimeType"] = $promiseTimeType;
    }

    public function getSettlementCode()
    {
        return $this->settlementCode;
    }

    public function setSettlementCode($settlementCode)
    {
        $this->settlementCode = $settlementCode;
        $this->apiParas["settlementCode"] = $settlementCode;
    }

    public function getShouldPayMoney()
    {
        return $this->shouldPayMoney;
    }

    public function setShouldPayMoney($shouldPayMoney)
    {
        $this->shouldPayMoney = $shouldPayMoney;
        $this->apiParas["shouldPayMoney"] = $shouldPayMoney;
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

    public function getCreateTime()
    {
        return $this->createTime;
    }

    public function setCreateTime($createTime)
    {
        $this->createTime = $createTime;
        $this->apiParas["createTime"] = $createTime;
    }

    public function getPlatformOrderNo()
    {
        return $this->platformOrderNo;
    }

    public function setPlatformOrderNo($platformOrderNo)
    {
        $this->platformOrderNo = $platformOrderNo;
        $this->apiParas["platformOrderNo"] = $platformOrderNo;
    }

    public function getColdChainType()
    {
        return $this->coldChainType;
    }

    public function setColdChainType($coldChainType)
    {
        $this->coldChainType = $coldChainType;
        $this->apiParas["coldChainType"] = $coldChainType;
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

    public function getWidth()
    {
        return $this->width;
    }

    public function setWidth($width)
    {
        $this->width = $width;
        $this->apiParas["width"] = $width;
    }

    public function getFromProvinceId()
    {
        return $this->fromProvinceId;
    }

    public function setFromProvinceId($fromProvinceId)
    {
        $this->fromProvinceId = $fromProvinceId;
        $this->apiParas["fromProvinceId"] = $fromProvinceId;
    }

    public function getFromProvinceName()
    {
        return $this->fromProvinceName;
    }

    public function setFromProvinceName($fromProvinceName)
    {
        $this->fromProvinceName = $fromProvinceName;
        $this->apiParas["fromProvinceName"] = $fromProvinceName;
    }

    public function getFromCityId()
    {
        return $this->fromCityId;
    }

    public function setFromCityId($fromCityId)
    {
        $this->fromCityId = $fromCityId;
        $this->apiParas["fromCityId"] = $fromCityId;
    }

    public function getFromCityName()
    {
        return $this->fromCityName;
    }

    public function setFromCityName($fromCityName)
    {
        $this->fromCityName = $fromCityName;
        $this->apiParas["fromCityName"] = $fromCityName;
    }

    public function getFromCountryId()
    {
        return $this->fromCountryId;
    }

    public function setFromCountryId($fromCountryId)
    {
        $this->fromCountryId = $fromCountryId;
        $this->apiParas["fromCountryId"] = $fromCountryId;
    }

    public function getFromCountryName()
    {
        return $this->fromCountryName;
    }

    public function setFromCountryName($fromCountryName)
    {
        $this->fromCountryName = $fromCountryName;
        $this->apiParas["fromCountryName"] = $fromCountryName;
    }

    public function getFromCountrysideId()
    {
        return $this->fromCountrysideId;
    }

    public function setFromCountrysideId($fromCountrysideId)
    {
        $this->fromCountrysideId = $fromCountrysideId;
        $this->apiParas["fromCountrysideId"] = $fromCountrysideId;
    }

    public function getFromCountrysideName()
    {
        return $this->fromCountrysideName;
    }

    public function setFromCountrysideName($fromCountrysideName)
    {
        $this->fromCountrysideName = $fromCountrysideName;
        $this->apiParas["fromCountrysideName"] = $fromCountrysideName;
    }

    public function getFromAddressDetail()
    {
        return $this->fromAddressDetail;
    }

    public function setFromAddressDetail($fromAddressDetail)
    {
        $this->fromAddressDetail = $fromAddressDetail;
        $this->apiParas["fromAddressDetail"] = $fromAddressDetail;
    }

    public function getFromContact()
    {
        return $this->fromContact;
    }

    public function setFromContact($fromContact)
    {
        $this->fromContact = $fromContact;
        $this->apiParas["fromContact"] = $fromContact;
    }

    public function getFromPhone()
    {
        return $this->fromPhone;
    }

    public function setFromPhone($fromPhone)
    {
        $this->fromPhone = $fromPhone;
        $this->apiParas["fromPhone"] = $fromPhone;
    }

    public function getFromMobile()
    {
        return $this->fromMobile;
    }

    public function setFromMobile($fromMobile)
    {
        $this->fromMobile = $fromMobile;
        $this->apiParas["fromMobile"] = $fromMobile;
    }

    public function getToProvinceId()
    {
        return $this->toProvinceId;
    }

    public function setToProvinceId($toProvinceId)
    {
        $this->toProvinceId = $toProvinceId;
        $this->apiParas["toProvinceId"] = $toProvinceId;
    }

    public function getToProvinceName()
    {
        return $this->toProvinceName;
    }

    public function setToProvinceName($toProvinceName)
    {
        $this->toProvinceName = $toProvinceName;
        $this->apiParas["toProvinceName"] = $toProvinceName;
    }

    public function getToCityId()
    {
        return $this->toCityId;
    }

    public function setToCityId($toCityId)
    {
        $this->toCityId = $toCityId;
        $this->apiParas["toCityId"] = $toCityId;
    }

    public function getToCityName()
    {
        return $this->toCityName;
    }

    public function setToCityName($toCityName)
    {
        $this->toCityName = $toCityName;
        $this->apiParas["toCityName"] = $toCityName;
    }

    public function getToCountryId()
    {
        return $this->toCountryId;
    }

    public function setToCountryId($toCountryId)
    {
        $this->toCountryId = $toCountryId;
        $this->apiParas["toCountryId"] = $toCountryId;
    }

    public function getToCountryName()
    {
        return $this->toCountryName;
    }

    public function setToCountryName($toCountryName)
    {
        $this->toCountryName = $toCountryName;
        $this->apiParas["toCountryName"] = $toCountryName;
    }

    public function getToCountrysideId()
    {
        return $this->toCountrysideId;
    }

    public function setToCountrysideId($toCountrysideId)
    {
        $this->toCountrysideId = $toCountrysideId;
        $this->apiParas["toCountrysideId"] = $toCountrysideId;
    }

    public function getToCountrysideName()
    {
        return $this->toCountrysideName;
    }

    public function setToCountrysideName($toCountrysideName)
    {
        $this->toCountrysideName = $toCountrysideName;
        $this->apiParas["toCountrysideName"] = $toCountrysideName;
    }

    public function getToAddressDetail()
    {
        return $this->toAddressDetail;
    }

    public function setToAddressDetail($toAddressDetail)
    {
        $this->toAddressDetail = $toAddressDetail;
        $this->apiParas["toAddressDetail"] = $toAddressDetail;
    }

    public function getToContact()
    {
        return $this->toContact;
    }

    public function setToContact($toContact)
    {
        $this->toContact = $toContact;
        $this->apiParas["toContact"] = $toContact;
    }

    public function getToPhone()
    {
        return $this->toPhone;
    }

    public function setToPhone($toPhone)
    {
        $this->toPhone = $toPhone;
        $this->apiParas["toPhone"] = $toPhone;
    }

    public function getToMobile()
    {
        return $this->toMobile;
    }

    public function setToMobile($toMobile)
    {
        $this->toMobile = $toMobile;
        $this->apiParas["toMobile"] = $toMobile;
    }
}
