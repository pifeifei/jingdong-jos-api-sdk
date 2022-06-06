<?php

namespace ACES\Request;


class EclpInsideAddUlOrderRequest
{
    private $apiParas = array();
    private $version;
    private $outUlNo;
    private $sellerNo;
    private $warehouseNo;
    private $deptNo;
    private $deliveryMode;
    private $ulType;
    private $allowReturnDest;
    private $allowLackDest;
    private $destMethod;
    private $destReason;
    private $destCompNo;
    private $receiver;
    private $receiverPhone;
    private $email;
    private $province;
    private $city;
    private $county;
    private $town;
    private $address;
    private $backEmail;
    private $createUser;
    private $createTime;
    private $remark;
    private $orderLine;
    private $goodsNo;
    private $goodsName;
    private $planQty;
    private $goodsLevel;
    private $ulItemBatchRequest;

    public function getApiMethodName()
    {
        return "jingdong.eclp.inside.addUlOrder";
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

    public function getOutUlNo()
    {
        return $this->outUlNo;
    }

    public function setOutUlNo($outUlNo)
    {
        $this->outUlNo = $outUlNo;
        $this->apiParas["outUlNo"] = $outUlNo;
    }

    public function getSellerNo()
    {
        return $this->sellerNo;
    }

    public function setSellerNo($sellerNo)
    {
        $this->sellerNo = $sellerNo;
        $this->apiParas["sellerNo"] = $sellerNo;
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

    public function getUlType()
    {
        return $this->ulType;
    }

    public function setUlType($ulType)
    {
        $this->ulType = $ulType;
        $this->apiParas["ulType"] = $ulType;
    }

    public function getAllowReturnDest()
    {
        return $this->allowReturnDest;
    }

    public function setAllowReturnDest($allowReturnDest)
    {
        $this->allowReturnDest = $allowReturnDest;
        $this->apiParas["allowReturnDest"] = $allowReturnDest;
    }

    public function getAllowLackDest()
    {
        return $this->allowLackDest;
    }

    public function setAllowLackDest($allowLackDest)
    {
        $this->allowLackDest = $allowLackDest;
        $this->apiParas["allowLackDest"] = $allowLackDest;
    }

    public function getDestMethod()
    {
        return $this->destMethod;
    }

    public function setDestMethod($destMethod)
    {
        $this->destMethod = $destMethod;
        $this->apiParas["destMethod"] = $destMethod;
    }

    public function getDestReason()
    {
        return $this->destReason;
    }

    public function setDestReason($destReason)
    {
        $this->destReason = $destReason;
        $this->apiParas["destReason"] = $destReason;
    }

    public function getDestCompNo()
    {
        return $this->destCompNo;
    }

    public function setDestCompNo($destCompNo)
    {
        $this->destCompNo = $destCompNo;
        $this->apiParas["destCompNo"] = $destCompNo;
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

    public function getBackEmail()
    {
        return $this->backEmail;
    }

    public function setBackEmail($backEmail)
    {
        $this->backEmail = $backEmail;
        $this->apiParas["backEmail"] = $backEmail;
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

    public function getCreateTime()
    {
        return $this->createTime;
    }

    public function setCreateTime($createTime)
    {
        $this->createTime = $createTime;
        $this->apiParas["createTime"] = $createTime;
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

    public function getOrderLine()
    {
        return $this->orderLine;
    }

    public function setOrderLine($orderLine)
    {
        $this->orderLine = $orderLine;
        $this->apiParas["orderLine"] = $orderLine;
    }

    public function getGoodsNo()
    {
        return $this->goodsNo;
    }

    public function setGoodsNo($goodsNo)
    {
        $this->goodsNo = $goodsNo;
        $this->apiParas["goodsNo"] = $goodsNo;
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

    public function getUlItemBatchRequest()
    {
        return $this->ulItemBatchRequest;
    }

    public function setUlItemBatchRequest($ulItemBatchRequest)
    {
        $this->ulItemBatchRequest = $ulItemBatchRequest;
        $this->apiParas["ulItemBatchRequest"] = $ulItemBatchRequest;
    }
}
