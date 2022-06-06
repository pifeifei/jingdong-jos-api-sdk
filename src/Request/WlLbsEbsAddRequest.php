<?php

namespace ACES\Request;


class WlLbsEbsAddRequest
{
    private $apiParas = array();
    private $version;
    private $orderType;
    private $orderId;
    private $vendorId;
    private $project;
    private $exchangeAmount;
    private $systemSource;
    private $exchangeRate;
    private $systemSourceName;
    private $nwDeptCode;
    private $skuId;
    private $lineDocTypeName;
    private $vendorName;
    private $costNo;
    private $attribute9;
    private $totalAmount;
    private $taxRate;
    private $attribute8;
    private $attribute5;
    private $attribute4;
    private $attribute7;
    private $businessLine;
    private $attribute6;
    private $ytSrcSystem;
    private $attribute1;
    private $attribute14;
    private $attribute13;
    private $attribute3;
    private $attribute12;
    private $attribute2;
    private $attribute11;
    private $region;
    private $attribute10;
    private $deptCode;
    private $vendorType;
    private $preId;
    private $creationTime;
    private $attribute15;
    private $orgId;
    private $nwOrgId;
    private $lastUpdatedTime;
    private $direction;
    private $appliedDate;
    private $transactionTypeName;
    private $preDocNum;
    private $setStatus;
    private $orderTypeName;
    private $settlemetType;
    private $transactionType;
    private $exchangeCurrency;
    private $category;
    private $currencyCode;

    public function getApiMethodName()
    {
        return "jingdong.wl.lbs.ebs.add";
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

    public function getOrderType()
    {
        return $this->orderType;
    }

    public function setOrderType($orderType)
    {
        $this->orderType = $orderType;
        $this->apiParas["orderType"] = $orderType;
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

    public function getVendorId()
    {
        return $this->vendorId;
    }

    public function setVendorId($vendorId)
    {
        $this->vendorId = $vendorId;
        $this->apiParas["vendorId"] = $vendorId;
    }

    public function getProject()
    {
        return $this->project;
    }

    public function setProject($project)
    {
        $this->project = $project;
        $this->apiParas["project"] = $project;
    }

    public function getExchangeAmount()
    {
        return $this->exchangeAmount;
    }

    public function setExchangeAmount($exchangeAmount)
    {
        $this->exchangeAmount = $exchangeAmount;
        $this->apiParas["exchangeAmount"] = $exchangeAmount;
    }

    public function getSystemSource()
    {
        return $this->systemSource;
    }

    public function setSystemSource($systemSource)
    {
        $this->systemSource = $systemSource;
        $this->apiParas["systemSource"] = $systemSource;
    }

    public function getExchangeRate()
    {
        return $this->exchangeRate;
    }

    public function setExchangeRate($exchangeRate)
    {
        $this->exchangeRate = $exchangeRate;
        $this->apiParas["exchangeRate"] = $exchangeRate;
    }

    public function getSystemSourceName()
    {
        return $this->systemSourceName;
    }

    public function setSystemSourceName($systemSourceName)
    {
        $this->systemSourceName = $systemSourceName;
        $this->apiParas["systemSourceName"] = $systemSourceName;
    }

    public function getNwDeptCode()
    {
        return $this->nwDeptCode;
    }

    public function setNwDeptCode($nwDeptCode)
    {
        $this->nwDeptCode = $nwDeptCode;
        $this->apiParas["nwDeptCode"] = $nwDeptCode;
    }

    public function getSkuId()
    {
        return $this->skuId;
    }

    public function setSkuId($skuId)
    {
        $this->skuId = $skuId;
        $this->apiParas["skuId"] = $skuId;
    }

    public function getLineDocTypeName()
    {
        return $this->lineDocTypeName;
    }

    public function setLineDocTypeName($lineDocTypeName)
    {
        $this->lineDocTypeName = $lineDocTypeName;
        $this->apiParas["lineDocTypeName"] = $lineDocTypeName;
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

    public function getCostNo()
    {
        return $this->costNo;
    }

    public function setCostNo($costNo)
    {
        $this->costNo = $costNo;
        $this->apiParas["costNo"] = $costNo;
    }

    public function getAttribute9()
    {
        return $this->attribute9;
    }

    public function setAttribute9($attribute9)
    {
        $this->attribute9 = $attribute9;
        $this->apiParas["attribute9"] = $attribute9;
    }

    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    public function setTotalAmount($totalAmount)
    {
        $this->totalAmount = $totalAmount;
        $this->apiParas["totalAmount"] = $totalAmount;
    }

    public function getTaxRate()
    {
        return $this->taxRate;
    }

    public function setTaxRate($taxRate)
    {
        $this->taxRate = $taxRate;
        $this->apiParas["taxRate"] = $taxRate;
    }

    public function getAttribute8()
    {
        return $this->attribute8;
    }

    public function setAttribute8($attribute8)
    {
        $this->attribute8 = $attribute8;
        $this->apiParas["attribute8"] = $attribute8;
    }

    public function getAttribute5()
    {
        return $this->attribute5;
    }

    public function setAttribute5($attribute5)
    {
        $this->attribute5 = $attribute5;
        $this->apiParas["attribute5"] = $attribute5;
    }

    public function getAttribute4()
    {
        return $this->attribute4;
    }

    public function setAttribute4($attribute4)
    {
        $this->attribute4 = $attribute4;
        $this->apiParas["attribute4"] = $attribute4;
    }

    public function getAttribute7()
    {
        return $this->attribute7;
    }

    public function setAttribute7($attribute7)
    {
        $this->attribute7 = $attribute7;
        $this->apiParas["attribute7"] = $attribute7;
    }

    public function getBusinessLine()
    {
        return $this->businessLine;
    }

    public function setBusinessLine($businessLine)
    {
        $this->businessLine = $businessLine;
        $this->apiParas["businessLine"] = $businessLine;
    }

    public function getAttribute6()
    {
        return $this->attribute6;
    }

    public function setAttribute6($attribute6)
    {
        $this->attribute6 = $attribute6;
        $this->apiParas["attribute6"] = $attribute6;
    }

    public function getYtSrcSystem()
    {
        return $this->ytSrcSystem;
    }

    public function setYtSrcSystem($ytSrcSystem)
    {
        $this->ytSrcSystem = $ytSrcSystem;
        $this->apiParas["ytSrcSystem"] = $ytSrcSystem;
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

    public function getAttribute14()
    {
        return $this->attribute14;
    }

    public function setAttribute14($attribute14)
    {
        $this->attribute14 = $attribute14;
        $this->apiParas["attribute14"] = $attribute14;
    }

    public function getAttribute13()
    {
        return $this->attribute13;
    }

    public function setAttribute13($attribute13)
    {
        $this->attribute13 = $attribute13;
        $this->apiParas["attribute13"] = $attribute13;
    }

    public function getAttribute3()
    {
        return $this->attribute3;
    }

    public function setAttribute3($attribute3)
    {
        $this->attribute3 = $attribute3;
        $this->apiParas["attribute3"] = $attribute3;
    }

    public function getAttribute12()
    {
        return $this->attribute12;
    }

    public function setAttribute12($attribute12)
    {
        $this->attribute12 = $attribute12;
        $this->apiParas["attribute12"] = $attribute12;
    }

    public function getAttribute2()
    {
        return $this->attribute2;
    }

    public function setAttribute2($attribute2)
    {
        $this->attribute2 = $attribute2;
        $this->apiParas["attribute2"] = $attribute2;
    }

    public function getAttribute11()
    {
        return $this->attribute11;
    }

    public function setAttribute11($attribute11)
    {
        $this->attribute11 = $attribute11;
        $this->apiParas["attribute11"] = $attribute11;
    }

    public function getRegion()
    {
        return $this->region;
    }

    public function setRegion($region)
    {
        $this->region = $region;
        $this->apiParas["region"] = $region;
    }

    public function getAttribute10()
    {
        return $this->attribute10;
    }

    public function setAttribute10($attribute10)
    {
        $this->attribute10 = $attribute10;
        $this->apiParas["attribute10"] = $attribute10;
    }

    public function getDeptCode()
    {
        return $this->deptCode;
    }

    public function setDeptCode($deptCode)
    {
        $this->deptCode = $deptCode;
        $this->apiParas["deptCode"] = $deptCode;
    }

    public function getVendorType()
    {
        return $this->vendorType;
    }

    public function setVendorType($vendorType)
    {
        $this->vendorType = $vendorType;
        $this->apiParas["vendorType"] = $vendorType;
    }

    public function getPreId()
    {
        return $this->preId;
    }

    public function setPreId($preId)
    {
        $this->preId = $preId;
        $this->apiParas["preId"] = $preId;
    }

    public function getCreationTime()
    {
        return $this->creationTime;
    }

    public function setCreationTime($creationTime)
    {
        $this->creationTime = $creationTime;
        $this->apiParas["creationTime"] = $creationTime;
    }

    public function getAttribute15()
    {
        return $this->attribute15;
    }

    public function setAttribute15($attribute15)
    {
        $this->attribute15 = $attribute15;
        $this->apiParas["attribute15"] = $attribute15;
    }

    public function getOrgId()
    {
        return $this->orgId;
    }

    public function setOrgId($orgId)
    {
        $this->orgId = $orgId;
        $this->apiParas["orgId"] = $orgId;
    }

    public function getNwOrgId()
    {
        return $this->nwOrgId;
    }

    public function setNwOrgId($nwOrgId)
    {
        $this->nwOrgId = $nwOrgId;
        $this->apiParas["nwOrgId"] = $nwOrgId;
    }

    public function getLastUpdatedTime()
    {
        return $this->lastUpdatedTime;
    }

    public function setLastUpdatedTime($lastUpdatedTime)
    {
        $this->lastUpdatedTime = $lastUpdatedTime;
        $this->apiParas["lastUpdatedTime"] = $lastUpdatedTime;
    }

    public function getDirection()
    {
        return $this->direction;
    }

    public function setDirection($direction)
    {
        $this->direction = $direction;
        $this->apiParas["direction"] = $direction;
    }

    public function getAppliedDate()
    {
        return $this->appliedDate;
    }

    public function setAppliedDate($appliedDate)
    {
        $this->appliedDate = $appliedDate;
        $this->apiParas["appliedDate"] = $appliedDate;
    }

    public function getTransactionTypeName()
    {
        return $this->transactionTypeName;
    }

    public function setTransactionTypeName($transactionTypeName)
    {
        $this->transactionTypeName = $transactionTypeName;
        $this->apiParas["transactionTypeName"] = $transactionTypeName;
    }

    public function getPreDocNum()
    {
        return $this->preDocNum;
    }

    public function setPreDocNum($preDocNum)
    {
        $this->preDocNum = $preDocNum;
        $this->apiParas["preDocNum"] = $preDocNum;
    }

    public function getSetStatus()
    {
        return $this->setStatus;
    }

    public function setSetStatus($setStatus)
    {
        $this->setStatus = $setStatus;
        $this->apiParas["setStatus"] = $setStatus;
    }

    public function getOrderTypeName()
    {
        return $this->orderTypeName;
    }

    public function setOrderTypeName($orderTypeName)
    {
        $this->orderTypeName = $orderTypeName;
        $this->apiParas["orderTypeName"] = $orderTypeName;
    }

    public function getSettlemetType()
    {
        return $this->settlemetType;
    }

    public function setSettlemetType($settlemetType)
    {
        $this->settlemetType = $settlemetType;
        $this->apiParas["settlemetType"] = $settlemetType;
    }

    public function getTransactionType()
    {
        return $this->transactionType;
    }

    public function setTransactionType($transactionType)
    {
        $this->transactionType = $transactionType;
        $this->apiParas["transactionType"] = $transactionType;
    }

    public function getExchangeCurrency()
    {
        return $this->exchangeCurrency;
    }

    public function setExchangeCurrency($exchangeCurrency)
    {
        $this->exchangeCurrency = $exchangeCurrency;
        $this->apiParas["exchangeCurrency"] = $exchangeCurrency;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function setCategory($category)
    {
        $this->category = $category;
        $this->apiParas["category"] = $category;
    }

    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
        $this->apiParas["currencyCode"] = $currencyCode;
    }
}
