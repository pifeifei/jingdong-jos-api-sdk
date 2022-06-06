<?php

class LdopAlphaWaybillAppendreceiveRequest
{
    private $apiParas = array();

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

    private $version;

    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function getVersion()
    {
        return $this->version;
    }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                           private $attribute1;
    public function setAttribute1($attribute1)
    {
        $this->attribute1 = $attribute1;
        $this->apiParas["attribute1"] = $attribute1;
    }

    public function getAttribute1()
    {
        return $this->attribute1;
    }
                                                                                                                                                                        private $parentWaybillCode;

    public function setParentWaybillCode($parentWaybillCode)
    {
        $this->parentWaybillCode = $parentWaybillCode;
         $this->apiParas["parentWaybillCode"] = $parentWaybillCode;
    }

    public function getParentWaybillCode()
    {
        return $this->parentWaybillCode;
    }

                                                        private $providerCode;

    public function setProviderCode($providerCode)
    {
        $this->providerCode = $providerCode;
         $this->apiParas["providerCode"] = $providerCode;
    }

    public function getProviderCode()
    {
        return $this->providerCode;
    }

                                                        private $signReturn;

    public function setSignReturn($signReturn)
    {
        $this->signReturn = $signReturn;
         $this->apiParas["signReturn"] = $signReturn;
    }

    public function getSignReturn()
    {
        return $this->signReturn;
    }

                                                        private $source;

    public function setSource($source)
    {
        $this->source = $source;
         $this->apiParas["source"] = $source;
    }

    public function getSource()
    {
        return $this->source;
    }

                                                        private $receiveTimeType;

    public function setReceiveTimeType($receiveTimeType)
    {
        $this->receiveTimeType = $receiveTimeType;
         $this->apiParas["receiveTimeType"] = $receiveTimeType;
    }

    public function getReceiveTimeType()
    {
        return $this->receiveTimeType;
    }

                                                        private $vendorCode;

    public function setVendorCode($vendorCode)
    {
        $this->vendorCode = $vendorCode;
         $this->apiParas["vendorCode"] = $vendorCode;
    }

    public function getVendorCode()
    {
        return $this->vendorCode;
    }

                                                        private $promiseCompleteTime;

    public function setPromiseCompleteTime($promiseCompleteTime)
    {
        $this->promiseCompleteTime = $promiseCompleteTime;
         $this->apiParas["promiseCompleteTime"] = $promiseCompleteTime;
    }

    public function getPromiseCompleteTime()
    {
        return $this->promiseCompleteTime;
    }

                                                        private $payType;

    public function setPayType($payType)
    {
        $this->payType = $payType;
         $this->apiParas["payType"] = $payType;
    }

    public function getPayType()
    {
        return $this->payType;
    }

                                                        private $needGuarantee;

    public function setNeedGuarantee($needGuarantee)
    {
        $this->needGuarantee = $needGuarantee;
         $this->apiParas["needGuarantee"] = $needGuarantee;
    }

    public function getNeedGuarantee()
    {
        return $this->needGuarantee;
    }

                                                        private $pin;

    public function setPin($pin)
    {
        $this->pin = $pin;
         $this->apiParas["pin"] = $pin;
    }

    public function getPin()
    {
        return $this->pin;
    }

                                                        private $appKey;

    public function setAppKey($appKey)
    {
        $this->appKey = $appKey;
         $this->apiParas["appKey"] = $appKey;
    }

    public function getAppKey()
    {
        return $this->appKey;
    }

                                                        private $goodsName;

    public function setGoodsName($goodsName)
    {
        $this->goodsName = $goodsName;
         $this->apiParas["goodsName"] = $goodsName;
    }

    public function getGoodsName()
    {
        return $this->goodsName;
    }

                                                        private $thirdSectionCode;

    public function setThirdSectionCode($thirdSectionCode)
    {
        $this->thirdSectionCode = $thirdSectionCode;
         $this->apiParas["thirdSectionCode"] = $thirdSectionCode;
    }

    public function getThirdSectionCode()
    {
        return $this->thirdSectionCode;
    }

                                                        private $height;

    public function setHeight($height)
    {
        $this->height = $height;
         $this->apiParas["height"] = $height;
    }

    public function getHeight()
    {
        return $this->height;
    }

                                                        private $expressType;

    public function setExpressType($expressType)
    {
        $this->expressType = $expressType;
         $this->apiParas["expressType"] = $expressType;
    }

    public function getExpressType()
    {
        return $this->expressType;
    }

                                                        private $weight;

    public function setWeight($weight)
    {
        $this->weight = $weight;
         $this->apiParas["weight"] = $weight;
    }

    public function getWeight()
    {
        return $this->weight;
    }

                                                        private $vendorName;

    public function setVendorName($vendorName)
    {
        $this->vendorName = $vendorName;
         $this->apiParas["vendorName"] = $vendorName;
    }

    public function getVendorName()
    {
        return $this->vendorName;
    }

                                                        private $branchCode;

    public function setBranchCode($branchCode)
    {
        $this->branchCode = $branchCode;
         $this->apiParas["branchCode"] = $branchCode;
    }

    public function getBranchCode()
    {
        return $this->branchCode;
    }

                                                        private $volume;

    public function setVolume($volume)
    {
        $this->volume = $volume;
         $this->apiParas["volume"] = $volume;
    }

    public function getVolume()
    {
        return $this->volume;
    }

                                                        private $guaranteeMoney;

    public function setGuaranteeMoney($guaranteeMoney)
    {
        $this->guaranteeMoney = $guaranteeMoney;
         $this->apiParas["guaranteeMoney"] = $guaranteeMoney;
    }

    public function getGuaranteeMoney()
    {
        return $this->guaranteeMoney;
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

                                                        private $vendorOrderCode;

    public function setVendorOrderCode($vendorOrderCode)
    {
        $this->vendorOrderCode = $vendorOrderCode;
         $this->apiParas["vendorOrderCode"] = $vendorOrderCode;
    }

    public function getVendorOrderCode()
    {
        return $this->vendorOrderCode;
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

                                                        private $idNumber;

    public function setIdNumber($idNumber)
    {
        $this->idNumber = $idNumber;
         $this->apiParas["idNumber"] = $idNumber;
    }

    public function getIdNumber()
    {
        return $this->idNumber;
    }

                                                        private $warehouseCode;

    public function setWarehouseCode($warehouseCode)
    {
        $this->warehouseCode = $warehouseCode;
         $this->apiParas["warehouseCode"] = $warehouseCode;
    }

    public function getWarehouseCode()
    {
        return $this->warehouseCode;
    }

                                                        private $expressPayMethod;

    public function setExpressPayMethod($expressPayMethod)
    {
        $this->expressPayMethod = $expressPayMethod;
         $this->apiParas["expressPayMethod"] = $expressPayMethod;
    }

    public function getExpressPayMethod()
    {
        return $this->expressPayMethod;
    }

                                                        private $waybillType;

    public function setWaybillType($waybillType)
    {
        $this->waybillType = $waybillType;
         $this->apiParas["waybillType"] = $waybillType;
    }

    public function getWaybillType()
    {
        return $this->waybillType;
    }

                                                        private $salePlatform;

    public function setSalePlatform($salePlatform)
    {
        $this->salePlatform = $salePlatform;
         $this->apiParas["salePlatform"] = $salePlatform;
    }

    public function getSalePlatform()
    {
        return $this->salePlatform;
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

                                                        private $providerId;

    public function setProviderId($providerId)
    {
        $this->providerId = $providerId;
         $this->apiParas["providerId"] = $providerId;
    }

    public function getProviderId()
    {
        return $this->providerId;
    }

                                                        private $secondSectionCode;

    public function setSecondSectionCode($secondSectionCode)
    {
        $this->secondSectionCode = $secondSectionCode;
         $this->apiParas["secondSectionCode"] = $secondSectionCode;
    }

    public function getSecondSectionCode()
    {
        return $this->secondSectionCode;
    }

                                                        private $length;

    public function setLength($length)
    {
        $this->length = $length;
         $this->apiParas["length"] = $length;
    }

    public function getLength()
    {
        return $this->length;
    }

                                                        private $waybillCount;

    public function setWaybillCount($waybillCount)
    {
        $this->waybillCount = $waybillCount;
         $this->apiParas["waybillCount"] = $waybillCount;
    }

    public function getWaybillCount()
    {
        return $this->waybillCount;
    }

                                                        private $pickUpStartTime;

    public function setPickUpStartTime($pickUpStartTime)
    {
        $this->pickUpStartTime = $pickUpStartTime;
         $this->apiParas["pickUpStartTime"] = $pickUpStartTime;
    }

    public function getPickUpStartTime()
    {
        return $this->pickUpStartTime;
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

                                                        private $settlementCode;

    public function setSettlementCode($settlementCode)
    {
        $this->settlementCode = $settlementCode;
         $this->apiParas["settlementCode"] = $settlementCode;
    }

    public function getSettlementCode()
    {
        return $this->settlementCode;
    }

                                                        private $shouldPayMoney;

    public function setShouldPayMoney($shouldPayMoney)
    {
        $this->shouldPayMoney = $shouldPayMoney;
         $this->apiParas["shouldPayMoney"] = $shouldPayMoney;
    }

    public function getShouldPayMoney()
    {
        return $this->shouldPayMoney;
    }

                                                        private $goodsMoney;

    public function setGoodsMoney($goodsMoney)
    {
        $this->goodsMoney = $goodsMoney;
         $this->apiParas["goodsMoney"] = $goodsMoney;
    }

    public function getGoodsMoney()
    {
        return $this->goodsMoney;
    }

                                                        private $createTime;

    public function setCreateTime($createTime)
    {
        $this->createTime = $createTime;
         $this->apiParas["createTime"] = $createTime;
    }

    public function getCreateTime()
    {
        return $this->createTime;
    }

                                                        private $platformOrderNo;

    public function setPlatformOrderNo($platformOrderNo)
    {
        $this->platformOrderNo = $platformOrderNo;
         $this->apiParas["platformOrderNo"] = $platformOrderNo;
    }

    public function getPlatformOrderNo()
    {
        return $this->platformOrderNo;
    }

                                                        private $coldChainType;

    public function setColdChainType($coldChainType)
    {
        $this->coldChainType = $coldChainType;
         $this->apiParas["coldChainType"] = $coldChainType;
    }

    public function getColdChainType()
    {
        return $this->coldChainType;
    }

                                                        private $pickUpEndTime;

    public function setPickUpEndTime($pickUpEndTime)
    {
        $this->pickUpEndTime = $pickUpEndTime;
         $this->apiParas["pickUpEndTime"] = $pickUpEndTime;
    }

    public function getPickUpEndTime()
    {
        return $this->pickUpEndTime;
    }

                                                        private $width;

    public function setWidth($width)
    {
        $this->width = $width;
         $this->apiParas["width"] = $width;
    }

    public function getWidth()
    {
        return $this->width;
    }

                                                                                                                        private $fromProvinceId;

    public function setFromProvinceId($fromProvinceId)
    {
        $this->fromProvinceId = $fromProvinceId;
         $this->apiParas["fromProvinceId"] = $fromProvinceId;
    }

    public function getFromProvinceId()
    {
        return $this->fromProvinceId;
    }

                                                        private $fromProvinceName;

    public function setFromProvinceName($fromProvinceName)
    {
        $this->fromProvinceName = $fromProvinceName;
         $this->apiParas["fromProvinceName"] = $fromProvinceName;
    }

    public function getFromProvinceName()
    {
        return $this->fromProvinceName;
    }

                                                        private $fromCityId;

    public function setFromCityId($fromCityId)
    {
        $this->fromCityId = $fromCityId;
         $this->apiParas["fromCityId"] = $fromCityId;
    }

    public function getFromCityId()
    {
        return $this->fromCityId;
    }

                                                        private $fromCityName;

    public function setFromCityName($fromCityName)
    {
        $this->fromCityName = $fromCityName;
         $this->apiParas["fromCityName"] = $fromCityName;
    }

    public function getFromCityName()
    {
        return $this->fromCityName;
    }

                                                        private $fromCountryId;

    public function setFromCountryId($fromCountryId)
    {
        $this->fromCountryId = $fromCountryId;
         $this->apiParas["fromCountryId"] = $fromCountryId;
    }

    public function getFromCountryId()
    {
        return $this->fromCountryId;
    }

                                                        private $fromCountryName;

    public function setFromCountryName($fromCountryName)
    {
        $this->fromCountryName = $fromCountryName;
         $this->apiParas["fromCountryName"] = $fromCountryName;
    }

    public function getFromCountryName()
    {
        return $this->fromCountryName;
    }

                                                        private $fromCountrysideId;

    public function setFromCountrysideId($fromCountrysideId)
    {
        $this->fromCountrysideId = $fromCountrysideId;
         $this->apiParas["fromCountrysideId"] = $fromCountrysideId;
    }

    public function getFromCountrysideId()
    {
        return $this->fromCountrysideId;
    }

                                                        private $fromCountrysideName;

    public function setFromCountrysideName($fromCountrysideName)
    {
        $this->fromCountrysideName = $fromCountrysideName;
         $this->apiParas["fromCountrysideName"] = $fromCountrysideName;
    }

    public function getFromCountrysideName()
    {
        return $this->fromCountrysideName;
    }

                                                        private $fromAddressDetail;

    public function setFromAddressDetail($fromAddressDetail)
    {
        $this->fromAddressDetail = $fromAddressDetail;
         $this->apiParas["fromAddressDetail"] = $fromAddressDetail;
    }

    public function getFromAddressDetail()
    {
        return $this->fromAddressDetail;
    }

                                                        private $fromContact;

    public function setFromContact($fromContact)
    {
        $this->fromContact = $fromContact;
         $this->apiParas["fromContact"] = $fromContact;
    }

    public function getFromContact()
    {
        return $this->fromContact;
    }

                                                        private $fromPhone;

    public function setFromPhone($fromPhone)
    {
        $this->fromPhone = $fromPhone;
         $this->apiParas["fromPhone"] = $fromPhone;
    }

    public function getFromPhone()
    {
        return $this->fromPhone;
    }

                                                        private $fromMobile;

    public function setFromMobile($fromMobile)
    {
        $this->fromMobile = $fromMobile;
         $this->apiParas["fromMobile"] = $fromMobile;
    }

    public function getFromMobile()
    {
        return $this->fromMobile;
    }

                                                                                                                                                    private $toProvinceId;

    public function setToProvinceId($toProvinceId)
    {
        $this->toProvinceId = $toProvinceId;
         $this->apiParas["toProvinceId"] = $toProvinceId;
    }

    public function getToProvinceId()
    {
        return $this->toProvinceId;
    }

                                                        private $toProvinceName;

    public function setToProvinceName($toProvinceName)
    {
        $this->toProvinceName = $toProvinceName;
         $this->apiParas["toProvinceName"] = $toProvinceName;
    }

    public function getToProvinceName()
    {
        return $this->toProvinceName;
    }

                                                        private $toCityId;

    public function setToCityId($toCityId)
    {
        $this->toCityId = $toCityId;
         $this->apiParas["toCityId"] = $toCityId;
    }

    public function getToCityId()
    {
        return $this->toCityId;
    }

                                                        private $toCityName;

    public function setToCityName($toCityName)
    {
        $this->toCityName = $toCityName;
         $this->apiParas["toCityName"] = $toCityName;
    }

    public function getToCityName()
    {
        return $this->toCityName;
    }

                                                        private $toCountryId;

    public function setToCountryId($toCountryId)
    {
        $this->toCountryId = $toCountryId;
         $this->apiParas["toCountryId"] = $toCountryId;
    }

    public function getToCountryId()
    {
        return $this->toCountryId;
    }

                                                        private $toCountryName;

    public function setToCountryName($toCountryName)
    {
        $this->toCountryName = $toCountryName;
         $this->apiParas["toCountryName"] = $toCountryName;
    }

    public function getToCountryName()
    {
        return $this->toCountryName;
    }

                                                        private $toCountrysideId;

    public function setToCountrysideId($toCountrysideId)
    {
        $this->toCountrysideId = $toCountrysideId;
         $this->apiParas["toCountrysideId"] = $toCountrysideId;
    }

    public function getToCountrysideId()
    {
        return $this->toCountrysideId;
    }

                                                        private $toCountrysideName;

    public function setToCountrysideName($toCountrysideName)
    {
        $this->toCountrysideName = $toCountrysideName;
         $this->apiParas["toCountrysideName"] = $toCountrysideName;
    }

    public function getToCountrysideName()
    {
        return $this->toCountrysideName;
    }

                                                        private $toAddressDetail;

    public function setToAddressDetail($toAddressDetail)
    {
        $this->toAddressDetail = $toAddressDetail;
         $this->apiParas["toAddressDetail"] = $toAddressDetail;
    }

    public function getToAddressDetail()
    {
        return $this->toAddressDetail;
    }

                                                        private $toContact;

    public function setToContact($toContact)
    {
        $this->toContact = $toContact;
         $this->apiParas["toContact"] = $toContact;
    }

    public function getToContact()
    {
        return $this->toContact;
    }

                                                        private $toPhone;

    public function setToPhone($toPhone)
    {
        $this->toPhone = $toPhone;
         $this->apiParas["toPhone"] = $toPhone;
    }

    public function getToPhone()
    {
        return $this->toPhone;
    }

                                                        private $toMobile;

    public function setToMobile($toMobile)
    {
        $this->toMobile = $toMobile;
         $this->apiParas["toMobile"] = $toMobile;
    }

    public function getToMobile()
    {
        return $this->toMobile;
    }
}
