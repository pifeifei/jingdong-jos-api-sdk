<?php

namespace ACES\Request;


class EclpRtsIsvRtsTransferRequest
{
    private $apiParas = array();
    private $version;
    private $eclpRtsNo;
    private $isvRtsNum;
    private $rtsType;
    private $deptNo;
    private $deliveryMode;
    private $warehouseNo;
    private $supplierNo;
    private $receiver;
    private $receiverPhone;
    private $email;
    private $province;
    private $city;
    private $county;
    private $town;
    private $address;
    private $createUser;
    private $packFlag;
    private $allowLack;
    private $logicParam;
    private $remark;
    private $purchaser;
    private $customField;
    private $sellerBizType;
    private $deptGoodsNo;
    private $goodsName;
    private $quantity;
    private $realQuantity;
    private $goodsStatus;
    private $goodsLevel;
    private $lotProductionBatchNo;
    private $lotProductionDate;
    private $lotSupplier;
    private $batAttrListJson;
    private $goodsPrice;
    private $totalAmount;
    private $isvGoodsNo;
    private $orderLine;

    public function getApiMethodName()
    {
        return "jingdong.eclp.rts.isvRtsTransfer";
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

    public function getEclpRtsNo()
    {
        return $this->eclpRtsNo;
    }

    public function setEclpRtsNo($eclpRtsNo)
    {
        $this->eclpRtsNo = $eclpRtsNo;
        $this->apiParas["eclpRtsNo"] = $eclpRtsNo;
    }

    public function getIsvRtsNum()
    {
        return $this->isvRtsNum;
    }

    public function setIsvRtsNum($isvRtsNum)
    {
        $this->isvRtsNum = $isvRtsNum;
        $this->apiParas["isvRtsNum"] = $isvRtsNum;
    }

    public function getRtsType()
    {
        return $this->rtsType;
    }

    public function setRtsType($rtsType)
    {
        $this->rtsType = $rtsType;
        $this->apiParas["rtsType"] = $rtsType;
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

    public function getDeliveryMode()
    {
        return $this->deliveryMode;
    }

    public function setDeliveryMode($deliveryMode)
    {
        $this->deliveryMode = $deliveryMode;
        $this->apiParas["deliveryMode"] = $deliveryMode;
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

    public function getSupplierNo()
    {
        return $this->supplierNo;
    }

    public function setSupplierNo($supplierNo)
    {
        $this->supplierNo = $supplierNo;
        $this->apiParas["supplierNo"] = $supplierNo;
    }

    public function getReceiver()
    {
        return $this->receiver;
    }

    public function setReceiver($receiver)
    {
        $this->receiver = $receiver;
        $this->apiParas["receiver"] = $receiver;
    }

    public function getReceiverPhone()
    {
        return $this->receiverPhone;
    }

    public function setReceiverPhone($receiverPhone)
    {
        $this->receiverPhone = $receiverPhone;
        $this->apiParas["receiverPhone"] = $receiverPhone;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        $this->apiParas["email"] = $email;
    }

    public function getProvince()
    {
        return $this->province;
    }

    public function setProvince($province)
    {
        $this->province = $province;
        $this->apiParas["province"] = $province;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function setCity($city)
    {
        $this->city = $city;
        $this->apiParas["city"] = $city;
    }

    public function getCounty()
    {
        return $this->county;
    }

    public function setCounty($county)
    {
        $this->county = $county;
        $this->apiParas["county"] = $county;
    }

    public function getTown()
    {
        return $this->town;
    }

    public function setTown($town)
    {
        $this->town = $town;
        $this->apiParas["town"] = $town;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
        $this->apiParas["address"] = $address;
    }

    public function getCreateUser()
    {
        return $this->createUser;
    }

    public function setCreateUser($createUser)
    {
        $this->createUser = $createUser;
        $this->apiParas["createUser"] = $createUser;
    }

    public function getPackFlag()
    {
        return $this->packFlag;
    }

    public function setPackFlag($packFlag)
    {
        $this->packFlag = $packFlag;
        $this->apiParas["packFlag"] = $packFlag;
    }

    public function getAllowLack()
    {
        return $this->allowLack;
    }

    public function setAllowLack($allowLack)
    {
        $this->allowLack = $allowLack;
        $this->apiParas["allowLack"] = $allowLack;
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

    public function getRemark()
    {
        return $this->remark;
    }

    public function setRemark($remark)
    {
        $this->remark = $remark;
        $this->apiParas["remark"] = $remark;
    }

    public function getPurchaser()
    {
        return $this->purchaser;
    }

    public function setPurchaser($purchaser)
    {
        $this->purchaser = $purchaser;
        $this->apiParas["purchaser"] = $purchaser;
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

    public function getSellerBizType()
    {
        return $this->sellerBizType;
    }

    public function setSellerBizType($sellerBizType)
    {
        $this->sellerBizType = $sellerBizType;
        $this->apiParas["sellerBizType"] = $sellerBizType;
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

    public function getGoodsName()
    {
        return $this->goodsName;
    }

    public function setGoodsName($goodsName)
    {
        $this->goodsName = $goodsName;
        $this->apiParas["goodsName"] = $goodsName;
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

    public function getRealQuantity()
    {
        return $this->realQuantity;
    }

    public function setRealQuantity($realQuantity)
    {
        $this->realQuantity = $realQuantity;
        $this->apiParas["realQuantity"] = $realQuantity;
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

    public function getGoodsLevel()
    {
        return $this->goodsLevel;
    }

    public function setGoodsLevel($goodsLevel)
    {
        $this->goodsLevel = $goodsLevel;
        $this->apiParas["goodsLevel"] = $goodsLevel;
    }

    public function getLotProductionBatchNo()
    {
        return $this->lotProductionBatchNo;
    }

    public function setLotProductionBatchNo($lotProductionBatchNo)
    {
        $this->lotProductionBatchNo = $lotProductionBatchNo;
        $this->apiParas["lotProductionBatchNo"] = $lotProductionBatchNo;
    }

    public function getLotProductionDate()
    {
        return $this->lotProductionDate;
    }

    public function setLotProductionDate($lotProductionDate)
    {
        $this->lotProductionDate = $lotProductionDate;
        $this->apiParas["lotProductionDate"] = $lotProductionDate;
    }

    public function getLotSupplier()
    {
        return $this->lotSupplier;
    }

    public function setLotSupplier($lotSupplier)
    {
        $this->lotSupplier = $lotSupplier;
        $this->apiParas["lotSupplier"] = $lotSupplier;
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

    public function getGoodsPrice()
    {
        return $this->goodsPrice;
    }

    public function setGoodsPrice($goodsPrice)
    {
        $this->goodsPrice = $goodsPrice;
        $this->apiParas["goodsPrice"] = $goodsPrice;
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

    public function getIsvGoodsNo()
    {
        return $this->isvGoodsNo;
    }

    public function setIsvGoodsNo($isvGoodsNo)
    {
        $this->isvGoodsNo = $isvGoodsNo;
        $this->apiParas["isvGoodsNo"] = $isvGoodsNo;
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
}
