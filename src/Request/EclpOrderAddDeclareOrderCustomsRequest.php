<?php

namespace ACES\Request;

class EclpOrderAddDeclareOrderCustomsRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.eclp.order.addDeclareOrderCustoms';
    }

    public function check()
    {
    }

    public function getPlatformId()
    {
        return $this->apiParas['platformId'];
    }

    public function setPlatformId($platformId)
    {
        $this->apiParas['platformId'] = $platformId;

        return $this;
    }

    public function getPlatformName()
    {
        return $this->apiParas['platformName'];
    }

    public function setPlatformName($platformName)
    {
        $this->apiParas['platformName'] = $platformName;

        return $this;
    }

    public function getAppType()
    {
        return $this->apiParas['appType'];
    }

    public function setAppType($appType)
    {
        $this->apiParas['appType'] = $appType;

        return $this;
    }

    public function getLogisticsNo()
    {
        return $this->apiParas['logisticsNo'];
    }

    public function setLogisticsNo($logisticsNo)
    {
        $this->apiParas['logisticsNo'] = $logisticsNo;

        return $this;
    }

    public function getBillSerialNo()
    {
        return $this->apiParas['billSerialNo'];
    }

    public function setBillSerialNo($billSerialNo)
    {
        $this->apiParas['billSerialNo'] = $billSerialNo;

        return $this;
    }

    public function getBillNo()
    {
        return $this->apiParas['billNo'];
    }

    public function setBillNo($billNo)
    {
        $this->apiParas['billNo'] = $billNo;

        return $this;
    }

    public function getFreight()
    {
        return $this->apiParas['freight'];
    }

    public function setFreight($freight)
    {
        $this->apiParas['freight'] = $freight;

        return $this;
    }

    public function getInsuredFee()
    {
        return $this->apiParas['insuredFee'];
    }

    public function setInsuredFee($insuredFee)
    {
        $this->apiParas['insuredFee'] = $insuredFee;

        return $this;
    }

    public function getNetWeight()
    {
        return $this->apiParas['netWeight'];
    }

    public function setNetWeight($netWeight)
    {
        $this->apiParas['netWeight'] = $netWeight;

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

    public function getPackNo()
    {
        return $this->apiParas['packNo'];
    }

    public function setPackNo($packNo)
    {
        $this->apiParas['packNo'] = $packNo;

        return $this;
    }

    public function getWorth()
    {
        return $this->apiParas['worth'];
    }

    public function setWorth($worth)
    {
        $this->apiParas['worth'] = $worth;

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

    public function getOrderNo()
    {
        return $this->apiParas['orderNo'];
    }

    public function setOrderNo($orderNo)
    {
        $this->apiParas['orderNo'] = $orderNo;

        return $this;
    }

    public function getShipper()
    {
        return $this->apiParas['shipper'];
    }

    public function setShipper($shipper)
    {
        $this->apiParas['shipper'] = $shipper;

        return $this;
    }

    public function getShipperAddress()
    {
        return $this->apiParas['shipperAddress'];
    }

    public function setShipperAddress($shipperAddress)
    {
        $this->apiParas['shipperAddress'] = $shipperAddress;

        return $this;
    }

    public function getShipperTelephone()
    {
        return $this->apiParas['shipperTelephone'];
    }

    public function setShipperTelephone($shipperTelephone)
    {
        $this->apiParas['shipperTelephone'] = $shipperTelephone;

        return $this;
    }

    public function getShipperCountry()
    {
        return $this->apiParas['shipperCountry'];
    }

    public function setShipperCountry($shipperCountry)
    {
        $this->apiParas['shipperCountry'] = $shipperCountry;

        return $this;
    }

    public function getConsigneeCountry()
    {
        return $this->apiParas['consigneeCountry'];
    }

    public function setConsigneeCountry($consigneeCountry)
    {
        $this->apiParas['consigneeCountry'] = $consigneeCountry;

        return $this;
    }

    public function getConsigneeProvince()
    {
        return $this->apiParas['consigneeProvince'];
    }

    public function setConsigneeProvince($consigneeProvince)
    {
        $this->apiParas['consigneeProvince'] = $consigneeProvince;

        return $this;
    }

    public function getConsigneeCity()
    {
        return $this->apiParas['consigneeCity'];
    }

    public function setConsigneeCity($consigneeCity)
    {
        $this->apiParas['consigneeCity'] = $consigneeCity;

        return $this;
    }

    public function getConsigneeDistrict()
    {
        return $this->apiParas['consigneeDistrict'];
    }

    public function setConsigneeDistrict($consigneeDistrict)
    {
        $this->apiParas['consigneeDistrict'] = $consigneeDistrict;

        return $this;
    }

    public function getConsingee()
    {
        return $this->apiParas['consingee'];
    }

    public function setConsingee($consingee)
    {
        $this->apiParas['consingee'] = $consingee;

        return $this;
    }

    public function getConsigneeAddress()
    {
        return $this->apiParas['consigneeAddress'];
    }

    public function setConsigneeAddress($consigneeAddress)
    {
        $this->apiParas['consigneeAddress'] = $consigneeAddress;

        return $this;
    }

    public function getConsigneeTelephone()
    {
        return $this->apiParas['consigneeTelephone'];
    }

    public function setConsigneeTelephone($consigneeTelephone)
    {
        $this->apiParas['consigneeTelephone'] = $consigneeTelephone;

        return $this;
    }

    public function getBuyerIdType()
    {
        return $this->apiParas['buyerIdType'];
    }

    public function setBuyerIdType($buyerIdType)
    {
        $this->apiParas['buyerIdType'] = $buyerIdType;

        return $this;
    }

    public function getBuyerIdNumber()
    {
        return $this->apiParas['buyerIdNumber'];
    }

    public function setBuyerIdNumber($buyerIdNumber)
    {
        $this->apiParas['buyerIdNumber'] = $buyerIdNumber;

        return $this;
    }

    public function getCustomsId()
    {
        return $this->apiParas['customsId'];
    }

    public function setCustomsId($customsId)
    {
        $this->apiParas['customsId'] = $customsId;

        return $this;
    }

    public function getCustomsCode()
    {
        return $this->apiParas['customsCode'];
    }

    public function setCustomsCode($customsCode)
    {
        $this->apiParas['customsCode'] = $customsCode;

        return $this;
    }

    public function getDeptNo()
    {
        return $this->apiParas['deptNo'];
    }

    public function setDeptNo($deptNo)
    {
        $this->apiParas['deptNo'] = $deptNo;

        return $this;
    }

    public function getIsvSource()
    {
        return $this->apiParas['isvSource'];
    }

    public function setIsvSource($isvSource)
    {
        $this->apiParas['isvSource'] = $isvSource;

        return $this;
    }

    public function getPattern()
    {
        return $this->apiParas['pattern'];
    }

    public function setPattern($pattern)
    {
        $this->apiParas['pattern'] = $pattern;

        return $this;
    }

    public function getIsvUUID()
    {
        return $this->apiParas['isvUUID'];
    }

    public function setIsvUUID($isvUUID)
    {
        $this->apiParas['isvUUID'] = $isvUUID;

        return $this;
    }

    public function getPlatformType()
    {
        return $this->apiParas['platformType'];
    }

    public function setPlatformType($platformType)
    {
        $this->apiParas['platformType'] = $platformType;

        return $this;
    }

    public function getSalesPlatformCreateTime()
    {
        return $this->apiParas['salesPlatformCreateTime'];
    }

    public function setSalesPlatformCreateTime($salesPlatformCreateTime)
    {
        $this->apiParas['salesPlatformCreateTime'] = $salesPlatformCreateTime;

        return $this;
    }

    public function getPostType()
    {
        return $this->apiParas['postType'];
    }

    public function setPostType($postType)
    {
        $this->apiParas['postType'] = $postType;

        return $this;
    }

    public function getIstax()
    {
        return $this->apiParas['istax'];
    }

    public function setIstax($istax)
    {
        $this->apiParas['istax'] = $istax;

        return $this;
    }

    public function getLogisticsCode()
    {
        return $this->apiParas['logisticsCode'];
    }

    public function setLogisticsCode($logisticsCode)
    {
        $this->apiParas['logisticsCode'] = $logisticsCode;

        return $this;
    }

    public function getLogisticsName()
    {
        return $this->apiParas['logisticsName'];
    }

    public function setLogisticsName($logisticsName)
    {
        $this->apiParas['logisticsName'] = $logisticsName;

        return $this;
    }

    public function getIsDelivery()
    {
        return $this->apiParas['isDelivery'];
    }

    public function setIsDelivery($isDelivery)
    {
        $this->apiParas['isDelivery'] = $isDelivery;

        return $this;
    }

    public function getEbpCode()
    {
        return $this->apiParas['ebpCode'];
    }

    public function setEbpCode($ebpCode)
    {
        $this->apiParas['ebpCode'] = $ebpCode;

        return $this;
    }

    public function getEbpName()
    {
        return $this->apiParas['ebpName'];
    }

    public function setEbpName($ebpName)
    {
        $this->apiParas['ebpName'] = $ebpName;

        return $this;
    }

    public function getEbcCode()
    {
        return $this->apiParas['ebcCode'];
    }

    public function setEbcCode($ebcCode)
    {
        $this->apiParas['ebcCode'] = $ebcCode;

        return $this;
    }

    public function getEbcName()
    {
        return $this->apiParas['ebcName'];
    }

    public function setEbcName($ebcName)
    {
        $this->apiParas['ebcName'] = $ebcName;

        return $this;
    }

    public function getEbpCiqCode()
    {
        return $this->apiParas['ebpCiqCode'];
    }

    public function setEbpCiqCode($ebpCiqCode)
    {
        $this->apiParas['ebpCiqCode'] = $ebpCiqCode;

        return $this;
    }

    public function getEbpCiqName()
    {
        return $this->apiParas['ebpCiqName'];
    }

    public function setEbpCiqName($ebpCiqName)
    {
        $this->apiParas['ebpCiqName'] = $ebpCiqName;

        return $this;
    }

    public function getEbcCiqCode()
    {
        return $this->apiParas['ebcCiqCode'];
    }

    public function setEbcCiqCode($ebcCiqCode)
    {
        $this->apiParas['ebcCiqCode'] = $ebcCiqCode;

        return $this;
    }

    public function getEbcCiqName()
    {
        return $this->apiParas['ebcCiqName'];
    }

    public function setEbcCiqName($ebcCiqName)
    {
        $this->apiParas['ebcCiqName'] = $ebcCiqName;

        return $this;
    }

    public function getSpSoNo()
    {
        return $this->apiParas['spSoNo'];
    }

    public function setSpSoNo($spSoNo)
    {
        $this->apiParas['spSoNo'] = $spSoNo;

        return $this;
    }
}
