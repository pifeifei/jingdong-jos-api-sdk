<?php

namespace ACES\Request;

class WlLbsEbsAddRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.wl.lbs.ebs.add';
    }

    public function check()
    {
    }

    public function getOrderType()
    {
        return $this->apiParas['orderType'];
    }

    public function setOrderType($orderType)
    {
        $this->apiParas['orderType'] = $orderType;

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

    public function getVendorId()
    {
        return $this->apiParas['vendorId'];
    }

    public function setVendorId($vendorId)
    {
        $this->apiParas['vendorId'] = $vendorId;

        return $this;
    }

    public function getProject()
    {
        return $this->apiParas['project'];
    }

    public function setProject($project)
    {
        $this->apiParas['project'] = $project;

        return $this;
    }

    public function getExchangeAmount()
    {
        return $this->apiParas['exchangeAmount'];
    }

    public function setExchangeAmount($exchangeAmount)
    {
        $this->apiParas['exchangeAmount'] = $exchangeAmount;

        return $this;
    }

    public function getSystemSource()
    {
        return $this->apiParas['systemSource'];
    }

    public function setSystemSource($systemSource)
    {
        $this->apiParas['systemSource'] = $systemSource;

        return $this;
    }

    public function getExchangeRate()
    {
        return $this->apiParas['exchangeRate'];
    }

    public function setExchangeRate($exchangeRate)
    {
        $this->apiParas['exchangeRate'] = $exchangeRate;

        return $this;
    }

    public function getSystemSourceName()
    {
        return $this->apiParas['systemSourceName'];
    }

    public function setSystemSourceName($systemSourceName)
    {
        $this->apiParas['systemSourceName'] = $systemSourceName;

        return $this;
    }

    public function getNwDeptCode()
    {
        return $this->apiParas['nwDeptCode'];
    }

    public function setNwDeptCode($nwDeptCode)
    {
        $this->apiParas['nwDeptCode'] = $nwDeptCode;

        return $this;
    }

    public function getSkuId()
    {
        return $this->apiParas['skuId'];
    }

    public function setSkuId($skuId)
    {
        $this->apiParas['skuId'] = $skuId;

        return $this;
    }

    public function getLineDocTypeName()
    {
        return $this->apiParas['lineDocTypeName'];
    }

    public function setLineDocTypeName($lineDocTypeName)
    {
        $this->apiParas['lineDocTypeName'] = $lineDocTypeName;

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

    public function getCostNo()
    {
        return $this->apiParas['costNo'];
    }

    public function setCostNo($costNo)
    {
        $this->apiParas['costNo'] = $costNo;

        return $this;
    }

    public function getAttribute9()
    {
        return $this->apiParas['attribute9'];
    }

    public function setAttribute9($attribute9)
    {
        $this->apiParas['attribute9'] = $attribute9;

        return $this;
    }

    public function getTotalAmount()
    {
        return $this->apiParas['totalAmount'];
    }

    public function setTotalAmount($totalAmount)
    {
        $this->apiParas['totalAmount'] = $totalAmount;

        return $this;
    }

    public function getTaxRate()
    {
        return $this->apiParas['taxRate'];
    }

    public function setTaxRate($taxRate)
    {
        $this->apiParas['taxRate'] = $taxRate;

        return $this;
    }

    public function getAttribute8()
    {
        return $this->apiParas['attribute8'];
    }

    public function setAttribute8($attribute8)
    {
        $this->apiParas['attribute8'] = $attribute8;

        return $this;
    }

    public function getAttribute5()
    {
        return $this->apiParas['attribute5'];
    }

    public function setAttribute5($attribute5)
    {
        $this->apiParas['attribute5'] = $attribute5;

        return $this;
    }

    public function getAttribute4()
    {
        return $this->apiParas['attribute4'];
    }

    public function setAttribute4($attribute4)
    {
        $this->apiParas['attribute4'] = $attribute4;

        return $this;
    }

    public function getAttribute7()
    {
        return $this->apiParas['attribute7'];
    }

    public function setAttribute7($attribute7)
    {
        $this->apiParas['attribute7'] = $attribute7;

        return $this;
    }

    public function getBusinessLine()
    {
        return $this->apiParas['businessLine'];
    }

    public function setBusinessLine($businessLine)
    {
        $this->apiParas['businessLine'] = $businessLine;

        return $this;
    }

    public function getAttribute6()
    {
        return $this->apiParas['attribute6'];
    }

    public function setAttribute6($attribute6)
    {
        $this->apiParas['attribute6'] = $attribute6;

        return $this;
    }

    public function getYtSrcSystem()
    {
        return $this->apiParas['ytSrcSystem'];
    }

    public function setYtSrcSystem($ytSrcSystem)
    {
        $this->apiParas['ytSrcSystem'] = $ytSrcSystem;

        return $this;
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

    public function getAttribute14()
    {
        return $this->apiParas['attribute14'];
    }

    public function setAttribute14($attribute14)
    {
        $this->apiParas['attribute14'] = $attribute14;

        return $this;
    }

    public function getAttribute13()
    {
        return $this->apiParas['attribute13'];
    }

    public function setAttribute13($attribute13)
    {
        $this->apiParas['attribute13'] = $attribute13;

        return $this;
    }

    public function getAttribute3()
    {
        return $this->apiParas['attribute3'];
    }

    public function setAttribute3($attribute3)
    {
        $this->apiParas['attribute3'] = $attribute3;

        return $this;
    }

    public function getAttribute12()
    {
        return $this->apiParas['attribute12'];
    }

    public function setAttribute12($attribute12)
    {
        $this->apiParas['attribute12'] = $attribute12;

        return $this;
    }

    public function getAttribute2()
    {
        return $this->apiParas['attribute2'];
    }

    public function setAttribute2($attribute2)
    {
        $this->apiParas['attribute2'] = $attribute2;

        return $this;
    }

    public function getAttribute11()
    {
        return $this->apiParas['attribute11'];
    }

    public function setAttribute11($attribute11)
    {
        $this->apiParas['attribute11'] = $attribute11;

        return $this;
    }

    public function getRegion()
    {
        return $this->apiParas['region'];
    }

    public function setRegion($region)
    {
        $this->apiParas['region'] = $region;

        return $this;
    }

    public function getAttribute10()
    {
        return $this->apiParas['attribute10'];
    }

    public function setAttribute10($attribute10)
    {
        $this->apiParas['attribute10'] = $attribute10;

        return $this;
    }

    public function getDeptCode()
    {
        return $this->apiParas['deptCode'];
    }

    public function setDeptCode($deptCode)
    {
        $this->apiParas['deptCode'] = $deptCode;

        return $this;
    }

    public function getVendorType()
    {
        return $this->apiParas['vendorType'];
    }

    public function setVendorType($vendorType)
    {
        $this->apiParas['vendorType'] = $vendorType;

        return $this;
    }

    public function getPreId()
    {
        return $this->apiParas['preId'];
    }

    public function setPreId($preId)
    {
        $this->apiParas['preId'] = $preId;

        return $this;
    }

    public function getCreationTime()
    {
        return $this->apiParas['creationTime'];
    }

    public function setCreationTime($creationTime)
    {
        $this->apiParas['creationTime'] = $creationTime;

        return $this;
    }

    public function getAttribute15()
    {
        return $this->apiParas['attribute15'];
    }

    public function setAttribute15($attribute15)
    {
        $this->apiParas['attribute15'] = $attribute15;

        return $this;
    }

    public function getOrgId()
    {
        return $this->apiParas['orgId'];
    }

    public function setOrgId($orgId)
    {
        $this->apiParas['orgId'] = $orgId;

        return $this;
    }

    public function getNwOrgId()
    {
        return $this->apiParas['nwOrgId'];
    }

    public function setNwOrgId($nwOrgId)
    {
        $this->apiParas['nwOrgId'] = $nwOrgId;

        return $this;
    }

    public function getLastUpdatedTime()
    {
        return $this->apiParas['lastUpdatedTime'];
    }

    public function setLastUpdatedTime($lastUpdatedTime)
    {
        $this->apiParas['lastUpdatedTime'] = $lastUpdatedTime;

        return $this;
    }

    public function getDirection()
    {
        return $this->apiParas['direction'];
    }

    public function setDirection($direction)
    {
        $this->apiParas['direction'] = $direction;

        return $this;
    }

    public function getAppliedDate()
    {
        return $this->apiParas['appliedDate'];
    }

    public function setAppliedDate($appliedDate)
    {
        $this->apiParas['appliedDate'] = $appliedDate;

        return $this;
    }

    public function getTransactionTypeName()
    {
        return $this->apiParas['transactionTypeName'];
    }

    public function setTransactionTypeName($transactionTypeName)
    {
        $this->apiParas['transactionTypeName'] = $transactionTypeName;

        return $this;
    }

    public function getPreDocNum()
    {
        return $this->apiParas['preDocNum'];
    }

    public function setPreDocNum($preDocNum)
    {
        $this->apiParas['preDocNum'] = $preDocNum;

        return $this;
    }

    public function getSetStatus()
    {
        return $this->apiParas['setStatus'];
    }

    public function setSetStatus($setStatus)
    {
        $this->apiParas['setStatus'] = $setStatus;

        return $this;
    }

    public function getOrderTypeName()
    {
        return $this->apiParas['orderTypeName'];
    }

    public function setOrderTypeName($orderTypeName)
    {
        $this->apiParas['orderTypeName'] = $orderTypeName;

        return $this;
    }

    public function getSettlemetType()
    {
        return $this->apiParas['settlemetType'];
    }

    public function setSettlemetType($settlemetType)
    {
        $this->apiParas['settlemetType'] = $settlemetType;

        return $this;
    }

    public function getTransactionType()
    {
        return $this->apiParas['transactionType'];
    }

    public function setTransactionType($transactionType)
    {
        $this->apiParas['transactionType'] = $transactionType;

        return $this;
    }

    public function getExchangeCurrency()
    {
        return $this->apiParas['exchangeCurrency'];
    }

    public function setExchangeCurrency($exchangeCurrency)
    {
        $this->apiParas['exchangeCurrency'] = $exchangeCurrency;

        return $this;
    }

    public function getCategory()
    {
        return $this->apiParas['category'];
    }

    public function setCategory($category)
    {
        $this->apiParas['category'] = $category;

        return $this;
    }

    public function getCurrencyCode()
    {
        return $this->apiParas['currencyCode'];
    }

    public function setCurrencyCode($currencyCode)
    {
        $this->apiParas['currencyCode'] = $currencyCode;

        return $this;
    }
}
