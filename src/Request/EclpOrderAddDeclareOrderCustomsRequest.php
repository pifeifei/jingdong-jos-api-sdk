<?php

namespace ACES\Request;


class EclpOrderAddDeclareOrderCustomsRequest
{
    private $apiParas = array();
    private $version;
    private $platformId;
    private $platformName;
    private $appType;
    private $logisticsNo;
    private $billSerialNo;
    private $billNo;
    private $freight;
    private $insuredFee;
    private $netWeight;
    private $weight;
    private $packNo;
    private $worth;
    private $goodsName;
    private $orderNo;
    private $shipper;
    private $shipperAddress;
    private $shipperTelephone;
    private $shipperCountry;
    private $consigneeCountry;
    private $consigneeProvince;
    private $consigneeCity;
    private $consigneeDistrict;
    private $consingee;
    private $consigneeAddress;
    private $consigneeTelephone;
    private $buyerIdType;
    private $buyerIdNumber;
    private $customsId;
    private $customsCode;
    private $deptNo;
    private $isvSource;
    private $pattern;
    private $isvUUID;
    private $platformType;
    private $salesPlatformCreateTime;
    private $postType;
    private $istax;
    private $logisticsCode;
    private $logisticsName;
    private $isDelivery;
    private $ebpCode;
    private $ebpName;
    private $ebcCode;
    private $ebcName;
    private $ebpCiqCode;
    private $ebpCiqName;
    private $ebcCiqCode;
    private $ebcCiqName;
    private $spSoNo;

    public function getApiMethodName()
    {
        return "jingdong.eclp.order.addDeclareOrderCustoms";
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

    public function getPlatformId()
    {
        return $this->platformId;
    }

    public function setPlatformId($platformId)
    {
        $this->platformId = $platformId;
        $this->apiParas["platformId"] = $platformId;
    }

    public function getPlatformName()
    {
        return $this->platformName;
    }

    public function setPlatformName($platformName)
    {
        $this->platformName = $platformName;
        $this->apiParas["platformName"] = $platformName;
    }

    public function getAppType()
    {
        return $this->appType;
    }

    public function setAppType($appType)
    {
        $this->appType = $appType;
        $this->apiParas["appType"] = $appType;
    }

    public function getLogisticsNo()
    {
        return $this->logisticsNo;
    }

    public function setLogisticsNo($logisticsNo)
    {
        $this->logisticsNo = $logisticsNo;
        $this->apiParas["logisticsNo"] = $logisticsNo;
    }

    public function getBillSerialNo()
    {
        return $this->billSerialNo;
    }

    public function setBillSerialNo($billSerialNo)
    {
        $this->billSerialNo = $billSerialNo;
        $this->apiParas["billSerialNo"] = $billSerialNo;
    }

    public function getBillNo()
    {
        return $this->billNo;
    }

    public function setBillNo($billNo)
    {
        $this->billNo = $billNo;
        $this->apiParas["billNo"] = $billNo;
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

    public function getInsuredFee()
    {
        return $this->insuredFee;
    }

    public function setInsuredFee($insuredFee)
    {
        $this->insuredFee = $insuredFee;
        $this->apiParas["insuredFee"] = $insuredFee;
    }

    public function getNetWeight()
    {
        return $this->netWeight;
    }

    public function setNetWeight($netWeight)
    {
        $this->netWeight = $netWeight;
        $this->apiParas["netWeight"] = $netWeight;
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

    public function getPackNo()
    {
        return $this->packNo;
    }

    public function setPackNo($packNo)
    {
        $this->packNo = $packNo;
        $this->apiParas["packNo"] = $packNo;
    }

    public function getWorth()
    {
        return $this->worth;
    }

    public function setWorth($worth)
    {
        $this->worth = $worth;
        $this->apiParas["worth"] = $worth;
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

    public function getOrderNo()
    {
        return $this->orderNo;
    }

    public function setOrderNo($orderNo)
    {
        $this->orderNo = $orderNo;
        $this->apiParas["orderNo"] = $orderNo;
    }

    public function getShipper()
    {
        return $this->shipper;
    }

    public function setShipper($shipper)
    {
        $this->shipper = $shipper;
        $this->apiParas["shipper"] = $shipper;
    }

    public function getShipperAddress()
    {
        return $this->shipperAddress;
    }

    public function setShipperAddress($shipperAddress)
    {
        $this->shipperAddress = $shipperAddress;
        $this->apiParas["shipperAddress"] = $shipperAddress;
    }

    public function getShipperTelephone()
    {
        return $this->shipperTelephone;
    }

    public function setShipperTelephone($shipperTelephone)
    {
        $this->shipperTelephone = $shipperTelephone;
        $this->apiParas["shipperTelephone"] = $shipperTelephone;
    }

    public function getShipperCountry()
    {
        return $this->shipperCountry;
    }

    public function setShipperCountry($shipperCountry)
    {
        $this->shipperCountry = $shipperCountry;
        $this->apiParas["shipperCountry"] = $shipperCountry;
    }

    public function getConsigneeCountry()
    {
        return $this->consigneeCountry;
    }

    public function setConsigneeCountry($consigneeCountry)
    {
        $this->consigneeCountry = $consigneeCountry;
        $this->apiParas["consigneeCountry"] = $consigneeCountry;
    }

    public function getConsigneeProvince()
    {
        return $this->consigneeProvince;
    }

    public function setConsigneeProvince($consigneeProvince)
    {
        $this->consigneeProvince = $consigneeProvince;
        $this->apiParas["consigneeProvince"] = $consigneeProvince;
    }

    public function getConsigneeCity()
    {
        return $this->consigneeCity;
    }

    public function setConsigneeCity($consigneeCity)
    {
        $this->consigneeCity = $consigneeCity;
        $this->apiParas["consigneeCity"] = $consigneeCity;
    }

    public function getConsigneeDistrict()
    {
        return $this->consigneeDistrict;
    }

    public function setConsigneeDistrict($consigneeDistrict)
    {
        $this->consigneeDistrict = $consigneeDistrict;
        $this->apiParas["consigneeDistrict"] = $consigneeDistrict;
    }

    public function getConsingee()
    {
        return $this->consingee;
    }

    public function setConsingee($consingee)
    {
        $this->consingee = $consingee;
        $this->apiParas["consingee"] = $consingee;
    }

    public function getConsigneeAddress()
    {
        return $this->consigneeAddress;
    }

    public function setConsigneeAddress($consigneeAddress)
    {
        $this->consigneeAddress = $consigneeAddress;
        $this->apiParas["consigneeAddress"] = $consigneeAddress;
    }

    public function getConsigneeTelephone()
    {
        return $this->consigneeTelephone;
    }

    public function setConsigneeTelephone($consigneeTelephone)
    {
        $this->consigneeTelephone = $consigneeTelephone;
        $this->apiParas["consigneeTelephone"] = $consigneeTelephone;
    }

    public function getBuyerIdType()
    {
        return $this->buyerIdType;
    }

    public function setBuyerIdType($buyerIdType)
    {
        $this->buyerIdType = $buyerIdType;
        $this->apiParas["buyerIdType"] = $buyerIdType;
    }

    public function getBuyerIdNumber()
    {
        return $this->buyerIdNumber;
    }

    public function setBuyerIdNumber($buyerIdNumber)
    {
        $this->buyerIdNumber = $buyerIdNumber;
        $this->apiParas["buyerIdNumber"] = $buyerIdNumber;
    }

    public function getCustomsId()
    {
        return $this->customsId;
    }

    public function setCustomsId($customsId)
    {
        $this->customsId = $customsId;
        $this->apiParas["customsId"] = $customsId;
    }

    public function getCustomsCode()
    {
        return $this->customsCode;
    }

    public function setCustomsCode($customsCode)
    {
        $this->customsCode = $customsCode;
        $this->apiParas["customsCode"] = $customsCode;
    }

    public function getDeptNo()
    {
        return $this->deptNo;
    }

    public function setDeptNo($deptNo)
    {
        $this->deptNo = $deptNo;
        $this->apiParas["deptNo"] = $deptNo;
    }

    public function getIsvSource()
    {
        return $this->isvSource;
    }

    public function setIsvSource($isvSource)
    {
        $this->isvSource = $isvSource;
        $this->apiParas["isvSource"] = $isvSource;
    }

    public function getPattern()
    {
        return $this->pattern;
    }

    public function setPattern($pattern)
    {
        $this->pattern = $pattern;
        $this->apiParas["pattern"] = $pattern;
    }

    public function getIsvUUID()
    {
        return $this->isvUUID;
    }

    public function setIsvUUID($isvUUID)
    {
        $this->isvUUID = $isvUUID;
        $this->apiParas["isvUUID"] = $isvUUID;
    }

    public function getPlatformType()
    {
        return $this->platformType;
    }

    public function setPlatformType($platformType)
    {
        $this->platformType = $platformType;
        $this->apiParas["platformType"] = $platformType;
    }

    public function getSalesPlatformCreateTime()
    {
        return $this->salesPlatformCreateTime;
    }

    public function setSalesPlatformCreateTime($salesPlatformCreateTime)
    {
        $this->salesPlatformCreateTime = $salesPlatformCreateTime;
        $this->apiParas["salesPlatformCreateTime"] = $salesPlatformCreateTime;
    }

    public function getPostType()
    {
        return $this->postType;
    }

    public function setPostType($postType)
    {
        $this->postType = $postType;
        $this->apiParas["postType"] = $postType;
    }

    public function getIstax()
    {
        return $this->istax;
    }

    public function setIstax($istax)
    {
        $this->istax = $istax;
        $this->apiParas["istax"] = $istax;
    }

    public function getLogisticsCode()
    {
        return $this->logisticsCode;
    }

    public function setLogisticsCode($logisticsCode)
    {
        $this->logisticsCode = $logisticsCode;
        $this->apiParas["logisticsCode"] = $logisticsCode;
    }

    public function getLogisticsName()
    {
        return $this->logisticsName;
    }

    public function setLogisticsName($logisticsName)
    {
        $this->logisticsName = $logisticsName;
        $this->apiParas["logisticsName"] = $logisticsName;
    }

    public function getIsDelivery()
    {
        return $this->isDelivery;
    }

    public function setIsDelivery($isDelivery)
    {
        $this->isDelivery = $isDelivery;
        $this->apiParas["isDelivery"] = $isDelivery;
    }

    public function getEbpCode()
    {
        return $this->ebpCode;
    }

    public function setEbpCode($ebpCode)
    {
        $this->ebpCode = $ebpCode;
        $this->apiParas["ebpCode"] = $ebpCode;
    }

    public function getEbpName()
    {
        return $this->ebpName;
    }

    public function setEbpName($ebpName)
    {
        $this->ebpName = $ebpName;
        $this->apiParas["ebpName"] = $ebpName;
    }

    public function getEbcCode()
    {
        return $this->ebcCode;
    }

    public function setEbcCode($ebcCode)
    {
        $this->ebcCode = $ebcCode;
        $this->apiParas["ebcCode"] = $ebcCode;
    }

    public function getEbcName()
    {
        return $this->ebcName;
    }

    public function setEbcName($ebcName)
    {
        $this->ebcName = $ebcName;
        $this->apiParas["ebcName"] = $ebcName;
    }

    public function getEbpCiqCode()
    {
        return $this->ebpCiqCode;
    }

    public function setEbpCiqCode($ebpCiqCode)
    {
        $this->ebpCiqCode = $ebpCiqCode;
        $this->apiParas["ebpCiqCode"] = $ebpCiqCode;
    }

    public function getEbpCiqName()
    {
        return $this->ebpCiqName;
    }

    public function setEbpCiqName($ebpCiqName)
    {
        $this->ebpCiqName = $ebpCiqName;
        $this->apiParas["ebpCiqName"] = $ebpCiqName;
    }

    public function getEbcCiqCode()
    {
        return $this->ebcCiqCode;
    }

    public function setEbcCiqCode($ebcCiqCode)
    {
        $this->ebcCiqCode = $ebcCiqCode;
        $this->apiParas["ebcCiqCode"] = $ebcCiqCode;
    }

    public function getEbcCiqName()
    {
        return $this->ebcCiqName;
    }

    public function setEbcCiqName($ebcCiqName)
    {
        $this->ebcCiqName = $ebcCiqName;
        $this->apiParas["ebcCiqName"] = $ebcCiqName;
    }

    public function getSpSoNo()
    {
        return $this->spSoNo;
    }

    public function setSpSoNo($spSoNo)
    {
        $this->spSoNo = $spSoNo;
        $this->apiParas["spSoNo"] = $spSoNo;
    }
}
