<?php

namespace ACES\Request;

class EclpInsideAddUlOrderRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.eclp.inside.addUlOrder';
    }

    public function check()
    {
    }

    public function getOutUlNo()
    {
        return $this->apiParas['outUlNo'];
    }

    public function setOutUlNo($outUlNo)
    {
        $this->apiParas['outUlNo'] = $outUlNo;

        return $this;
    }

    public function getSellerNo()
    {
        return $this->apiParas['sellerNo'];
    }

    public function setSellerNo($sellerNo)
    {
        $this->apiParas['sellerNo'] = $sellerNo;

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

    public function getUlType()
    {
        return $this->apiParas['ulType'];
    }

    public function setUlType($ulType)
    {
        $this->apiParas['ulType'] = $ulType;

        return $this;
    }

    public function getAllowReturnDest()
    {
        return $this->apiParas['allowReturnDest'];
    }

    public function setAllowReturnDest($allowReturnDest)
    {
        $this->apiParas['allowReturnDest'] = $allowReturnDest;

        return $this;
    }

    public function getAllowLackDest()
    {
        return $this->apiParas['allowLackDest'];
    }

    public function setAllowLackDest($allowLackDest)
    {
        $this->apiParas['allowLackDest'] = $allowLackDest;

        return $this;
    }

    public function getDestMethod()
    {
        return $this->apiParas['destMethod'];
    }

    public function setDestMethod($destMethod)
    {
        $this->apiParas['destMethod'] = $destMethod;

        return $this;
    }

    public function getDestReason()
    {
        return $this->apiParas['destReason'];
    }

    public function setDestReason($destReason)
    {
        $this->apiParas['destReason'] = $destReason;

        return $this;
    }

    public function getDestCompNo()
    {
        return $this->apiParas['destCompNo'];
    }

    public function setDestCompNo($destCompNo)
    {
        $this->apiParas['destCompNo'] = $destCompNo;

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

    public function getBackEmail()
    {
        return $this->apiParas['backEmail'];
    }

    public function setBackEmail($backEmail)
    {
        $this->apiParas['backEmail'] = $backEmail;

        return $this;
    }

    public function getCreateUser()
    {
        return $this->apiParas['createUser'];
    }

    public function setCreateUser($createUser)
    {
        $this->apiParas['createUser'] = $createUser;

        return $this;
    }

    public function getCreateTime()
    {
        return $this->apiParas['createTime'];
    }

    public function setCreateTime($createTime)
    {
        $this->apiParas['createTime'] = $createTime;

        return $this;
    }

    public function getRemark()
    {
        return $this->apiParas['remark'];
    }

    public function setRemark($remark)
    {
        $this->apiParas['remark'] = $remark;

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

    public function getGoodsNo()
    {
        return $this->apiParas['goodsNo'];
    }

    public function setGoodsNo($goodsNo)
    {
        $this->apiParas['goodsNo'] = $goodsNo;

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

    public function getUlItemBatchRequest()
    {
        return $this->apiParas['ulItemBatchRequest'];
    }

    public function setUlItemBatchRequest($ulItemBatchRequest)
    {
        $this->apiParas['ulItemBatchRequest'] = $ulItemBatchRequest;

        return $this;
    }
}
