<?php

class WlLbsEbsAddRequest
{
    private $apiParas = array();

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

    private $version;

    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function getVersion()
    {
        return $this->version;
    }
                                                                                                                                    private $orderType;

    public function setOrderType($orderType)
    {
        $this->orderType = $orderType;
         $this->apiParas["orderType"] = $orderType;
    }

    public function getOrderType()
    {
        return $this->orderType;
    }

                                                        private $orderId;

    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
         $this->apiParas["orderId"] = $orderId;
    }

    public function getOrderId()
    {
        return $this->orderId;
    }

                                                        private $vendorId;

    public function setVendorId($vendorId)
    {
        $this->vendorId = $vendorId;
         $this->apiParas["vendorId"] = $vendorId;
    }

    public function getVendorId()
    {
        return $this->vendorId;
    }

                                                        private $project;

    public function setProject($project)
    {
        $this->project = $project;
         $this->apiParas["project"] = $project;
    }

    public function getProject()
    {
        return $this->project;
    }

                                                        private $exchangeAmount;

    public function setExchangeAmount($exchangeAmount)
    {
        $this->exchangeAmount = $exchangeAmount;
         $this->apiParas["exchangeAmount"] = $exchangeAmount;
    }

    public function getExchangeAmount()
    {
        return $this->exchangeAmount;
    }

                                                        private $systemSource;

    public function setSystemSource($systemSource)
    {
        $this->systemSource = $systemSource;
         $this->apiParas["systemSource"] = $systemSource;
    }

    public function getSystemSource()
    {
        return $this->systemSource;
    }

                                                        private $exchangeRate;

    public function setExchangeRate($exchangeRate)
    {
        $this->exchangeRate = $exchangeRate;
         $this->apiParas["exchangeRate"] = $exchangeRate;
    }

    public function getExchangeRate()
    {
        return $this->exchangeRate;
    }

                                                        private $systemSourceName;

    public function setSystemSourceName($systemSourceName)
    {
        $this->systemSourceName = $systemSourceName;
         $this->apiParas["systemSourceName"] = $systemSourceName;
    }

    public function getSystemSourceName()
    {
        return $this->systemSourceName;
    }

                                                        private $nwDeptCode;

    public function setNwDeptCode($nwDeptCode)
    {
        $this->nwDeptCode = $nwDeptCode;
         $this->apiParas["nwDeptCode"] = $nwDeptCode;
    }

    public function getNwDeptCode()
    {
        return $this->nwDeptCode;
    }

                                                        private $skuId;

    public function setSkuId($skuId)
    {
        $this->skuId = $skuId;
         $this->apiParas["skuId"] = $skuId;
    }

    public function getSkuId()
    {
        return $this->skuId;
    }

                                                        private $lineDocTypeName;

    public function setLineDocTypeName($lineDocTypeName)
    {
        $this->lineDocTypeName = $lineDocTypeName;
         $this->apiParas["lineDocTypeName"] = $lineDocTypeName;
    }

    public function getLineDocTypeName()
    {
        return $this->lineDocTypeName;
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

                                                        private $costNo;

    public function setCostNo($costNo)
    {
        $this->costNo = $costNo;
         $this->apiParas["costNo"] = $costNo;
    }

    public function getCostNo()
    {
        return $this->costNo;
    }

                                                        private $attribute9;

    public function setAttribute9($attribute9)
    {
        $this->attribute9 = $attribute9;
         $this->apiParas["attribute9"] = $attribute9;
    }

    public function getAttribute9()
    {
        return $this->attribute9;
    }

                                                        private $totalAmount;

    public function setTotalAmount($totalAmount)
    {
        $this->totalAmount = $totalAmount;
         $this->apiParas["totalAmount"] = $totalAmount;
    }

    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

                                                        private $taxRate;

    public function setTaxRate($taxRate)
    {
        $this->taxRate = $taxRate;
         $this->apiParas["taxRate"] = $taxRate;
    }

    public function getTaxRate()
    {
        return $this->taxRate;
    }

                                                        private $attribute8;

    public function setAttribute8($attribute8)
    {
        $this->attribute8 = $attribute8;
         $this->apiParas["attribute8"] = $attribute8;
    }

    public function getAttribute8()
    {
        return $this->attribute8;
    }

                                                        private $attribute5;

    public function setAttribute5($attribute5)
    {
        $this->attribute5 = $attribute5;
         $this->apiParas["attribute5"] = $attribute5;
    }

    public function getAttribute5()
    {
        return $this->attribute5;
    }

                                                        private $attribute4;

    public function setAttribute4($attribute4)
    {
        $this->attribute4 = $attribute4;
         $this->apiParas["attribute4"] = $attribute4;
    }

    public function getAttribute4()
    {
        return $this->attribute4;
    }

                                                        private $attribute7;

    public function setAttribute7($attribute7)
    {
        $this->attribute7 = $attribute7;
         $this->apiParas["attribute7"] = $attribute7;
    }

    public function getAttribute7()
    {
        return $this->attribute7;
    }

                                                        private $businessLine;

    public function setBusinessLine($businessLine)
    {
        $this->businessLine = $businessLine;
         $this->apiParas["businessLine"] = $businessLine;
    }

    public function getBusinessLine()
    {
        return $this->businessLine;
    }

                                                        private $attribute6;

    public function setAttribute6($attribute6)
    {
        $this->attribute6 = $attribute6;
         $this->apiParas["attribute6"] = $attribute6;
    }

    public function getAttribute6()
    {
        return $this->attribute6;
    }

                                                        private $ytSrcSystem;

    public function setYtSrcSystem($ytSrcSystem)
    {
        $this->ytSrcSystem = $ytSrcSystem;
         $this->apiParas["ytSrcSystem"] = $ytSrcSystem;
    }

    public function getYtSrcSystem()
    {
        return $this->ytSrcSystem;
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

                                                        private $attribute14;

    public function setAttribute14($attribute14)
    {
        $this->attribute14 = $attribute14;
         $this->apiParas["attribute14"] = $attribute14;
    }

    public function getAttribute14()
    {
        return $this->attribute14;
    }

                                                        private $attribute13;

    public function setAttribute13($attribute13)
    {
        $this->attribute13 = $attribute13;
         $this->apiParas["attribute13"] = $attribute13;
    }

    public function getAttribute13()
    {
        return $this->attribute13;
    }

                                                        private $attribute3;

    public function setAttribute3($attribute3)
    {
        $this->attribute3 = $attribute3;
         $this->apiParas["attribute3"] = $attribute3;
    }

    public function getAttribute3()
    {
        return $this->attribute3;
    }

                                                        private $attribute12;

    public function setAttribute12($attribute12)
    {
        $this->attribute12 = $attribute12;
         $this->apiParas["attribute12"] = $attribute12;
    }

    public function getAttribute12()
    {
        return $this->attribute12;
    }

                                                        private $attribute2;

    public function setAttribute2($attribute2)
    {
        $this->attribute2 = $attribute2;
         $this->apiParas["attribute2"] = $attribute2;
    }

    public function getAttribute2()
    {
        return $this->attribute2;
    }

                                                        private $attribute11;

    public function setAttribute11($attribute11)
    {
        $this->attribute11 = $attribute11;
         $this->apiParas["attribute11"] = $attribute11;
    }

    public function getAttribute11()
    {
        return $this->attribute11;
    }

                                                        private $region;

    public function setRegion($region)
    {
        $this->region = $region;
         $this->apiParas["region"] = $region;
    }

    public function getRegion()
    {
        return $this->region;
    }

                                                        private $attribute10;

    public function setAttribute10($attribute10)
    {
        $this->attribute10 = $attribute10;
         $this->apiParas["attribute10"] = $attribute10;
    }

    public function getAttribute10()
    {
        return $this->attribute10;
    }

                                                        private $deptCode;

    public function setDeptCode($deptCode)
    {
        $this->deptCode = $deptCode;
         $this->apiParas["deptCode"] = $deptCode;
    }

    public function getDeptCode()
    {
        return $this->deptCode;
    }

                                                        private $vendorType;

    public function setVendorType($vendorType)
    {
        $this->vendorType = $vendorType;
         $this->apiParas["vendorType"] = $vendorType;
    }

    public function getVendorType()
    {
        return $this->vendorType;
    }

                                                        private $preId;

    public function setPreId($preId)
    {
        $this->preId = $preId;
         $this->apiParas["preId"] = $preId;
    }

    public function getPreId()
    {
        return $this->preId;
    }

                                                        private $creationTime;

    public function setCreationTime($creationTime)
    {
        $this->creationTime = $creationTime;
         $this->apiParas["creationTime"] = $creationTime;
    }

    public function getCreationTime()
    {
        return $this->creationTime;
    }

                                                        private $attribute15;

    public function setAttribute15($attribute15)
    {
        $this->attribute15 = $attribute15;
         $this->apiParas["attribute15"] = $attribute15;
    }

    public function getAttribute15()
    {
        return $this->attribute15;
    }

                                                        private $orgId;

    public function setOrgId($orgId)
    {
        $this->orgId = $orgId;
         $this->apiParas["orgId"] = $orgId;
    }

    public function getOrgId()
    {
        return $this->orgId;
    }

                                                        private $nwOrgId;

    public function setNwOrgId($nwOrgId)
    {
        $this->nwOrgId = $nwOrgId;
         $this->apiParas["nwOrgId"] = $nwOrgId;
    }

    public function getNwOrgId()
    {
        return $this->nwOrgId;
    }

                                                        private $lastUpdatedTime;

    public function setLastUpdatedTime($lastUpdatedTime)
    {
        $this->lastUpdatedTime = $lastUpdatedTime;
         $this->apiParas["lastUpdatedTime"] = $lastUpdatedTime;
    }

    public function getLastUpdatedTime()
    {
        return $this->lastUpdatedTime;
    }

                                                        private $direction;

    public function setDirection($direction)
    {
        $this->direction = $direction;
         $this->apiParas["direction"] = $direction;
    }

    public function getDirection()
    {
        return $this->direction;
    }

                                                        private $appliedDate;

    public function setAppliedDate($appliedDate)
    {
        $this->appliedDate = $appliedDate;
         $this->apiParas["appliedDate"] = $appliedDate;
    }

    public function getAppliedDate()
    {
        return $this->appliedDate;
    }

                                                        private $transactionTypeName;

    public function setTransactionTypeName($transactionTypeName)
    {
        $this->transactionTypeName = $transactionTypeName;
         $this->apiParas["transactionTypeName"] = $transactionTypeName;
    }

    public function getTransactionTypeName()
    {
        return $this->transactionTypeName;
    }

                                                        private $preDocNum;

    public function setPreDocNum($preDocNum)
    {
        $this->preDocNum = $preDocNum;
         $this->apiParas["preDocNum"] = $preDocNum;
    }

    public function getPreDocNum()
    {
        return $this->preDocNum;
    }

                                                        private $setStatus;

    public function setSetStatus($setStatus)
    {
        $this->setStatus = $setStatus;
         $this->apiParas["setStatus"] = $setStatus;
    }

    public function getSetStatus()
    {
        return $this->setStatus;
    }

                                                        private $orderTypeName;

    public function setOrderTypeName($orderTypeName)
    {
        $this->orderTypeName = $orderTypeName;
         $this->apiParas["orderTypeName"] = $orderTypeName;
    }

    public function getOrderTypeName()
    {
        return $this->orderTypeName;
    }

                                                        private $settlemetType;

    public function setSettlemetType($settlemetType)
    {
        $this->settlemetType = $settlemetType;
         $this->apiParas["settlemetType"] = $settlemetType;
    }

    public function getSettlemetType()
    {
        return $this->settlemetType;
    }

                                                        private $transactionType;

    public function setTransactionType($transactionType)
    {
        $this->transactionType = $transactionType;
         $this->apiParas["transactionType"] = $transactionType;
    }

    public function getTransactionType()
    {
        return $this->transactionType;
    }

                                                        private $exchangeCurrency;

    public function setExchangeCurrency($exchangeCurrency)
    {
        $this->exchangeCurrency = $exchangeCurrency;
         $this->apiParas["exchangeCurrency"] = $exchangeCurrency;
    }

    public function getExchangeCurrency()
    {
        return $this->exchangeCurrency;
    }

                                                        private $category;

    public function setCategory($category)
    {
        $this->category = $category;
         $this->apiParas["category"] = $category;
    }

    public function getCategory()
    {
        return $this->category;
    }

                                                        private $currencyCode;

    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
         $this->apiParas["currencyCode"] = $currencyCode;
    }

    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }
}
