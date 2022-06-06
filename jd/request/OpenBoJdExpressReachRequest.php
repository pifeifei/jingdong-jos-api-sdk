<?php

class OpenBoJdExpressReachRequest
{
    private $apiParas = array();

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

    private $version;

    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function getVersion()
    {
        return $this->version;
    }
                                                                                                                                    private $receiverAddress;

    public function setReceiverAddress($receiverAddress)
    {
        $this->receiverAddress = $receiverAddress;
         $this->apiParas["receiverAddress"] = $receiverAddress;
    }

    public function getReceiverAddress()
    {
        return $this->receiverAddress;
    }

                                                        private $wareHouseCode;

    public function setWareHouseCode($wareHouseCode)
    {
        $this->wareHouseCode = $wareHouseCode;
         $this->apiParas["wareHouseCode"] = $wareHouseCode;
    }

    public function getWareHouseCode()
    {
        return $this->wareHouseCode;
    }

                                                        private $bizNo;

    public function setBizNo($bizNo)
    {
        $this->bizNo = $bizNo;
         $this->apiParas["bizNo"] = $bizNo;
    }

    public function getBizNo()
    {
        return $this->bizNo;
    }

                                                        private $senderAddress;

    public function setSenderAddress($senderAddress)
    {
        $this->senderAddress = $senderAddress;
         $this->apiParas["senderAddress"] = $senderAddress;
    }

    public function getSenderAddress()
    {
        return $this->senderAddress;
    }

                                                        private $isCod;

    public function setIsCod($isCod)
    {
        $this->isCod = $isCod;
         $this->apiParas["isCod"] = $isCod;
    }

    public function getIsCod()
    {
        return $this->isCod;
    }

                                                        private $transBizType;

    public function setTransBizType($transBizType)
    {
        $this->transBizType = $transBizType;
         $this->apiParas["transBizType"] = $transBizType;
    }

    public function getTransBizType()
    {
        return $this->transBizType;
    }

                                                        private $deliveryType;

    public function setDeliveryType($deliveryType)
    {
        $this->deliveryType = $deliveryType;
         $this->apiParas["deliveryType"] = $deliveryType;
    }

    public function getDeliveryType()
    {
        return $this->deliveryType;
    }

                                                        private $deptNo;

    public function setDeptNo($deptNo)
    {
        $this->deptNo = $deptNo;
         $this->apiParas["deptNo"] = $deptNo;
    }

    public function getDeptNo()
    {
        return $this->deptNo;
    }
}
