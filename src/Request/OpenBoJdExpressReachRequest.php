<?php

namespace ACES\Request;


class OpenBoJdExpressReachRequest
{
    private $apiParas = array();
    private $version;
    private $receiverAddress;
    private $wareHouseCode;
    private $bizNo;
    private $senderAddress;
    private $isCod;
    private $transBizType;
    private $deliveryType;
    private $deptNo;

    public function getApiMethodName()
    {
        return "jingdong.open.bo.jdExpressReach";
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

    public function getReceiverAddress()
    {
        return $this->receiverAddress;
    }

    public function setReceiverAddress($receiverAddress)
    {
        $this->receiverAddress = $receiverAddress;
        $this->apiParas["receiverAddress"] = $receiverAddress;
    }

    public function getWareHouseCode()
    {
        return $this->wareHouseCode;
    }

    public function setWareHouseCode($wareHouseCode)
    {
        $this->wareHouseCode = $wareHouseCode;
        $this->apiParas["wareHouseCode"] = $wareHouseCode;
    }

    public function getBizNo()
    {
        return $this->bizNo;
    }

    public function setBizNo($bizNo)
    {
        $this->bizNo = $bizNo;
        $this->apiParas["bizNo"] = $bizNo;
    }

    public function getSenderAddress()
    {
        return $this->senderAddress;
    }

    public function setSenderAddress($senderAddress)
    {
        $this->senderAddress = $senderAddress;
        $this->apiParas["senderAddress"] = $senderAddress;
    }

    public function getIsCod()
    {
        return $this->isCod;
    }

    public function setIsCod($isCod)
    {
        $this->isCod = $isCod;
        $this->apiParas["isCod"] = $isCod;
    }

    public function getTransBizType()
    {
        return $this->transBizType;
    }

    public function setTransBizType($transBizType)
    {
        $this->transBizType = $transBizType;
        $this->apiParas["transBizType"] = $transBizType;
    }

    public function getDeliveryType()
    {
        return $this->deliveryType;
    }

    public function setDeliveryType($deliveryType)
    {
        $this->deliveryType = $deliveryType;
        $this->apiParas["deliveryType"] = $deliveryType;
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
}
