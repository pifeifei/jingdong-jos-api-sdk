<?php

namespace ACES\Request;


class EclpRtwAddRtwOrderRequest
{
    private $apiParas = array();
    private $version;
    private $eclpSoNo;
    private $eclpRtwNo;
    private $isvRtwNum;
    private $warehouseNo;
    private $logicParam;
    private $reson;
    private $orderType;
    private $packageNo;
    private $isvSoNo;
    private $orderMark;
    private $shipperName;
    private $ownerNo;
    private $orderInType;
    private $receiveLevel;
    private $sellerRemark;
    private $salesMan;
    private $salesBillingStaff;
    private $drugElectronicSupervisionCode;
    private $registerOrgNo;
    private $registerOrgName;
    private $customerName;
    private $receivePriority;
    private $sellerRtwType;
    private $sellerRtwTypeName;
    private $salesPlatformName;
    private $spSoNo;
    private $shopName;
    private $workOrderNo;
    private $senderName;
    private $senderTelPhone;
    private $senderMobilePhone;
    private $customerId;
    private $customField;
    private $salesPlatformNo;
    private $isvGoodsNo;
    private $planQty;
    private $goodsLevel;
    private $productionDate;
    private $packageBatchNo;
    private $eclpOutOrderNo;
    private $sellerOutOrderNo;
    private $unitPrice;
    private $money;
    private $mediumPackage;
    private $bigPackage;
    private $orderLine;
    private $batAttrListJson;
    private $deptGoodsNo;
    private $planRtwReasonNo;
    private $planRtwReasonDesc;
    private $reserve1;

    public function getApiMethodName()
    {
        return "jingdong.eclp.rtw.addRtwOrder";
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

    public function getEclpSoNo()
    {
        return $this->eclpSoNo;
    }

    public function setEclpSoNo($eclpSoNo)
    {
        $this->eclpSoNo = $eclpSoNo;
        $this->apiParas["eclpSoNo"] = $eclpSoNo;
    }

    public function getEclpRtwNo()
    {
        return $this->eclpRtwNo;
    }

    public function setEclpRtwNo($eclpRtwNo)
    {
        $this->eclpRtwNo = $eclpRtwNo;
        $this->apiParas["eclpRtwNo"] = $eclpRtwNo;
    }

    public function getIsvRtwNum()
    {
        return $this->isvRtwNum;
    }

    public function setIsvRtwNum($isvRtwNum)
    {
        $this->isvRtwNum = $isvRtwNum;
        $this->apiParas["isvRtwNum"] = $isvRtwNum;
    }

    public function getWarehouseNo()
    {
        return $this->warehouseNo;
    }

    public function setWarehouseNo($warehouseNo)
    {
        $this->warehouseNo = $warehouseNo;
        $this->apiParas["warehouseNo"] = $warehouseNo;
    }

    public function getLogicParam()
    {
        return $this->logicParam;
    }

    public function setLogicParam($logicParam)
    {
        $this->logicParam = $logicParam;
        $this->apiParas["logicParam"] = $logicParam;
    }

    public function getReson()
    {
        return $this->reson;
    }

    public function setReson($reson)
    {
        $this->reson = $reson;
        $this->apiParas["reson"] = $reson;
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

    public function getPackageNo()
    {
        return $this->packageNo;
    }

    public function setPackageNo($packageNo)
    {
        $this->packageNo = $packageNo;
        $this->apiParas["packageNo"] = $packageNo;
    }

    public function getIsvSoNo()
    {
        return $this->isvSoNo;
    }

    public function setIsvSoNo($isvSoNo)
    {
        $this->isvSoNo = $isvSoNo;
        $this->apiParas["isvSoNo"] = $isvSoNo;
    }

    public function getOrderMark()
    {
        return $this->orderMark;
    }

    public function setOrderMark($orderMark)
    {
        $this->orderMark = $orderMark;
        $this->apiParas["orderMark"] = $orderMark;
    }

    public function getShipperName()
    {
        return $this->shipperName;
    }

    public function setShipperName($shipperName)
    {
        $this->shipperName = $shipperName;
        $this->apiParas["shipperName"] = $shipperName;
    }

    public function getOwnerNo()
    {
        return $this->ownerNo;
    }

    public function setOwnerNo($ownerNo)
    {
        $this->ownerNo = $ownerNo;
        $this->apiParas["ownerNo"] = $ownerNo;
    }

    public function getOrderInType()
    {
        return $this->orderInType;
    }

    public function setOrderInType($orderInType)
    {
        $this->orderInType = $orderInType;
        $this->apiParas["orderInType"] = $orderInType;
    }

    public function getReceiveLevel()
    {
        return $this->receiveLevel;
    }

    public function setReceiveLevel($receiveLevel)
    {
        $this->receiveLevel = $receiveLevel;
        $this->apiParas["receiveLevel"] = $receiveLevel;
    }

    public function getSellerRemark()
    {
        return $this->sellerRemark;
    }

    public function setSellerRemark($sellerRemark)
    {
        $this->sellerRemark = $sellerRemark;
        $this->apiParas["sellerRemark"] = $sellerRemark;
    }

    public function getSalesMan()
    {
        return $this->salesMan;
    }

    public function setSalesMan($salesMan)
    {
        $this->salesMan = $salesMan;
        $this->apiParas["salesMan"] = $salesMan;
    }

    public function getSalesBillingStaff()
    {
        return $this->salesBillingStaff;
    }

    public function setSalesBillingStaff($salesBillingStaff)
    {
        $this->salesBillingStaff = $salesBillingStaff;
        $this->apiParas["salesBillingStaff"] = $salesBillingStaff;
    }

    public function getDrugElectronicSupervisionCode()
    {
        return $this->drugElectronicSupervisionCode;
    }

    public function setDrugElectronicSupervisionCode($drugElectronicSupervisionCode)
    {
        $this->drugElectronicSupervisionCode = $drugElectronicSupervisionCode;
        $this->apiParas["drugElectronicSupervisionCode"] = $drugElectronicSupervisionCode;
    }

    public function getRegisterOrgNo()
    {
        return $this->registerOrgNo;
    }

    public function setRegisterOrgNo($registerOrgNo)
    {
        $this->registerOrgNo = $registerOrgNo;
        $this->apiParas["registerOrgNo"] = $registerOrgNo;
    }

    public function getRegisterOrgName()
    {
        return $this->registerOrgName;
    }

    public function setRegisterOrgName($registerOrgName)
    {
        $this->registerOrgName = $registerOrgName;
        $this->apiParas["registerOrgName"] = $registerOrgName;
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

    public function getReceivePriority()
    {
        return $this->receivePriority;
    }

    public function setReceivePriority($receivePriority)
    {
        $this->receivePriority = $receivePriority;
        $this->apiParas["receivePriority"] = $receivePriority;
    }

    public function getSellerRtwType()
    {
        return $this->sellerRtwType;
    }

    public function setSellerRtwType($sellerRtwType)
    {
        $this->sellerRtwType = $sellerRtwType;
        $this->apiParas["sellerRtwType"] = $sellerRtwType;
    }

    public function getSellerRtwTypeName()
    {
        return $this->sellerRtwTypeName;
    }

    public function setSellerRtwTypeName($sellerRtwTypeName)
    {
        $this->sellerRtwTypeName = $sellerRtwTypeName;
        $this->apiParas["sellerRtwTypeName"] = $sellerRtwTypeName;
    }

    public function getSalesPlatformName()
    {
        return $this->salesPlatformName;
    }

    public function setSalesPlatformName($salesPlatformName)
    {
        $this->salesPlatformName = $salesPlatformName;
        $this->apiParas["salesPlatformName"] = $salesPlatformName;
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

    public function getShopName()
    {
        return $this->shopName;
    }

    public function setShopName($shopName)
    {
        $this->shopName = $shopName;
        $this->apiParas["shopName"] = $shopName;
    }

    public function getWorkOrderNo()
    {
        return $this->workOrderNo;
    }

    public function setWorkOrderNo($workOrderNo)
    {
        $this->workOrderNo = $workOrderNo;
        $this->apiParas["workOrderNo"] = $workOrderNo;
    }

    public function getSenderName()
    {
        return $this->senderName;
    }

    public function setSenderName($senderName)
    {
        $this->senderName = $senderName;
        $this->apiParas["senderName"] = $senderName;
    }

    public function getSenderTelPhone()
    {
        return $this->senderTelPhone;
    }

    public function setSenderTelPhone($senderTelPhone)
    {
        $this->senderTelPhone = $senderTelPhone;
        $this->apiParas["senderTelPhone"] = $senderTelPhone;
    }

    public function getSenderMobilePhone()
    {
        return $this->senderMobilePhone;
    }

    public function setSenderMobilePhone($senderMobilePhone)
    {
        $this->senderMobilePhone = $senderMobilePhone;
        $this->apiParas["senderMobilePhone"] = $senderMobilePhone;
    }

    public function getCustomerId()
    {
        return $this->customerId;
    }

    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;
        $this->apiParas["customerId"] = $customerId;
    }

    public function getCustomField()
    {
        return $this->customField;
    }

    public function setCustomField($customField)
    {
        $this->customField = $customField;
        $this->apiParas["customField"] = $customField;
    }

    public function getSalesPlatformNo()
    {
        return $this->salesPlatformNo;
    }

    public function setSalesPlatformNo($salesPlatformNo)
    {
        $this->salesPlatformNo = $salesPlatformNo;
        $this->apiParas["salesPlatformNo"] = $salesPlatformNo;
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

    public function getPlanQty()
    {
        return $this->planQty;
    }

    public function setPlanQty($planQty)
    {
        $this->planQty = $planQty;
        $this->apiParas["planQty"] = $planQty;
    }

    public function getGoodsLevel()
    {
        return $this->goodsLevel;
    }

    public function setGoodsLevel($goodsLevel)
    {
        $this->goodsLevel = $goodsLevel;
        $this->apiParas["goodsLevel"] = $goodsLevel;
    }

    public function getProductionDate()
    {
        return $this->productionDate;
    }

    public function setProductionDate($productionDate)
    {
        $this->productionDate = $productionDate;
        $this->apiParas["productionDate"] = $productionDate;
    }

    public function getPackageBatchNo()
    {
        return $this->packageBatchNo;
    }

    public function setPackageBatchNo($packageBatchNo)
    {
        $this->packageBatchNo = $packageBatchNo;
        $this->apiParas["packageBatchNo"] = $packageBatchNo;
    }

    public function getEclpOutOrderNo()
    {
        return $this->eclpOutOrderNo;
    }

    public function setEclpOutOrderNo($eclpOutOrderNo)
    {
        $this->eclpOutOrderNo = $eclpOutOrderNo;
        $this->apiParas["eclpOutOrderNo"] = $eclpOutOrderNo;
    }

    public function getSellerOutOrderNo()
    {
        return $this->sellerOutOrderNo;
    }

    public function setSellerOutOrderNo($sellerOutOrderNo)
    {
        $this->sellerOutOrderNo = $sellerOutOrderNo;
        $this->apiParas["sellerOutOrderNo"] = $sellerOutOrderNo;
    }

    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    public function setUnitPrice($unitPrice)
    {
        $this->unitPrice = $unitPrice;
        $this->apiParas["unitPrice"] = $unitPrice;
    }

    public function getMoney()
    {
        return $this->money;
    }

    public function setMoney($money)
    {
        $this->money = $money;
        $this->apiParas["money"] = $money;
    }

    public function getMediumPackage()
    {
        return $this->mediumPackage;
    }

    public function setMediumPackage($mediumPackage)
    {
        $this->mediumPackage = $mediumPackage;
        $this->apiParas["mediumPackage"] = $mediumPackage;
    }

    public function getBigPackage()
    {
        return $this->bigPackage;
    }

    public function setBigPackage($bigPackage)
    {
        $this->bigPackage = $bigPackage;
        $this->apiParas["bigPackage"] = $bigPackage;
    }

    public function getOrderLine()
    {
        return $this->orderLine;
    }

    public function setOrderLine($orderLine)
    {
        $this->orderLine = $orderLine;
        $this->apiParas["orderLine"] = $orderLine;
    }

    public function getBatAttrListJson()
    {
        return $this->batAttrListJson;
    }

    public function setBatAttrListJson($batAttrListJson)
    {
        $this->batAttrListJson = $batAttrListJson;
        $this->apiParas["batAttrListJson"] = $batAttrListJson;
    }

    public function getDeptGoodsNo()
    {
        return $this->deptGoodsNo;
    }

    public function setDeptGoodsNo($deptGoodsNo)
    {
        $this->deptGoodsNo = $deptGoodsNo;
        $this->apiParas["deptGoodsNo"] = $deptGoodsNo;
    }

    public function getPlanRtwReasonNo()
    {
        return $this->planRtwReasonNo;
    }

    public function setPlanRtwReasonNo($planRtwReasonNo)
    {
        $this->planRtwReasonNo = $planRtwReasonNo;
        $this->apiParas["planRtwReasonNo"] = $planRtwReasonNo;
    }

    public function getPlanRtwReasonDesc()
    {
        return $this->planRtwReasonDesc;
    }

    public function setPlanRtwReasonDesc($planRtwReasonDesc)
    {
        $this->planRtwReasonDesc = $planRtwReasonDesc;
        $this->apiParas["planRtwReasonDesc"] = $planRtwReasonDesc;
    }

    public function getReserve1()
    {
        return $this->reserve1;
    }

    public function setReserve1($reserve1)
    {
        $this->reserve1 = $reserve1;
        $this->apiParas["reserve1"] = $reserve1;
    }
}
