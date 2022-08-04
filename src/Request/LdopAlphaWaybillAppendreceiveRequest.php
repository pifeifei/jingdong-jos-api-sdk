<?php

namespace ACES\Request;

class LdopAlphaWaybillAppendreceiveRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.ldop.alpha.waybill.appendreceive';
    }

    public function check()
    {
    }

    public function getAttribute1()
    {
        return $this->apiParas['attribute1'];
    }

    public function setAttribute1($attribute1)
    {
        $this->apiParas['attribute1'] = $attribute1;

        return $this;
    }

    public function getParentWaybillCode()
    {
        return $this->apiParas['parentWaybillCode'];
    }

    public function setParentWaybillCode($parentWaybillCode)
    {
        $this->apiParas['parentWaybillCode'] = $parentWaybillCode;

        return $this;
    }

    public function getProviderCode()
    {
        return $this->apiParas['providerCode'];
    }

    public function setProviderCode($providerCode)
    {
        $this->apiParas['providerCode'] = $providerCode;

        return $this;
    }

    public function getSignReturn()
    {
        return $this->apiParas['signReturn'];
    }

    public function setSignReturn($signReturn)
    {
        $this->apiParas['signReturn'] = $signReturn;

        return $this;
    }

    public function getSource()
    {
        return $this->apiParas['source'];
    }

    public function setSource($source)
    {
        $this->apiParas['source'] = $source;

        return $this;
    }

    public function getReceiveTimeType()
    {
        return $this->apiParas['receiveTimeType'];
    }

    public function setReceiveTimeType($receiveTimeType)
    {
        $this->apiParas['receiveTimeType'] = $receiveTimeType;

        return $this;
    }

    public function getVendorCode()
    {
        return $this->apiParas['vendorCode'];
    }

    public function setVendorCode($vendorCode)
    {
        $this->apiParas['vendorCode'] = $vendorCode;

        return $this;
    }

    public function getPromiseCompleteTime()
    {
        return $this->apiParas['promiseCompleteTime'];
    }

    public function setPromiseCompleteTime($promiseCompleteTime)
    {
        $this->apiParas['promiseCompleteTime'] = $promiseCompleteTime;

        return $this;
    }

    public function getPayType()
    {
        return $this->apiParas['payType'];
    }

    public function setPayType($payType)
    {
        $this->apiParas['payType'] = $payType;

        return $this;
    }

    public function getNeedGuarantee()
    {
        return $this->apiParas['needGuarantee'];
    }

    public function setNeedGuarantee($needGuarantee)
    {
        $this->apiParas['needGuarantee'] = $needGuarantee;

        return $this;
    }

    public function getPin()
    {
        return $this->apiParas['pin'];
    }

    public function setPin($pin)
    {
        $this->apiParas['pin'] = $pin;

        return $this;
    }

    public function getAppKey()
    {
        return $this->apiParas['appKey'];
    }

    public function setAppKey($appKey)
    {
        $this->apiParas['appKey'] = $appKey;

        return $this;
    }

    public function getGoodsName()
    {
        return $this->apiParas['goodsName'];
    }

    public function setGoodsName($goodsName)
    {
        $this->apiParas['goodsName'] = $goodsName;

        return $this;
    }

    public function getThirdSectionCode()
    {
        return $this->apiParas['thirdSectionCode'];
    }

    public function setThirdSectionCode($thirdSectionCode)
    {
        $this->apiParas['thirdSectionCode'] = $thirdSectionCode;

        return $this;
    }

    public function getHeight()
    {
        return $this->apiParas['height'];
    }

    public function setHeight($height)
    {
        $this->apiParas['height'] = $height;

        return $this;
    }

    public function getExpressType()
    {
        return $this->apiParas['expressType'];
    }

    public function setExpressType($expressType)
    {
        $this->apiParas['expressType'] = $expressType;

        return $this;
    }

    public function getWeight()
    {
        return $this->apiParas['weight'];
    }

    public function setWeight($weight)
    {
        $this->apiParas['weight'] = $weight;

        return $this;
    }

    public function getVendorName()
    {
        return $this->apiParas['vendorName'];
    }

    public function setVendorName($vendorName)
    {
        $this->apiParas['vendorName'] = $vendorName;

        return $this;
    }

    public function getBranchCode()
    {
        return $this->apiParas['branchCode'];
    }

    public function setBranchCode($branchCode)
    {
        $this->apiParas['branchCode'] = $branchCode;

        return $this;
    }

    public function getVolume()
    {
        return $this->apiParas['volume'];
    }

    public function setVolume($volume)
    {
        $this->apiParas['volume'] = $volume;

        return $this;
    }

    public function getGuaranteeMoney()
    {
        return $this->apiParas['guaranteeMoney'];
    }

    public function setGuaranteeMoney($guaranteeMoney)
    {
        $this->apiParas['guaranteeMoney'] = $guaranteeMoney;

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

    public function getVendorOrderCode()
    {
        return $this->apiParas['vendorOrderCode'];
    }

    public function setVendorOrderCode($vendorOrderCode)
    {
        $this->apiParas['vendorOrderCode'] = $vendorOrderCode;

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

    public function getIdNumber()
    {
        return $this->apiParas['idNumber'];
    }

    public function setIdNumber($idNumber)
    {
        $this->apiParas['idNumber'] = $idNumber;

        return $this;
    }

    public function getWarehouseCode()
    {
        return $this->apiParas['warehouseCode'];
    }

    public function setWarehouseCode($warehouseCode)
    {
        $this->apiParas['warehouseCode'] = $warehouseCode;

        return $this;
    }

    public function getExpressPayMethod()
    {
        return $this->apiParas['expressPayMethod'];
    }

    public function setExpressPayMethod($expressPayMethod)
    {
        $this->apiParas['expressPayMethod'] = $expressPayMethod;

        return $this;
    }

    public function getWaybillType()
    {
        return $this->apiParas['waybillType'];
    }

    public function setWaybillType($waybillType)
    {
        $this->apiParas['waybillType'] = $waybillType;

        return $this;
    }

    public function getSalePlatform()
    {
        return $this->apiParas['salePlatform'];
    }

    public function setSalePlatform($salePlatform)
    {
        $this->apiParas['salePlatform'] = $salePlatform;

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

    public function getProviderId()
    {
        return $this->apiParas['providerId'];
    }

    public function setProviderId($providerId)
    {
        $this->apiParas['providerId'] = $providerId;

        return $this;
    }

    public function getSecondSectionCode()
    {
        return $this->apiParas['secondSectionCode'];
    }

    public function setSecondSectionCode($secondSectionCode)
    {
        $this->apiParas['secondSectionCode'] = $secondSectionCode;

        return $this;
    }

    public function getLength()
    {
        return $this->apiParas['length'];
    }

    public function setLength($length)
    {
        $this->apiParas['length'] = $length;

        return $this;
    }

    public function getWaybillCount()
    {
        return $this->apiParas['waybillCount'];
    }

    public function setWaybillCount($waybillCount)
    {
        $this->apiParas['waybillCount'] = $waybillCount;

        return $this;
    }

    public function getPickUpStartTime()
    {
        return $this->apiParas['pickUpStartTime'];
    }

    public function setPickUpStartTime($pickUpStartTime)
    {
        $this->apiParas['pickUpStartTime'] = $pickUpStartTime;

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

    public function getSettlementCode()
    {
        return $this->apiParas['settlementCode'];
    }

    public function setSettlementCode($settlementCode)
    {
        $this->apiParas['settlementCode'] = $settlementCode;

        return $this;
    }

    public function getShouldPayMoney()
    {
        return $this->apiParas['shouldPayMoney'];
    }

    public function setShouldPayMoney($shouldPayMoney)
    {
        $this->apiParas['shouldPayMoney'] = $shouldPayMoney;

        return $this;
    }

    public function getGoodsMoney()
    {
        return $this->apiParas['goodsMoney'];
    }

    public function setGoodsMoney($goodsMoney)
    {
        $this->apiParas['goodsMoney'] = $goodsMoney;

        return $this;
    }

    public function getCreateTime()
    {
        return $this->apiParas['createTime'];
    }

    public function setCreateTime($createTime)
    {
        $this->apiParas['createTime'] = $createTime;

        return $this;
    }

    public function getPlatformOrderNo()
    {
        return $this->apiParas['platformOrderNo'];
    }

    public function setPlatformOrderNo($platformOrderNo)
    {
        $this->apiParas['platformOrderNo'] = $platformOrderNo;

        return $this;
    }

    public function getColdChainType()
    {
        return $this->apiParas['coldChainType'];
    }

    public function setColdChainType($coldChainType)
    {
        $this->apiParas['coldChainType'] = $coldChainType;

        return $this;
    }

    public function getPickUpEndTime()
    {
        return $this->apiParas['pickUpEndTime'];
    }

    public function setPickUpEndTime($pickUpEndTime)
    {
        $this->apiParas['pickUpEndTime'] = $pickUpEndTime;

        return $this;
    }

    public function getWidth()
    {
        return $this->apiParas['width'];
    }

    public function setWidth($width)
    {
        $this->apiParas['width'] = $width;

        return $this;
    }

    public function getFromProvinceId()
    {
        return $this->apiParas['fromProvinceId'];
    }

    public function setFromProvinceId($fromProvinceId)
    {
        $this->apiParas['fromProvinceId'] = $fromProvinceId;

        return $this;
    }

    public function getFromProvinceName()
    {
        return $this->apiParas['fromProvinceName'];
    }

    public function setFromProvinceName($fromProvinceName)
    {
        $this->apiParas['fromProvinceName'] = $fromProvinceName;

        return $this;
    }

    public function getFromCityId()
    {
        return $this->apiParas['fromCityId'];
    }

    public function setFromCityId($fromCityId)
    {
        $this->apiParas['fromCityId'] = $fromCityId;

        return $this;
    }

    public function getFromCityName()
    {
        return $this->apiParas['fromCityName'];
    }

    public function setFromCityName($fromCityName)
    {
        $this->apiParas['fromCityName'] = $fromCityName;

        return $this;
    }

    public function getFromCountryId()
    {
        return $this->apiParas['fromCountryId'];
    }

    public function setFromCountryId($fromCountryId)
    {
        $this->apiParas['fromCountryId'] = $fromCountryId;

        return $this;
    }

    public function getFromCountryName()
    {
        return $this->apiParas['fromCountryName'];
    }

    public function setFromCountryName($fromCountryName)
    {
        $this->apiParas['fromCountryName'] = $fromCountryName;

        return $this;
    }

    public function getFromCountrysideId()
    {
        return $this->apiParas['fromCountrysideId'];
    }

    public function setFromCountrysideId($fromCountrysideId)
    {
        $this->apiParas['fromCountrysideId'] = $fromCountrysideId;

        return $this;
    }

    public function getFromCountrysideName()
    {
        return $this->apiParas['fromCountrysideName'];
    }

    public function setFromCountrysideName($fromCountrysideName)
    {
        $this->apiParas['fromCountrysideName'] = $fromCountrysideName;

        return $this;
    }

    public function getFromAddressDetail()
    {
        return $this->apiParas['fromAddressDetail'];
    }

    public function setFromAddressDetail($fromAddressDetail)
    {
        $this->apiParas['fromAddressDetail'] = $fromAddressDetail;

        return $this;
    }

    public function getFromContact()
    {
        return $this->apiParas['fromContact'];
    }

    public function setFromContact($fromContact)
    {
        $this->apiParas['fromContact'] = $fromContact;

        return $this;
    }

    public function getFromPhone()
    {
        return $this->apiParas['fromPhone'];
    }

    public function setFromPhone($fromPhone)
    {
        $this->apiParas['fromPhone'] = $fromPhone;

        return $this;
    }

    public function getFromMobile()
    {
        return $this->apiParas['fromMobile'];
    }

    public function setFromMobile($fromMobile)
    {
        $this->apiParas['fromMobile'] = $fromMobile;

        return $this;
    }

    public function getToProvinceId()
    {
        return $this->apiParas['toProvinceId'];
    }

    public function setToProvinceId($toProvinceId)
    {
        $this->apiParas['toProvinceId'] = $toProvinceId;

        return $this;
    }

    public function getToProvinceName()
    {
        return $this->apiParas['toProvinceName'];
    }

    public function setToProvinceName($toProvinceName)
    {
        $this->apiParas['toProvinceName'] = $toProvinceName;

        return $this;
    }

    public function getToCityId()
    {
        return $this->apiParas['toCityId'];
    }

    public function setToCityId($toCityId)
    {
        $this->apiParas['toCityId'] = $toCityId;

        return $this;
    }

    public function getToCityName()
    {
        return $this->apiParas['toCityName'];
    }

    public function setToCityName($toCityName)
    {
        $this->apiParas['toCityName'] = $toCityName;

        return $this;
    }

    public function getToCountryId()
    {
        return $this->apiParas['toCountryId'];
    }

    public function setToCountryId($toCountryId)
    {
        $this->apiParas['toCountryId'] = $toCountryId;

        return $this;
    }

    public function getToCountryName()
    {
        return $this->apiParas['toCountryName'];
    }

    public function setToCountryName($toCountryName)
    {
        $this->apiParas['toCountryName'] = $toCountryName;

        return $this;
    }

    public function getToCountrysideId()
    {
        return $this->apiParas['toCountrysideId'];
    }

    public function setToCountrysideId($toCountrysideId)
    {
        $this->apiParas['toCountrysideId'] = $toCountrysideId;

        return $this;
    }

    public function getToCountrysideName()
    {
        return $this->apiParas['toCountrysideName'];
    }

    public function setToCountrysideName($toCountrysideName)
    {
        $this->apiParas['toCountrysideName'] = $toCountrysideName;

        return $this;
    }

    public function getToAddressDetail()
    {
        return $this->apiParas['toAddressDetail'];
    }

    public function setToAddressDetail($toAddressDetail)
    {
        $this->apiParas['toAddressDetail'] = $toAddressDetail;

        return $this;
    }

    public function getToContact()
    {
        return $this->apiParas['toContact'];
    }

    public function setToContact($toContact)
    {
        $this->apiParas['toContact'] = $toContact;

        return $this;
    }

    public function getToPhone()
    {
        return $this->apiParas['toPhone'];
    }

    public function setToPhone($toPhone)
    {
        $this->apiParas['toPhone'] = $toPhone;

        return $this;
    }

    public function getToMobile()
    {
        return $this->apiParas['toMobile'];
    }

    public function setToMobile($toMobile)
    {
        $this->apiParas['toMobile'] = $toMobile;

        return $this;
    }
}
