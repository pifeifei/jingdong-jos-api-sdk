<?php

namespace ACES\Request;

class EclpRtwAddRtwOrderRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.eclp.rtw.addRtwOrder';
    }

    public function check()
    {
    }

    public function getEclpSoNo()
    {
        return $this->apiParas['eclpSoNo'];
    }

    public function setEclpSoNo($eclpSoNo)
    {
        $this->apiParas['eclpSoNo'] = $eclpSoNo;

        return $this;
    }

    public function getEclpRtwNo()
    {
        return $this->apiParas['eclpRtwNo'];
    }

    public function setEclpRtwNo($eclpRtwNo)
    {
        $this->apiParas['eclpRtwNo'] = $eclpRtwNo;

        return $this;
    }

    public function getIsvRtwNum()
    {
        return $this->apiParas['isvRtwNum'];
    }

    public function setIsvRtwNum($isvRtwNum)
    {
        $this->apiParas['isvRtwNum'] = $isvRtwNum;

        return $this;
    }

    public function getWarehouseNo()
    {
        return $this->apiParas['warehouseNo'];
    }

    public function setWarehouseNo($warehouseNo)
    {
        $this->apiParas['warehouseNo'] = $warehouseNo;

        return $this;
    }

    public function getLogicParam()
    {
        return $this->apiParas['logicParam'];
    }

    public function setLogicParam($logicParam)
    {
        $this->apiParas['logicParam'] = $logicParam;

        return $this;
    }

    public function getReson()
    {
        return $this->apiParas['reson'];
    }

    public function setReson($reson)
    {
        $this->apiParas['reson'] = $reson;

        return $this;
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

    public function getPackageNo()
    {
        return $this->apiParas['packageNo'];
    }

    public function setPackageNo($packageNo)
    {
        $this->apiParas['packageNo'] = $packageNo;

        return $this;
    }

    public function getIsvSoNo()
    {
        return $this->apiParas['isvSoNo'];
    }

    public function setIsvSoNo($isvSoNo)
    {
        $this->apiParas['isvSoNo'] = $isvSoNo;

        return $this;
    }

    public function getOrderMark()
    {
        return $this->apiParas['orderMark'];
    }

    public function setOrderMark($orderMark)
    {
        $this->apiParas['orderMark'] = $orderMark;

        return $this;
    }

    public function getShipperName()
    {
        return $this->apiParas['shipperName'];
    }

    public function setShipperName($shipperName)
    {
        $this->apiParas['shipperName'] = $shipperName;

        return $this;
    }

    public function getOwnerNo()
    {
        return $this->apiParas['ownerNo'];
    }

    public function setOwnerNo($ownerNo)
    {
        $this->apiParas['ownerNo'] = $ownerNo;

        return $this;
    }

    public function getOrderInType()
    {
        return $this->apiParas['orderInType'];
    }

    public function setOrderInType($orderInType)
    {
        $this->apiParas['orderInType'] = $orderInType;

        return $this;
    }

    public function getReceiveLevel()
    {
        return $this->apiParas['receiveLevel'];
    }

    public function setReceiveLevel($receiveLevel)
    {
        $this->apiParas['receiveLevel'] = $receiveLevel;

        return $this;
    }

    public function getSellerRemark()
    {
        return $this->apiParas['sellerRemark'];
    }

    public function setSellerRemark($sellerRemark)
    {
        $this->apiParas['sellerRemark'] = $sellerRemark;

        return $this;
    }

    public function getSalesMan()
    {
        return $this->apiParas['salesMan'];
    }

    public function setSalesMan($salesMan)
    {
        $this->apiParas['salesMan'] = $salesMan;

        return $this;
    }

    public function getSalesBillingStaff()
    {
        return $this->apiParas['salesBillingStaff'];
    }

    public function setSalesBillingStaff($salesBillingStaff)
    {
        $this->apiParas['salesBillingStaff'] = $salesBillingStaff;

        return $this;
    }

    public function getDrugElectronicSupervisionCode()
    {
        return $this->apiParas['drugElectronicSupervisionCode'];
    }

    public function setDrugElectronicSupervisionCode($drugElectronicSupervisionCode)
    {
        $this->apiParas['drugElectronicSupervisionCode'] = $drugElectronicSupervisionCode;

        return $this;
    }

    public function getRegisterOrgNo()
    {
        return $this->apiParas['registerOrgNo'];
    }

    public function setRegisterOrgNo($registerOrgNo)
    {
        $this->apiParas['registerOrgNo'] = $registerOrgNo;

        return $this;
    }

    public function getRegisterOrgName()
    {
        return $this->apiParas['registerOrgName'];
    }

    public function setRegisterOrgName($registerOrgName)
    {
        $this->apiParas['registerOrgName'] = $registerOrgName;

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

    public function getReceivePriority()
    {
        return $this->apiParas['receivePriority'];
    }

    public function setReceivePriority($receivePriority)
    {
        $this->apiParas['receivePriority'] = $receivePriority;

        return $this;
    }

    public function getSellerRtwType()
    {
        return $this->apiParas['sellerRtwType'];
    }

    public function setSellerRtwType($sellerRtwType)
    {
        $this->apiParas['sellerRtwType'] = $sellerRtwType;

        return $this;
    }

    public function getSellerRtwTypeName()
    {
        return $this->apiParas['sellerRtwTypeName'];
    }

    public function setSellerRtwTypeName($sellerRtwTypeName)
    {
        $this->apiParas['sellerRtwTypeName'] = $sellerRtwTypeName;

        return $this;
    }

    public function getSalesPlatformName()
    {
        return $this->apiParas['salesPlatformName'];
    }

    public function setSalesPlatformName($salesPlatformName)
    {
        $this->apiParas['salesPlatformName'] = $salesPlatformName;

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

    public function getShopName()
    {
        return $this->apiParas['shopName'];
    }

    public function setShopName($shopName)
    {
        $this->apiParas['shopName'] = $shopName;

        return $this;
    }

    public function getWorkOrderNo()
    {
        return $this->apiParas['workOrderNo'];
    }

    public function setWorkOrderNo($workOrderNo)
    {
        $this->apiParas['workOrderNo'] = $workOrderNo;

        return $this;
    }

    public function getSenderName()
    {
        return $this->apiParas['senderName'];
    }

    public function setSenderName($senderName)
    {
        $this->apiParas['senderName'] = $senderName;

        return $this;
    }

    public function getSenderTelPhone()
    {
        return $this->apiParas['senderTelPhone'];
    }

    public function setSenderTelPhone($senderTelPhone)
    {
        $this->apiParas['senderTelPhone'] = $senderTelPhone;

        return $this;
    }

    public function getSenderMobilePhone()
    {
        return $this->apiParas['senderMobilePhone'];
    }

    public function setSenderMobilePhone($senderMobilePhone)
    {
        $this->apiParas['senderMobilePhone'] = $senderMobilePhone;

        return $this;
    }

    public function getCustomerId()
    {
        return $this->apiParas['customerId'];
    }

    public function setCustomerId($customerId)
    {
        $this->apiParas['customerId'] = $customerId;

        return $this;
    }

    public function getCustomField()
    {
        return $this->apiParas['customField'];
    }

    public function setCustomField($customField)
    {
        $this->apiParas['customField'] = $customField;

        return $this;
    }

    public function getSalesPlatformNo()
    {
        return $this->apiParas['salesPlatformNo'];
    }

    public function setSalesPlatformNo($salesPlatformNo)
    {
        $this->apiParas['salesPlatformNo'] = $salesPlatformNo;

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

    public function getPlanQty()
    {
        return $this->apiParas['planQty'];
    }

    public function setPlanQty($planQty)
    {
        $this->apiParas['planQty'] = $planQty;

        return $this;
    }

    public function getGoodsLevel()
    {
        return $this->apiParas['goodsLevel'];
    }

    public function setGoodsLevel($goodsLevel)
    {
        $this->apiParas['goodsLevel'] = $goodsLevel;

        return $this;
    }

    public function getProductionDate()
    {
        return $this->apiParas['productionDate'];
    }

    public function setProductionDate($productionDate)
    {
        $this->apiParas['productionDate'] = $productionDate;

        return $this;
    }

    public function getPackageBatchNo()
    {
        return $this->apiParas['packageBatchNo'];
    }

    public function setPackageBatchNo($packageBatchNo)
    {
        $this->apiParas['packageBatchNo'] = $packageBatchNo;

        return $this;
    }

    public function getEclpOutOrderNo()
    {
        return $this->apiParas['eclpOutOrderNo'];
    }

    public function setEclpOutOrderNo($eclpOutOrderNo)
    {
        $this->apiParas['eclpOutOrderNo'] = $eclpOutOrderNo;

        return $this;
    }

    public function getSellerOutOrderNo()
    {
        return $this->apiParas['sellerOutOrderNo'];
    }

    public function setSellerOutOrderNo($sellerOutOrderNo)
    {
        $this->apiParas['sellerOutOrderNo'] = $sellerOutOrderNo;

        return $this;
    }

    public function getUnitPrice()
    {
        return $this->apiParas['unitPrice'];
    }

    public function setUnitPrice($unitPrice)
    {
        $this->apiParas['unitPrice'] = $unitPrice;

        return $this;
    }

    public function getMoney()
    {
        return $this->apiParas['money'];
    }

    public function setMoney($money)
    {
        $this->apiParas['money'] = $money;

        return $this;
    }

    public function getMediumPackage()
    {
        return $this->apiParas['mediumPackage'];
    }

    public function setMediumPackage($mediumPackage)
    {
        $this->apiParas['mediumPackage'] = $mediumPackage;

        return $this;
    }

    public function getBigPackage()
    {
        return $this->apiParas['bigPackage'];
    }

    public function setBigPackage($bigPackage)
    {
        $this->apiParas['bigPackage'] = $bigPackage;

        return $this;
    }

    public function getOrderLine()
    {
        return $this->apiParas['orderLine'];
    }

    public function setOrderLine($orderLine)
    {
        $this->apiParas['orderLine'] = $orderLine;

        return $this;
    }

    public function getBatAttrListJson()
    {
        return $this->apiParas['batAttrListJson'];
    }

    public function setBatAttrListJson($batAttrListJson)
    {
        $this->apiParas['batAttrListJson'] = $batAttrListJson;

        return $this;
    }

    public function getDeptGoodsNo()
    {
        return $this->apiParas['deptGoodsNo'];
    }

    public function setDeptGoodsNo($deptGoodsNo)
    {
        $this->apiParas['deptGoodsNo'] = $deptGoodsNo;

        return $this;
    }

    public function getPlanRtwReasonNo()
    {
        return $this->apiParas['planRtwReasonNo'];
    }

    public function setPlanRtwReasonNo($planRtwReasonNo)
    {
        $this->apiParas['planRtwReasonNo'] = $planRtwReasonNo;

        return $this;
    }

    public function getPlanRtwReasonDesc()
    {
        return $this->apiParas['planRtwReasonDesc'];
    }

    public function setPlanRtwReasonDesc($planRtwReasonDesc)
    {
        $this->apiParas['planRtwReasonDesc'] = $planRtwReasonDesc;

        return $this;
    }

    public function getReserve1()
    {
        return $this->apiParas['reserve1'];
    }

    public function setReserve1($reserve1)
    {
        $this->apiParas['reserve1'] = $reserve1;

        return $this;
    }
}
