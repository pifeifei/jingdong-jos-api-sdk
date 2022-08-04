<?php

namespace ACES\Request;

class EclpPoAddPoOrderRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.eclp.po.addPoOrder';
    }

    public function check()
    {
    }

    public function getSpPoOrderNo()
    {
        return $this->apiParas['spPoOrderNo'];
    }

    public function setSpPoOrderNo($spPoOrderNo)
    {
        $this->apiParas['spPoOrderNo'] = $spPoOrderNo;

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

    public function getReferenceOrder()
    {
        return $this->apiParas['referenceOrder'];
    }

    public function setReferenceOrder($referenceOrder)
    {
        $this->apiParas['referenceOrder'] = $referenceOrder;

        return $this;
    }

    public function getInboundRemark()
    {
        return $this->apiParas['inboundRemark'];
    }

    public function setInboundRemark($inboundRemark)
    {
        $this->apiParas['inboundRemark'] = $inboundRemark;

        return $this;
    }

    public function getBuyer()
    {
        return $this->apiParas['buyer'];
    }

    public function setBuyer($buyer)
    {
        $this->apiParas['buyer'] = $buyer;

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

    public function getSupplierNo()
    {
        return $this->apiParas['supplierNo'];
    }

    public function setSupplierNo($supplierNo)
    {
        $this->apiParas['supplierNo'] = $supplierNo;

        return $this;
    }

    public function getSellerSaleOrder()
    {
        return $this->apiParas['sellerSaleOrder'];
    }

    public function setSellerSaleOrder($sellerSaleOrder)
    {
        $this->apiParas['sellerSaleOrder'] = $sellerSaleOrder;

        return $this;
    }

    public function getSaleOrder()
    {
        return $this->apiParas['saleOrder'];
    }

    public function setSaleOrder($saleOrder)
    {
        $this->apiParas['saleOrder'] = $saleOrder;

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

    public function getBillType()
    {
        return $this->apiParas['billType'];
    }

    public function setBillType($billType)
    {
        $this->apiParas['billType'] = $billType;

        return $this;
    }

    public function getAcceptUnQcFlag()
    {
        return $this->apiParas['acceptUnQcFlag'];
    }

    public function setAcceptUnQcFlag($acceptUnQcFlag)
    {
        $this->apiParas['acceptUnQcFlag'] = $acceptUnQcFlag;

        return $this;
    }

    public function getBoxFlag()
    {
        return $this->apiParas['boxFlag'];
    }

    public function setBoxFlag($boxFlag)
    {
        $this->apiParas['boxFlag'] = $boxFlag;

        return $this;
    }

    public function getEntirePrice()
    {
        return $this->apiParas['entirePrice'];
    }

    public function setEntirePrice($entirePrice)
    {
        $this->apiParas['entirePrice'] = $entirePrice;

        return $this;
    }

    public function getBoxNo()
    {
        return $this->apiParas['boxNo'];
    }

    public function setBoxNo($boxNo)
    {
        $this->apiParas['boxNo'] = $boxNo;

        return $this;
    }

    public function getBoxGoodsNo()
    {
        return $this->apiParas['boxGoodsNo'];
    }

    public function setBoxGoodsNo($boxGoodsNo)
    {
        $this->apiParas['boxGoodsNo'] = $boxGoodsNo;

        return $this;
    }

    public function getBoxGoodsQty()
    {
        return $this->apiParas['boxGoodsQty'];
    }

    public function setBoxGoodsQty($boxGoodsQty)
    {
        $this->apiParas['boxGoodsQty'] = $boxGoodsQty;

        return $this;
    }

    public function getBoxSerialNo()
    {
        return $this->apiParas['boxSerialNo'];
    }

    public function setBoxSerialNo($boxSerialNo)
    {
        $this->apiParas['boxSerialNo'] = $boxSerialNo;

        return $this;
    }

    public function getBoxIsvGoodsNo()
    {
        return $this->apiParas['boxIsvGoodsNo'];
    }

    public function setBoxIsvGoodsNo($boxIsvGoodsNo)
    {
        $this->apiParas['boxIsvGoodsNo'] = $boxIsvGoodsNo;

        return $this;
    }

    public function getPoReturnMode()
    {
        return $this->apiParas['poReturnMode'];
    }

    public function setPoReturnMode($poReturnMode)
    {
        $this->apiParas['poReturnMode'] = $poReturnMode;

        return $this;
    }

    public function getCustomsInfo()
    {
        return $this->apiParas['customsInfo'];
    }

    public function setCustomsInfo($customsInfo)
    {
        $this->apiParas['customsInfo'] = $customsInfo;

        return $this;
    }

    public function getPoType()
    {
        return $this->apiParas['poType'];
    }

    public function setPoType($poType)
    {
        $this->apiParas['poType'] = $poType;

        return $this;
    }

    public function getBillOfLading()
    {
        return $this->apiParas['billOfLading'];
    }

    public function setBillOfLading($billOfLading)
    {
        $this->apiParas['billOfLading'] = $billOfLading;

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

    public function getMultiReceivingFlag()
    {
        return $this->apiParas['multiReceivingFlag'];
    }

    public function setMultiReceivingFlag($multiReceivingFlag)
    {
        $this->apiParas['multiReceivingFlag'] = $multiReceivingFlag;

        return $this;
    }

    public function getWaybillNo()
    {
        return $this->apiParas['waybillNo'];
    }

    public function setWaybillNo($waybillNo)
    {
        $this->apiParas['waybillNo'] = $waybillNo;

        return $this;
    }

    public function getIsvOutWarehouse()
    {
        return $this->apiParas['isvOutWarehouse'];
    }

    public function setIsvOutWarehouse($isvOutWarehouse)
    {
        $this->apiParas['isvOutWarehouse'] = $isvOutWarehouse;

        return $this;
    }

    public function getBizType()
    {
        return $this->apiParas['bizType'];
    }

    public function setBizType($bizType)
    {
        $this->apiParas['bizType'] = $bizType;

        return $this;
    }

    public function getWaitBoxDetailFlag()
    {
        return $this->apiParas['waitBoxDetailFlag'];
    }

    public function setWaitBoxDetailFlag($waitBoxDetailFlag)
    {
        $this->apiParas['waitBoxDetailFlag'] = $waitBoxDetailFlag;

        return $this;
    }

    public function getUnitFlag()
    {
        return $this->apiParas['unitFlag'];
    }

    public function setUnitFlag($unitFlag)
    {
        $this->apiParas['unitFlag'] = $unitFlag;

        return $this;
    }

    public function getSerialDetailMapJson()
    {
        return $this->apiParas['serialDetailMapJson'];
    }

    public function setSerialDetailMapJson($serialDetailMapJson)
    {
        $this->apiParas['serialDetailMapJson'] = $serialDetailMapJson;

        return $this;
    }

    public function getSerialNoScopeMapJson()
    {
        return $this->apiParas['serialNoScopeMapJson'];
    }

    public function setSerialNoScopeMapJson($serialNoScopeMapJson)
    {
        $this->apiParas['serialNoScopeMapJson'] = $serialNoScopeMapJson;

        return $this;
    }

    public function getAllowLackFlag()
    {
        return $this->apiParas['allowLackFlag'];
    }

    public function setAllowLackFlag($allowLackFlag)
    {
        $this->apiParas['allowLackFlag'] = $allowLackFlag;

        return $this;
    }

    public function getIsUpdate()
    {
        return $this->apiParas['isUpdate'];
    }

    public function setIsUpdate($isUpdate)
    {
        $this->apiParas['isUpdate'] = $isUpdate;

        return $this;
    }

    public function getSellerOrderType()
    {
        return $this->apiParas['sellerOrderType'];
    }

    public function setSellerOrderType($sellerOrderType)
    {
        $this->apiParas['sellerOrderType'] = $sellerOrderType;

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

    public function getSellerWarehouseNo()
    {
        return $this->apiParas['sellerWarehouseNo'];
    }

    public function setSellerWarehouseNo($sellerWarehouseNo)
    {
        $this->apiParas['sellerWarehouseNo'] = $sellerWarehouseNo;

        return $this;
    }

    public function getWhNo()
    {
        return $this->apiParas['whNo'];
    }

    public function setWhNo($whNo)
    {
        $this->apiParas['whNo'] = $whNo;

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

    public function getIsvGoodsNo()
    {
        return $this->apiParas['isvGoodsNo'];
    }

    public function setIsvGoodsNo($isvGoodsNo)
    {
        $this->apiParas['isvGoodsNo'] = $isvGoodsNo;

        return $this;
    }

    public function getNumApplication()
    {
        return $this->apiParas['numApplication'];
    }

    public function setNumApplication($numApplication)
    {
        $this->apiParas['numApplication'] = $numApplication;

        return $this;
    }

    public function getGoodsStatus()
    {
        return $this->apiParas['goodsStatus'];
    }

    public function setGoodsStatus($goodsStatus)
    {
        $this->apiParas['goodsStatus'] = $goodsStatus;

        return $this;
    }

    public function getBarCodeType()
    {
        return $this->apiParas['barCodeType'];
    }

    public function setBarCodeType($barCodeType)
    {
        $this->apiParas['barCodeType'] = $barCodeType;

        return $this;
    }

    public function getSidCheckout()
    {
        return $this->apiParas['sidCheckout'];
    }

    public function setSidCheckout($sidCheckout)
    {
        $this->apiParas['sidCheckout'] = $sidCheckout;

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

    public function getTotalPrice()
    {
        return $this->apiParas['totalPrice'];
    }

    public function setTotalPrice($totalPrice)
    {
        $this->apiParas['totalPrice'] = $totalPrice;

        return $this;
    }

    public function getQualityCheckRate()
    {
        return $this->apiParas['qualityCheckRate'];
    }

    public function setQualityCheckRate($qualityCheckRate)
    {
        $this->apiParas['qualityCheckRate'] = $qualityCheckRate;

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

    public function getOrderLine()
    {
        return $this->apiParas['orderLine'];
    }

    public function setOrderLine($orderLine)
    {
        $this->apiParas['orderLine'] = $orderLine;

        return $this;
    }

    public function getIsvLotattrs()
    {
        return $this->apiParas['isvLotattrs'];
    }

    public function setIsvLotattrs($isvLotattrs)
    {
        $this->apiParas['isvLotattrs'] = $isvLotattrs;

        return $this;
    }

    public function getCheckLotattrs()
    {
        return $this->apiParas['checkLotattrs'];
    }

    public function setCheckLotattrs($checkLotattrs)
    {
        $this->apiParas['checkLotattrs'] = $checkLotattrs;

        return $this;
    }

    public function getGoodsPrice()
    {
        return $this->apiParas['goodsPrice'];
    }

    public function setGoodsPrice($goodsPrice)
    {
        $this->apiParas['goodsPrice'] = $goodsPrice;

        return $this;
    }

    public function getWarehousingFlag()
    {
        return $this->apiParas['warehousingFlag'];
    }

    public function setWarehousingFlag($warehousingFlag)
    {
        $this->apiParas['warehousingFlag'] = $warehousingFlag;

        return $this;
    }

    public function getIsvGoodsUnit()
    {
        return $this->apiParas['isvGoodsUnit'];
    }

    public function setIsvGoodsUnit($isvGoodsUnit)
    {
        $this->apiParas['isvGoodsUnit'] = $isvGoodsUnit;

        return $this;
    }
}
