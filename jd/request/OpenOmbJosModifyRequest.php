<?php

class OpenOmbJosModifyRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.open.omb.jos.modify";
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
                                                                                                                                    private $vendorCode;

    public function setVendorCode($vendorCode)
    {
        $this->vendorCode = $vendorCode;
         $this->apiParas["vendorCode"] = $vendorCode;
    }

    public function getVendorCode()
    {
        return $this->vendorCode;
    }

                                                        private $weight;

    public function setWeight($weight)
    {
        $this->weight = $weight;
         $this->apiParas["weight"] = $weight;
    }

    public function getWeight()
    {
        return $this->weight;
    }

                                                        private $receiveTownName;

    public function setReceiveTownName($receiveTownName)
    {
        $this->receiveTownName = $receiveTownName;
         $this->apiParas["receiveTownName"] = $receiveTownName;
    }

    public function getReceiveTownName()
    {
        return $this->receiveTownName;
    }

                                                        private $receiveCityName;

    public function setReceiveCityName($receiveCityName)
    {
        $this->receiveCityName = $receiveCityName;
         $this->apiParas["receiveCityName"] = $receiveCityName;
    }

    public function getReceiveCityName()
    {
        return $this->receiveCityName;
    }

                                                        private $operateTime;

    public function setOperateTime($operateTime)
    {
        $this->operateTime = $operateTime;
         $this->apiParas["operateTime"] = $operateTime;
    }

    public function getOperateTime()
    {
        return $this->operateTime;
    }

                                                        private $receiveTel;

    public function setReceiveTel($receiveTel)
    {
        $this->receiveTel = $receiveTel;
         $this->apiParas["receiveTel"] = $receiveTel;
    }

    public function getReceiveTel()
    {
        return $this->receiveTel;
    }

                                                        private $receiveMobile;

    public function setReceiveMobile($receiveMobile)
    {
        $this->receiveMobile = $receiveMobile;
         $this->apiParas["receiveMobile"] = $receiveMobile;
    }

    public function getReceiveMobile()
    {
        return $this->receiveMobile;
    }

                                                        private $receiveCountyName;

    public function setReceiveCountyName($receiveCountyName)
    {
        $this->receiveCountyName = $receiveCountyName;
         $this->apiParas["receiveCountyName"] = $receiveCountyName;
    }

    public function getReceiveCountyName()
    {
        return $this->receiveCountyName;
    }

                                                        private $receiveProvinceId;

    public function setReceiveProvinceId($receiveProvinceId)
    {
        $this->receiveProvinceId = $receiveProvinceId;
         $this->apiParas["receiveProvinceId"] = $receiveProvinceId;
    }

    public function getReceiveProvinceId()
    {
        return $this->receiveProvinceId;
    }

                                                        private $receiveTownId;

    public function setReceiveTownId($receiveTownId)
    {
        $this->receiveTownId = $receiveTownId;
         $this->apiParas["receiveTownId"] = $receiveTownId;
    }

    public function getReceiveTownId()
    {
        return $this->receiveTownId;
    }

                                                        private $operateUser;

    public function setOperateUser($operateUser)
    {
        $this->operateUser = $operateUser;
         $this->apiParas["operateUser"] = $operateUser;
    }

    public function getOperateUser()
    {
        return $this->operateUser;
    }

                                                        private $waybillCode;

    public function setWaybillCode($waybillCode)
    {
        $this->waybillCode = $waybillCode;
         $this->apiParas["waybillCode"] = $waybillCode;
    }

    public function getWaybillCode()
    {
        return $this->waybillCode;
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

                                                        private $orderNo;

    public function setOrderNo($orderNo)
    {
        $this->orderNo = $orderNo;
         $this->apiParas["orderNo"] = $orderNo;
    }

    public function getOrderNo()
    {
        return $this->orderNo;
    }

                                                                                    private $volume;

    public function setVolume($volume)
    {
        $this->volume = $volume;
         $this->apiParas["volume"] = $volume;
    }

    public function getVolume()
    {
        return $this->volume;
    }

                                                        private $receiveName;

    public function setReceiveName($receiveName)
    {
        $this->receiveName = $receiveName;
         $this->apiParas["receiveName"] = $receiveName;
    }

    public function getReceiveName()
    {
        return $this->receiveName;
    }

                                                        private $receiveProvinceName;

    public function setReceiveProvinceName($receiveProvinceName)
    {
        $this->receiveProvinceName = $receiveProvinceName;
         $this->apiParas["receiveProvinceName"] = $receiveProvinceName;
    }

    public function getReceiveProvinceName()
    {
        return $this->receiveProvinceName;
    }

                                                        private $senderStation;

    public function setSenderStation($senderStation)
    {
        $this->senderStation = $senderStation;
         $this->apiParas["senderStation"] = $senderStation;
    }

    public function getSenderStation()
    {
        return $this->senderStation;
    }

                                                        private $deliverStation;

    public function setDeliverStation($deliverStation)
    {
        $this->deliverStation = $deliverStation;
         $this->apiParas["deliverStation"] = $deliverStation;
    }

    public function getDeliverStation()
    {
        return $this->deliverStation;
    }

                                                        private $receiveAddress;

    public function setReceiveAddress($receiveAddress)
    {
        $this->receiveAddress = $receiveAddress;
         $this->apiParas["receiveAddress"] = $receiveAddress;
    }

    public function getReceiveAddress()
    {
        return $this->receiveAddress;
    }

                                                                                                                                                                                private $receiveCityId;

    public function setReceiveCityId($receiveCityId)
    {
        $this->receiveCityId = $receiveCityId;
         $this->apiParas["receiveCityId"] = $receiveCityId;
    }

    public function getReceiveCityId()
    {
        return $this->receiveCityId;
    }

                                                        private $receiveCountyId;

    public function setReceiveCountyId($receiveCountyId)
    {
        $this->receiveCountyId = $receiveCountyId;
         $this->apiParas["receiveCountyId"] = $receiveCountyId;
    }

    public function getReceiveCountyId()
    {
        return $this->receiveCountyId;
    }
}
