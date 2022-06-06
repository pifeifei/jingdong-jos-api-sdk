<?php

namespace ACES\Request;


class EclpAfsCreateServiceOrderRequest
{
    private $apiParas = array();
    private $version;
    private $isvUUId;
    private $isvSource;
    private $shopNo;
    private $departmentNo;
    private $shipperNo;
    private $eclpOrderId;
    private $salePlatformSource;
    private $salesPlatformCreateTime;
    private $sourceType;
    private $pickupType;
    private $isInvoice;
    private $invoiceNo;
    private $isPackage;
    private $isTestReport;
    private $customerName;
    private $customerTel;
    private $provinceNo;
    private $provinceName;
    private $cityName;
    private $cityNo;
    private $countyName;
    private $countyNo;
    private $townName;
    private $townNo;
    private $customerAddress;
    private $pickupAddress;
    private $operatorId;
    private $operatorName;
    private $operateTime;
    private $pickupNo;
    private $questionDesc;
    private $applyReason;
    private $amsAuditComment;
    private $waybill;
    private $pickwaretype;
    private $isvGoodsNo;
    private $quantity;
    private $weight;
    private $sn;
    private $attachmentDetails;
    private $wareType;
    private $isCreatePickup;
    private $businessPhone;
    private $outPickupType;
    private $afterSalesChangeNo;
    private $spOrderId;

    public function getApiMethodName()
    {
        return "jingdong.eclp.afs.createServiceOrder";
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

    public function getIsvUUId()
    {
        return $this->isvUUId;
    }

    public function setIsvUUId($isvUUId)
    {
        $this->isvUUId = $isvUUId;
        $this->apiParas["isvUUId"] = $isvUUId;
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

    public function getShopNo()
    {
        return $this->shopNo;
    }

    public function setShopNo($shopNo)
    {
        $this->shopNo = $shopNo;
        $this->apiParas["shopNo"] = $shopNo;
    }

    public function getDepartmentNo()
    {
        return $this->departmentNo;
    }

    public function setDepartmentNo($departmentNo)
    {
        $this->departmentNo = $departmentNo;
        $this->apiParas["departmentNo"] = $departmentNo;
    }

    public function getShipperNo()
    {
        return $this->shipperNo;
    }

    public function setShipperNo($shipperNo)
    {
        $this->shipperNo = $shipperNo;
        $this->apiParas["shipperNo"] = $shipperNo;
    }

    public function getEclpOrderId()
    {
        return $this->eclpOrderId;
    }

    public function setEclpOrderId($eclpOrderId)
    {
        $this->eclpOrderId = $eclpOrderId;
        $this->apiParas["eclpOrderId"] = $eclpOrderId;
    }

    public function getSalePlatformSource()
    {
        return $this->salePlatformSource;
    }

    public function setSalePlatformSource($salePlatformSource)
    {
        $this->salePlatformSource = $salePlatformSource;
        $this->apiParas["salePlatformSource"] = $salePlatformSource;
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

    public function getSourceType()
    {
        return $this->sourceType;
    }

    public function setSourceType($sourceType)
    {
        $this->sourceType = $sourceType;
        $this->apiParas["sourceType"] = $sourceType;
    }

    public function getPickupType()
    {
        return $this->pickupType;
    }

    public function setPickupType($pickupType)
    {
        $this->pickupType = $pickupType;
        $this->apiParas["pickupType"] = $pickupType;
    }

    public function getIsInvoice()
    {
        return $this->isInvoice;
    }

    public function setIsInvoice($isInvoice)
    {
        $this->isInvoice = $isInvoice;
        $this->apiParas["isInvoice"] = $isInvoice;
    }

    public function getInvoiceNo()
    {
        return $this->invoiceNo;
    }

    public function setInvoiceNo($invoiceNo)
    {
        $this->invoiceNo = $invoiceNo;
        $this->apiParas["invoiceNo"] = $invoiceNo;
    }

    public function getIsPackage()
    {
        return $this->isPackage;
    }

    public function setIsPackage($isPackage)
    {
        $this->isPackage = $isPackage;
        $this->apiParas["isPackage"] = $isPackage;
    }

    public function getIsTestReport()
    {
        return $this->isTestReport;
    }

    public function setIsTestReport($isTestReport)
    {
        $this->isTestReport = $isTestReport;
        $this->apiParas["isTestReport"] = $isTestReport;
    }

    public function getCustomerName()
    {
        return $this->customerName;
    }

    public function setCustomerName($customerName)
    {
        $this->customerName = $customerName;
        $this->apiParas["customerName"] = $customerName;
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

    public function getProvinceNo()
    {
        return $this->provinceNo;
    }

    public function setProvinceNo($provinceNo)
    {
        $this->provinceNo = $provinceNo;
        $this->apiParas["provinceNo"] = $provinceNo;
    }

    public function getProvinceName()
    {
        return $this->provinceName;
    }

    public function setProvinceName($provinceName)
    {
        $this->provinceName = $provinceName;
        $this->apiParas["provinceName"] = $provinceName;
    }

    public function getCityName()
    {
        return $this->cityName;
    }

    public function setCityName($cityName)
    {
        $this->cityName = $cityName;
        $this->apiParas["cityName"] = $cityName;
    }

    public function getCityNo()
    {
        return $this->cityNo;
    }

    public function setCityNo($cityNo)
    {
        $this->cityNo = $cityNo;
        $this->apiParas["cityNo"] = $cityNo;
    }

    public function getCountyName()
    {
        return $this->countyName;
    }

    public function setCountyName($countyName)
    {
        $this->countyName = $countyName;
        $this->apiParas["countyName"] = $countyName;
    }

    public function getCountyNo()
    {
        return $this->countyNo;
    }

    public function setCountyNo($countyNo)
    {
        $this->countyNo = $countyNo;
        $this->apiParas["countyNo"] = $countyNo;
    }

    public function getTownName()
    {
        return $this->townName;
    }

    public function setTownName($townName)
    {
        $this->townName = $townName;
        $this->apiParas["townName"] = $townName;
    }

    public function getTownNo()
    {
        return $this->townNo;
    }

    public function setTownNo($townNo)
    {
        $this->townNo = $townNo;
        $this->apiParas["townNo"] = $townNo;
    }

    public function getCustomerAddress()
    {
        return $this->customerAddress;
    }

    public function setCustomerAddress($customerAddress)
    {
        $this->customerAddress = $customerAddress;
        $this->apiParas["customerAddress"] = $customerAddress;
    }

    public function getPickupAddress()
    {
        return $this->pickupAddress;
    }

    public function setPickupAddress($pickupAddress)
    {
        $this->pickupAddress = $pickupAddress;
        $this->apiParas["pickupAddress"] = $pickupAddress;
    }

    public function getOperatorId()
    {
        return $this->operatorId;
    }

    public function setOperatorId($operatorId)
    {
        $this->operatorId = $operatorId;
        $this->apiParas["operatorId"] = $operatorId;
    }

    public function getOperatorName()
    {
        return $this->operatorName;
    }

    public function setOperatorName($operatorName)
    {
        $this->operatorName = $operatorName;
        $this->apiParas["operatorName"] = $operatorName;
    }

    public function getOperateTime()
    {
        return $this->operateTime;
    }

    public function setOperateTime($operateTime)
    {
        $this->operateTime = $operateTime;
        $this->apiParas["operateTime"] = $operateTime;
    }

    public function getPickupNo()
    {
        return $this->pickupNo;
    }

    public function setPickupNo($pickupNo)
    {
        $this->pickupNo = $pickupNo;
        $this->apiParas["pickupNo"] = $pickupNo;
    }

    public function getQuestionDesc()
    {
        return $this->questionDesc;
    }

    public function setQuestionDesc($questionDesc)
    {
        $this->questionDesc = $questionDesc;
        $this->apiParas["questionDesc"] = $questionDesc;
    }

    public function getApplyReason()
    {
        return $this->applyReason;
    }

    public function setApplyReason($applyReason)
    {
        $this->applyReason = $applyReason;
        $this->apiParas["applyReason"] = $applyReason;
    }

    public function getAmsAuditComment()
    {
        return $this->amsAuditComment;
    }

    public function setAmsAuditComment($amsAuditComment)
    {
        $this->amsAuditComment = $amsAuditComment;
        $this->apiParas["amsAuditComment"] = $amsAuditComment;
    }

    public function getWaybill()
    {
        return $this->waybill;
    }

    public function setWaybill($waybill)
    {
        $this->waybill = $waybill;
        $this->apiParas["waybill"] = $waybill;
    }

    public function getPickwaretype()
    {
        return $this->pickwaretype;
    }

    public function setPickwaretype($pickwaretype)
    {
        $this->pickwaretype = $pickwaretype;
        $this->apiParas["pickwaretype"] = $pickwaretype;
    }

    public function getIsvGoodsNo()
    {
        return $this->isvGoodsNo;
    }

    public function setIsvGoodsNo($isvGoodsNo)
    {
        $this->isvGoodsNo = $isvGoodsNo;
        $this->apiParas["isvGoodsNo"] = $isvGoodsNo;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        $this->apiParas["quantity"] = $quantity;
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

    public function getSn()
    {
        return $this->sn;
    }

    public function setSn($sn)
    {
        $this->sn = $sn;
        $this->apiParas["sn"] = $sn;
    }

    public function getAttachmentDetails()
    {
        return $this->attachmentDetails;
    }

    public function setAttachmentDetails($attachmentDetails)
    {
        $this->attachmentDetails = $attachmentDetails;
        $this->apiParas["attachmentDetails"] = $attachmentDetails;
    }

    public function getWareType()
    {
        return $this->wareType;
    }

    public function setWareType($wareType)
    {
        $this->wareType = $wareType;
        $this->apiParas["wareType"] = $wareType;
    }

    public function getIsCreatePickup()
    {
        return $this->isCreatePickup;
    }

    public function setIsCreatePickup($isCreatePickup)
    {
        $this->isCreatePickup = $isCreatePickup;
        $this->apiParas["isCreatePickup"] = $isCreatePickup;
    }

    public function getBusinessPhone()
    {
        return $this->businessPhone;
    }

    public function setBusinessPhone($businessPhone)
    {
        $this->businessPhone = $businessPhone;
        $this->apiParas["businessPhone"] = $businessPhone;
    }

    public function getOutPickupType()
    {
        return $this->outPickupType;
    }

    public function setOutPickupType($outPickupType)
    {
        $this->outPickupType = $outPickupType;
        $this->apiParas["outPickupType"] = $outPickupType;
    }

    public function getAfterSalesChangeNo()
    {
        return $this->afterSalesChangeNo;
    }

    public function setAfterSalesChangeNo($afterSalesChangeNo)
    {
        $this->afterSalesChangeNo = $afterSalesChangeNo;
        $this->apiParas["afterSalesChangeNo"] = $afterSalesChangeNo;
    }

    public function getSpOrderId()
    {
        return $this->spOrderId;
    }

    public function setSpOrderId($spOrderId)
    {
        $this->spOrderId = $spOrderId;
        $this->apiParas["spOrderId"] = $spOrderId;
    }
}
