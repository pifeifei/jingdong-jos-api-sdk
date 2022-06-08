<?php

namespace ACES\Request;

class OpenBoJdExpressReachRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.open.bo.jdExpressReach';
    }

    public function check()
    {
    }

    public function getReceiverAddress()
    {
        return $this->apiParas['receiverAddress'];
    }

    public function setReceiverAddress($receiverAddress)
    {
        $this->apiParas['receiverAddress'] = $receiverAddress;

        return $this;
    }

    public function getWareHouseCode()
    {
        return $this->apiParas['wareHouseCode'];
    }

    public function setWareHouseCode($wareHouseCode)
    {
        $this->apiParas['wareHouseCode'] = $wareHouseCode;

        return $this;
    }

    public function getBizNo()
    {
        return $this->apiParas['bizNo'];
    }

    public function setBizNo($bizNo)
    {
        $this->apiParas['bizNo'] = $bizNo;

        return $this;
    }

    public function getSenderAddress()
    {
        return $this->apiParas['senderAddress'];
    }

    public function setSenderAddress($senderAddress)
    {
        $this->apiParas['senderAddress'] = $senderAddress;

        return $this;
    }

    public function getIsCod()
    {
        return $this->apiParas['isCod'];
    }

    public function setIsCod($isCod)
    {
        $this->apiParas['isCod'] = $isCod;

        return $this;
    }

    public function getTransBizType()
    {
        return $this->apiParas['transBizType'];
    }

    public function setTransBizType($transBizType)
    {
        $this->apiParas['transBizType'] = $transBizType;

        return $this;
    }

    public function getDeliveryType()
    {
        return $this->apiParas['deliveryType'];
    }

    public function setDeliveryType($deliveryType)
    {
        $this->apiParas['deliveryType'] = $deliveryType;

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
}
