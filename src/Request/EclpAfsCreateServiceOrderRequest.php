<?php

namespace ACES\Request;

class EclpAfsCreateServiceOrderRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.eclp.afs.createServiceOrder';
    }

    public function check()
    {
    }

    public function getIsvUUId()
    {
        return $this->apiParas['isvUUId'];
    }

    public function setIsvUUId($isvUUId)
    {
        $this->apiParas['isvUUId'] = $isvUUId;

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

    public function getShopNo()
    {
        return $this->apiParas['shopNo'];
    }

    public function setShopNo($shopNo)
    {
        $this->apiParas['shopNo'] = $shopNo;

        return $this;
    }

    public function getDepartmentNo()
    {
        return $this->apiParas['departmentNo'];
    }

    public function setDepartmentNo($departmentNo)
    {
        $this->apiParas['departmentNo'] = $departmentNo;

        return $this;
    }

    public function getShipperNo()
    {
        return $this->apiParas['shipperNo'];
    }

    public function setShipperNo($shipperNo)
    {
        $this->apiParas['shipperNo'] = $shipperNo;

        return $this;
    }

    public function getEclpOrderId()
    {
        return $this->apiParas['eclpOrderId'];
    }

    public function setEclpOrderId($eclpOrderId)
    {
        $this->apiParas['eclpOrderId'] = $eclpOrderId;

        return $this;
    }

    public function getSalePlatformSource()
    {
        return $this->apiParas['salePlatformSource'];
    }

    public function setSalePlatformSource($salePlatformSource)
    {
        $this->apiParas['salePlatformSource'] = $salePlatformSource;

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

    public function getSourceType()
    {
        return $this->apiParas['sourceType'];
    }

    public function setSourceType($sourceType)
    {
        $this->apiParas['sourceType'] = $sourceType;

        return $this;
    }

    public function getPickupType()
    {
        return $this->apiParas['pickupType'];
    }

    public function setPickupType($pickupType)
    {
        $this->apiParas['pickupType'] = $pickupType;

        return $this;
    }

    public function getIsInvoice()
    {
        return $this->apiParas['isInvoice'];
    }

    public function setIsInvoice($isInvoice)
    {
        $this->apiParas['isInvoice'] = $isInvoice;

        return $this;
    }

    public function getInvoiceNo()
    {
        return $this->apiParas['invoiceNo'];
    }

    public function setInvoiceNo($invoiceNo)
    {
        $this->apiParas['invoiceNo'] = $invoiceNo;

        return $this;
    }

    public function getIsPackage()
    {
        return $this->apiParas['isPackage'];
    }

    public function setIsPackage($isPackage)
    {
        $this->apiParas['isPackage'] = $isPackage;

        return $this;
    }

    public function getIsTestReport()
    {
        return $this->apiParas['isTestReport'];
    }

    public function setIsTestReport($isTestReport)
    {
        $this->apiParas['isTestReport'] = $isTestReport;

        return $this;
    }

    public function getCustomerName()
    {
        return $this->apiParas['customerName'];
    }

    public function setCustomerName($customerName)
    {
        $this->apiParas['customerName'] = $customerName;

        return $this;
    }

    public function getCustomerTel()
    {
        return $this->apiParas['customerTel'];
    }

    public function setCustomerTel($customerTel)
    {
        $this->apiParas['customerTel'] = $customerTel;

        return $this;
    }

    public function getProvinceNo()
    {
        return $this->apiParas['provinceNo'];
    }

    public function setProvinceNo($provinceNo)
    {
        $this->apiParas['provinceNo'] = $provinceNo;

        return $this;
    }

    public function getProvinceName()
    {
        return $this->apiParas['provinceName'];
    }

    public function setProvinceName($provinceName)
    {
        $this->apiParas['provinceName'] = $provinceName;

        return $this;
    }

    public function getCityName()
    {
        return $this->apiParas['cityName'];
    }

    public function setCityName($cityName)
    {
        $this->apiParas['cityName'] = $cityName;

        return $this;
    }

    public function getCityNo()
    {
        return $this->apiParas['cityNo'];
    }

    public function setCityNo($cityNo)
    {
        $this->apiParas['cityNo'] = $cityNo;

        return $this;
    }

    public function getCountyName()
    {
        return $this->apiParas['countyName'];
    }

    public function setCountyName($countyName)
    {
        $this->apiParas['countyName'] = $countyName;

        return $this;
    }

    public function getCountyNo()
    {
        return $this->apiParas['countyNo'];
    }

    public function setCountyNo($countyNo)
    {
        $this->apiParas['countyNo'] = $countyNo;

        return $this;
    }

    public function getTownName()
    {
        return $this->apiParas['townName'];
    }

    public function setTownName($townName)
    {
        $this->apiParas['townName'] = $townName;

        return $this;
    }

    public function getTownNo()
    {
        return $this->apiParas['townNo'];
    }

    public function setTownNo($townNo)
    {
        $this->apiParas['townNo'] = $townNo;

        return $this;
    }

    public function getCustomerAddress()
    {
        return $this->apiParas['customerAddress'];
    }

    public function setCustomerAddress($customerAddress)
    {
        $this->apiParas['customerAddress'] = $customerAddress;

        return $this;
    }

    public function getPickupAddress()
    {
        return $this->apiParas['pickupAddress'];
    }

    public function setPickupAddress($pickupAddress)
    {
        $this->apiParas['pickupAddress'] = $pickupAddress;

        return $this;
    }

    public function getOperatorId()
    {
        return $this->apiParas['operatorId'];
    }

    public function setOperatorId($operatorId)
    {
        $this->apiParas['operatorId'] = $operatorId;

        return $this;
    }

    public function getOperatorName()
    {
        return $this->apiParas['operatorName'];
    }

    public function setOperatorName($operatorName)
    {
        $this->apiParas['operatorName'] = $operatorName;

        return $this;
    }

    public function getOperateTime()
    {
        return $this->apiParas['operateTime'];
    }

    public function setOperateTime($operateTime)
    {
        $this->apiParas['operateTime'] = $operateTime;

        return $this;
    }

    public function getPickupNo()
    {
        return $this->apiParas['pickupNo'];
    }

    public function setPickupNo($pickupNo)
    {
        $this->apiParas['pickupNo'] = $pickupNo;

        return $this;
    }

    public function getQuestionDesc()
    {
        return $this->apiParas['questionDesc'];
    }

    public function setQuestionDesc($questionDesc)
    {
        $this->apiParas['questionDesc'] = $questionDesc;

        return $this;
    }

    public function getApplyReason()
    {
        return $this->apiParas['applyReason'];
    }

    public function setApplyReason($applyReason)
    {
        $this->apiParas['applyReason'] = $applyReason;

        return $this;
    }

    public function getAmsAuditComment()
    {
        return $this->apiParas['amsAuditComment'];
    }

    public function setAmsAuditComment($amsAuditComment)
    {
        $this->apiParas['amsAuditComment'] = $amsAuditComment;

        return $this;
    }

    public function getWaybill()
    {
        return $this->apiParas['waybill'];
    }

    public function setWaybill($waybill)
    {
        $this->apiParas['waybill'] = $waybill;

        return $this;
    }

    public function getPickwaretype()
    {
        return $this->apiParas['pickwaretype'];
    }

    public function setPickwaretype($pickwaretype)
    {
        $this->apiParas['pickwaretype'] = $pickwaretype;

        return $this;
    }

    public function getIsvGoodsNo()
    {
        return $this->apiParas['isvGoodsNo'];
    }

    public function setIsvGoodsNo($isvGoodsNo)
    {
        $this->apiParas['isvGoodsNo'] = $isvGoodsNo;

        return $this;
    }

    public function getQuantity()
    {
        return $this->apiParas['quantity'];
    }

    public function setQuantity($quantity)
    {
        $this->apiParas['quantity'] = $quantity;

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

    public function getSn()
    {
        return $this->apiParas['sn'];
    }

    public function setSn($sn)
    {
        $this->apiParas['sn'] = $sn;

        return $this;
    }

    public function getAttachmentDetails()
    {
        return $this->apiParas['attachmentDetails'];
    }

    public function setAttachmentDetails($attachmentDetails)
    {
        $this->apiParas['attachmentDetails'] = $attachmentDetails;

        return $this;
    }

    public function getWareType()
    {
        return $this->apiParas['wareType'];
    }

    public function setWareType($wareType)
    {
        $this->apiParas['wareType'] = $wareType;

        return $this;
    }

    public function getIsCreatePickup()
    {
        return $this->apiParas['isCreatePickup'];
    }

    public function setIsCreatePickup($isCreatePickup)
    {
        $this->apiParas['isCreatePickup'] = $isCreatePickup;

        return $this;
    }

    public function getBusinessPhone()
    {
        return $this->apiParas['businessPhone'];
    }

    public function setBusinessPhone($businessPhone)
    {
        $this->apiParas['businessPhone'] = $businessPhone;

        return $this;
    }

    public function getOutPickupType()
    {
        return $this->apiParas['outPickupType'];
    }

    public function setOutPickupType($outPickupType)
    {
        $this->apiParas['outPickupType'] = $outPickupType;

        return $this;
    }

    public function getAfterSalesChangeNo()
    {
        return $this->apiParas['afterSalesChangeNo'];
    }

    public function setAfterSalesChangeNo($afterSalesChangeNo)
    {
        $this->apiParas['afterSalesChangeNo'] = $afterSalesChangeNo;

        return $this;
    }

    public function getSpOrderId()
    {
        return $this->apiParas['spOrderId'];
    }

    public function setSpOrderId($spOrderId)
    {
        $this->apiParas['spOrderId'] = $spOrderId;

        return $this;
    }
}
