<?php

namespace ACES\Request;

class EclpRtsIsvRtsCancelRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.eclp.rts.isvRtsCancel';
    }

    public function check()
    {
    }

    public function getEclpRtsNo()
    {
        return $this->apiParas['eclpRtsNo'];
    }

    public function setEclpRtsNo($eclpRtsNo)
    {
        $this->apiParas['eclpRtsNo'] = $eclpRtsNo;

        return $this;
    }

    public function getIsvRtsNum()
    {
        return $this->apiParas['isvRtsNum'];
    }

    public function setIsvRtsNum($isvRtsNum)
    {
        $this->apiParas['isvRtsNum'] = $isvRtsNum;

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

    public function getDeliveryMode()
    {
        return $this->apiParas['deliveryMode'];
    }

    public function setDeliveryMode($deliveryMode)
    {
        $this->apiParas['deliveryMode'] = $deliveryMode;

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

    public function getSupplierNo()
    {
        return $this->apiParas['supplierNo'];
    }

    public function setSupplierNo($supplierNo)
    {
        $this->apiParas['supplierNo'] = $supplierNo;

        return $this;
    }

    public function getReceiver()
    {
        return $this->apiParas['receiver'];
    }

    public function setReceiver($receiver)
    {
        $this->apiParas['receiver'] = $receiver;

        return $this;
    }

    public function getReceiverPhone()
    {
        return $this->apiParas['receiverPhone'];
    }

    public function setReceiverPhone($receiverPhone)
    {
        $this->apiParas['receiverPhone'] = $receiverPhone;

        return $this;
    }

    public function getEmail()
    {
        return $this->apiParas['email'];
    }

    public function setEmail($email)
    {
        $this->apiParas['email'] = $email;

        return $this;
    }

    public function getProvince()
    {
        return $this->apiParas['province'];
    }

    public function setProvince($province)
    {
        $this->apiParas['province'] = $province;

        return $this;
    }

    public function getCity()
    {
        return $this->apiParas['city'];
    }

    public function setCity($city)
    {
        $this->apiParas['city'] = $city;

        return $this;
    }

    public function getCounty()
    {
        return $this->apiParas['county'];
    }

    public function setCounty($county)
    {
        $this->apiParas['county'] = $county;

        return $this;
    }

    public function getTown()
    {
        return $this->apiParas['town'];
    }

    public function setTown($town)
    {
        $this->apiParas['town'] = $town;

        return $this;
    }

    public function getAddress()
    {
        return $this->apiParas['address'];
    }

    public function setAddress($address)
    {
        $this->apiParas['address'] = $address;

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

    public function getGoodsName()
    {
        return $this->apiParas['goodsName'];
    }

    public function setGoodsName($goodsName)
    {
        $this->apiParas['goodsName'] = $goodsName;

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

    public function getRealQuantity()
    {
        return $this->apiParas['realQuantity'];
    }

    public function setRealQuantity($realQuantity)
    {
        $this->apiParas['realQuantity'] = $realQuantity;

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
}
