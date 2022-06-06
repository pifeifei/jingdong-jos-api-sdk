<?php

namespace ACES\Request;


class EclpPoAddPoOrderRequest
{
    private $apiParas = array();
    private $version;
    private $spPoOrderNo;
    private $deptNo;
    private $referenceOrder;
    private $inboundRemark;
    private $buyer;
    private $logicParam;
    private $supplierNo;
    private $sellerSaleOrder;
    private $saleOrder;
    private $orderMark;
    private $billType;
    private $acceptUnQcFlag;
    private $boxFlag;
    private $entirePrice;
    private $boxNo;
    private $boxGoodsNo;
    private $boxGoodsQty;
    private $boxSerialNo;
    private $boxIsvGoodsNo;
    private $poReturnMode;
    private $customsInfo;
    private $poType;
    private $billOfLading;
    private $receiveLevel;
    private $multiReceivingFlag;
    private $waybillNo;
    private $isvOutWarehouse;
    private $bizType;
    private $waitBoxDetailFlag;
    private $unitFlag;
    private $serialDetailMapJson;
    private $serialNoScopeMapJson;
    private $allowLackFlag;
    private $isUpdate;
    private $sellerOrderType;
    private $customField;
    private $sellerWarehouseNo;
    private $whNo;
    private $deptGoodsNo;
    private $isvGoodsNo;
    private $numApplication;
    private $goodsStatus;
    private $barCodeType;
    private $sidCheckout;
    private $unitPrice;
    private $totalPrice;
    private $qualityCheckRate;
    private $batAttrListJson;
    private $orderLine;
    private $isvLotattrs;
    private $checkLotattrs;
    private $goodsPrice;
    private $warehousingFlag;
    private $isvGoodsUnit;

    public function getApiMethodName()
    {
        return "jingdong.eclp.po.addPoOrder";
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

    public function getSpPoOrderNo()
    {
        return $this->spPoOrderNo;
    }

    public function setSpPoOrderNo($spPoOrderNo)
    {
        $this->spPoOrderNo = $spPoOrderNo;
        $this->apiParas["spPoOrderNo"] = $spPoOrderNo;
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

    public function getReferenceOrder()
    {
        return $this->referenceOrder;
    }

    public function setReferenceOrder($referenceOrder)
    {
        $this->referenceOrder = $referenceOrder;
        $this->apiParas["referenceOrder"] = $referenceOrder;
    }

    public function getInboundRemark()
    {
        return $this->inboundRemark;
    }

    public function setInboundRemark($inboundRemark)
    {
        $this->inboundRemark = $inboundRemark;
        $this->apiParas["inboundRemark"] = $inboundRemark;
    }

    public function getBuyer()
    {
        return $this->buyer;
    }

    public function setBuyer($buyer)
    {
        $this->buyer = $buyer;
        $this->apiParas["buyer"] = $buyer;
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

    public function getSupplierNo()
    {
        return $this->supplierNo;
    }

    public function setSupplierNo($supplierNo)
    {
        $this->supplierNo = $supplierNo;
        $this->apiParas["supplierNo"] = $supplierNo;
    }

    public function getSellerSaleOrder()
    {
        return $this->sellerSaleOrder;
    }

    public function setSellerSaleOrder($sellerSaleOrder)
    {
        $this->sellerSaleOrder = $sellerSaleOrder;
        $this->apiParas["sellerSaleOrder"] = $sellerSaleOrder;
    }

    public function getSaleOrder()
    {
        return $this->saleOrder;
    }

    public function setSaleOrder($saleOrder)
    {
        $this->saleOrder = $saleOrder;
        $this->apiParas["saleOrder"] = $saleOrder;
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

    public function getBillType()
    {
        return $this->billType;
    }

    public function setBillType($billType)
    {
        $this->billType = $billType;
        $this->apiParas["billType"] = $billType;
    }

    public function getAcceptUnQcFlag()
    {
        return $this->acceptUnQcFlag;
    }

    public function setAcceptUnQcFlag($acceptUnQcFlag)
    {
        $this->acceptUnQcFlag = $acceptUnQcFlag;
        $this->apiParas["acceptUnQcFlag"] = $acceptUnQcFlag;
    }

    public function getBoxFlag()
    {
        return $this->boxFlag;
    }

    public function setBoxFlag($boxFlag)
    {
        $this->boxFlag = $boxFlag;
        $this->apiParas["boxFlag"] = $boxFlag;
    }

    public function getEntirePrice()
    {
        return $this->entirePrice;
    }

    public function setEntirePrice($entirePrice)
    {
        $this->entirePrice = $entirePrice;
        $this->apiParas["entirePrice"] = $entirePrice;
    }

    public function getBoxNo()
    {
        return $this->boxNo;
    }

    public function setBoxNo($boxNo)
    {
        $this->boxNo = $boxNo;
        $this->apiParas["boxNo"] = $boxNo;
    }

    public function getBoxGoodsNo()
    {
        return $this->boxGoodsNo;
    }

    public function setBoxGoodsNo($boxGoodsNo)
    {
        $this->boxGoodsNo = $boxGoodsNo;
        $this->apiParas["boxGoodsNo"] = $boxGoodsNo;
    }

    public function getBoxGoodsQty()
    {
        return $this->boxGoodsQty;
    }

    public function setBoxGoodsQty($boxGoodsQty)
    {
        $this->boxGoodsQty = $boxGoodsQty;
        $this->apiParas["boxGoodsQty"] = $boxGoodsQty;
    }

    public function getBoxSerialNo()
    {
        return $this->boxSerialNo;
    }

    public function setBoxSerialNo($boxSerialNo)
    {
        $this->boxSerialNo = $boxSerialNo;
        $this->apiParas["boxSerialNo"] = $boxSerialNo;
    }

    public function getBoxIsvGoodsNo()
    {
        return $this->boxIsvGoodsNo;
    }

    public function setBoxIsvGoodsNo($boxIsvGoodsNo)
    {
        $this->boxIsvGoodsNo = $boxIsvGoodsNo;
        $this->apiParas["boxIsvGoodsNo"] = $boxIsvGoodsNo;
    }

    public function getPoReturnMode()
    {
        return $this->poReturnMode;
    }

    public function setPoReturnMode($poReturnMode)
    {
        $this->poReturnMode = $poReturnMode;
        $this->apiParas["poReturnMode"] = $poReturnMode;
    }

    public function getCustomsInfo()
    {
        return $this->customsInfo;
    }

    public function setCustomsInfo($customsInfo)
    {
        $this->customsInfo = $customsInfo;
        $this->apiParas["customsInfo"] = $customsInfo;
    }

    public function getPoType()
    {
        return $this->poType;
    }

    public function setPoType($poType)
    {
        $this->poType = $poType;
        $this->apiParas["poType"] = $poType;
    }

    public function getBillOfLading()
    {
        return $this->billOfLading;
    }

    public function setBillOfLading($billOfLading)
    {
        $this->billOfLading = $billOfLading;
        $this->apiParas["billOfLading"] = $billOfLading;
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

    public function getMultiReceivingFlag()
    {
        return $this->multiReceivingFlag;
    }

    public function setMultiReceivingFlag($multiReceivingFlag)
    {
        $this->multiReceivingFlag = $multiReceivingFlag;
        $this->apiParas["multiReceivingFlag"] = $multiReceivingFlag;
    }

    public function getWaybillNo()
    {
        return $this->waybillNo;
    }

    public function setWaybillNo($waybillNo)
    {
        $this->waybillNo = $waybillNo;
        $this->apiParas["waybillNo"] = $waybillNo;
    }

    public function getIsvOutWarehouse()
    {
        return $this->isvOutWarehouse;
    }

    public function setIsvOutWarehouse($isvOutWarehouse)
    {
        $this->isvOutWarehouse = $isvOutWarehouse;
        $this->apiParas["isvOutWarehouse"] = $isvOutWarehouse;
    }

    public function getBizType()
    {
        return $this->bizType;
    }

    public function setBizType($bizType)
    {
        $this->bizType = $bizType;
        $this->apiParas["bizType"] = $bizType;
    }

    public function getWaitBoxDetailFlag()
    {
        return $this->waitBoxDetailFlag;
    }

    public function setWaitBoxDetailFlag($waitBoxDetailFlag)
    {
        $this->waitBoxDetailFlag = $waitBoxDetailFlag;
        $this->apiParas["waitBoxDetailFlag"] = $waitBoxDetailFlag;
    }

    public function getUnitFlag()
    {
        return $this->unitFlag;
    }

    public function setUnitFlag($unitFlag)
    {
        $this->unitFlag = $unitFlag;
        $this->apiParas["unitFlag"] = $unitFlag;
    }

    public function getSerialDetailMapJson()
    {
        return $this->serialDetailMapJson;
    }

    public function setSerialDetailMapJson($serialDetailMapJson)
    {
        $this->serialDetailMapJson = $serialDetailMapJson;
        $this->apiParas["serialDetailMapJson"] = $serialDetailMapJson;
    }

    public function getSerialNoScopeMapJson()
    {
        return $this->serialNoScopeMapJson;
    }

    public function setSerialNoScopeMapJson($serialNoScopeMapJson)
    {
        $this->serialNoScopeMapJson = $serialNoScopeMapJson;
        $this->apiParas["serialNoScopeMapJson"] = $serialNoScopeMapJson;
    }

    public function getAllowLackFlag()
    {
        return $this->allowLackFlag;
    }

    public function setAllowLackFlag($allowLackFlag)
    {
        $this->allowLackFlag = $allowLackFlag;
        $this->apiParas["allowLackFlag"] = $allowLackFlag;
    }

    public function getIsUpdate()
    {
        return $this->isUpdate;
    }

    public function setIsUpdate($isUpdate)
    {
        $this->isUpdate = $isUpdate;
        $this->apiParas["isUpdate"] = $isUpdate;
    }

    public function getSellerOrderType()
    {
        return $this->sellerOrderType;
    }

    public function setSellerOrderType($sellerOrderType)
    {
        $this->sellerOrderType = $sellerOrderType;
        $this->apiParas["sellerOrderType"] = $sellerOrderType;
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

    public function getSellerWarehouseNo()
    {
        return $this->sellerWarehouseNo;
    }

    public function setSellerWarehouseNo($sellerWarehouseNo)
    {
        $this->sellerWarehouseNo = $sellerWarehouseNo;
        $this->apiParas["sellerWarehouseNo"] = $sellerWarehouseNo;
    }

    public function getWhNo()
    {
        return $this->whNo;
    }

    public function setWhNo($whNo)
    {
        $this->whNo = $whNo;
        $this->apiParas["whNo"] = $whNo;
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

    public function getIsvGoodsNo()
    {
        return $this->isvGoodsNo;
    }

    public function setIsvGoodsNo($isvGoodsNo)
    {
        $this->isvGoodsNo = $isvGoodsNo;
        $this->apiParas["isvGoodsNo"] = $isvGoodsNo;
    }

    public function getNumApplication()
    {
        return $this->numApplication;
    }

    public function setNumApplication($numApplication)
    {
        $this->numApplication = $numApplication;
        $this->apiParas["numApplication"] = $numApplication;
    }

    public function getGoodsStatus()
    {
        return $this->goodsStatus;
    }

    public function setGoodsStatus($goodsStatus)
    {
        $this->goodsStatus = $goodsStatus;
        $this->apiParas["goodsStatus"] = $goodsStatus;
    }

    public function getBarCodeType()
    {
        return $this->barCodeType;
    }

    public function setBarCodeType($barCodeType)
    {
        $this->barCodeType = $barCodeType;
        $this->apiParas["barCodeType"] = $barCodeType;
    }

    public function getSidCheckout()
    {
        return $this->sidCheckout;
    }

    public function setSidCheckout($sidCheckout)
    {
        $this->sidCheckout = $sidCheckout;
        $this->apiParas["sidCheckout"] = $sidCheckout;
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

    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    public function setTotalPrice($totalPrice)
    {
        $this->totalPrice = $totalPrice;
        $this->apiParas["totalPrice"] = $totalPrice;
    }

    public function getQualityCheckRate()
    {
        return $this->qualityCheckRate;
    }

    public function setQualityCheckRate($qualityCheckRate)
    {
        $this->qualityCheckRate = $qualityCheckRate;
        $this->apiParas["qualityCheckRate"] = $qualityCheckRate;
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

    public function getOrderLine()
    {
        return $this->orderLine;
    }

    public function setOrderLine($orderLine)
    {
        $this->orderLine = $orderLine;
        $this->apiParas["orderLine"] = $orderLine;
    }

    public function getIsvLotattrs()
    {
        return $this->isvLotattrs;
    }

    public function setIsvLotattrs($isvLotattrs)
    {
        $this->isvLotattrs = $isvLotattrs;
        $this->apiParas["isvLotattrs"] = $isvLotattrs;
    }

    public function getCheckLotattrs()
    {
        return $this->checkLotattrs;
    }

    public function setCheckLotattrs($checkLotattrs)
    {
        $this->checkLotattrs = $checkLotattrs;
        $this->apiParas["checkLotattrs"] = $checkLotattrs;
    }

    public function getGoodsPrice()
    {
        return $this->goodsPrice;
    }

    public function setGoodsPrice($goodsPrice)
    {
        $this->goodsPrice = $goodsPrice;
        $this->apiParas["goodsPrice"] = $goodsPrice;
    }

    public function getWarehousingFlag()
    {
        return $this->warehousingFlag;
    }

    public function setWarehousingFlag($warehousingFlag)
    {
        $this->warehousingFlag = $warehousingFlag;
        $this->apiParas["warehousingFlag"] = $warehousingFlag;
    }

    public function getIsvGoodsUnit()
    {
        return $this->isvGoodsUnit;
    }

    public function setIsvGoodsUnit($isvGoodsUnit)
    {
        $this->isvGoodsUnit = $isvGoodsUnit;
        $this->apiParas["isvGoodsUnit"] = $isvGoodsUnit;
    }
}
