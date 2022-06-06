<?php

namespace ACES\Request;


class OpenOmbJosModifyRequest
{
    private $apiParas = array();
    private $version;
    private $vendorCode;
    private $weight;
    private $receiveTownName;
    private $receiveCityName;
    private $operateTime;
    private $receiveTel;
    private $receiveMobile;
    private $receiveCountyName;
    private $receiveProvinceId;
    private $receiveTownId;
    private $operateUser;
    private $waybillCode;
    private $deptNo;
    private $orderNo;
    private $volume;
    private $receiveName;
    private $receiveProvinceName;
    private $senderStation;
    private $deliverStation;
    private $receiveAddress;
    private $receiveCityId;
    private $receiveCountyId;

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

    public function getVersion()
    {
        return $this->version;
    }

    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function getVendorCode()
    {
        return $this->vendorCode;
    }

    public function setVendorCode($vendorCode)
    {
        $this->vendorCode = $vendorCode;
        $this->apiParas["vendorCode"] = $vendorCode;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;
        $this->apiParas["weight"] = $weight;
    }

    public function getReceiveTownName()
    {
        return $this->receiveTownName;
    }

    public function setReceiveTownName($receiveTownName)
    {
        $this->receiveTownName = $receiveTownName;
        $this->apiParas["receiveTownName"] = $receiveTownName;
    }

    public function getReceiveCityName()
    {
        return $this->receiveCityName;
    }

    public function setReceiveCityName($receiveCityName)
    {
        $this->receiveCityName = $receiveCityName;
        $this->apiParas["receiveCityName"] = $receiveCityName;
    }

    public function getOperateTime()
    {
        return $this->operateTime;
    }

    public function setOperateTime($operateTime)
    {
        $this->operateTime = $operateTime;
        $this->apiParas["operateTime"] = $operateTime;
    }

    public function getReceiveTel()
    {
        return $this->receiveTel;
    }

    public function setReceiveTel($receiveTel)
    {
        $this->receiveTel = $receiveTel;
        $this->apiParas["receiveTel"] = $receiveTel;
    }

    public function getReceiveMobile()
    {
        return $this->receiveMobile;
    }

    public function setReceiveMobile($receiveMobile)
    {
        $this->receiveMobile = $receiveMobile;
        $this->apiParas["receiveMobile"] = $receiveMobile;
    }

    public function getReceiveCountyName()
    {
        return $this->receiveCountyName;
    }

    public function setReceiveCountyName($receiveCountyName)
    {
        $this->receiveCountyName = $receiveCountyName;
        $this->apiParas["receiveCountyName"] = $receiveCountyName;
    }

    public function getReceiveProvinceId()
    {
        return $this->receiveProvinceId;
    }

    public function setReceiveProvinceId($receiveProvinceId)
    {
        $this->receiveProvinceId = $receiveProvinceId;
        $this->apiParas["receiveProvinceId"] = $receiveProvinceId;
    }

    public function getReceiveTownId()
    {
        return $this->receiveTownId;
    }

    public function setReceiveTownId($receiveTownId)
    {
        $this->receiveTownId = $receiveTownId;
        $this->apiParas["receiveTownId"] = $receiveTownId;
    }

    public function getOperateUser()
    {
        return $this->operateUser;
    }

    public function setOperateUser($operateUser)
    {
        $this->operateUser = $operateUser;
        $this->apiParas["operateUser"] = $operateUser;
    }

    public function getWaybillCode()
    {
        return $this->waybillCode;
    }

    public function setWaybillCode($waybillCode)
    {
        $this->waybillCode = $waybillCode;
        $this->apiParas["waybillCode"] = $waybillCode;
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

    public function getOrderNo()
    {
        return $this->orderNo;
    }

    public function setOrderNo($orderNo)
    {
        $this->orderNo = $orderNo;
        $this->apiParas["orderNo"] = $orderNo;
    }

    public function getVolume()
    {
        return $this->volume;
    }

    public function setVolume($volume)
    {
        $this->volume = $volume;
        $this->apiParas["volume"] = $volume;
    }

    public function getReceiveName()
    {
        return $this->receiveName;
    }

    public function setReceiveName($receiveName)
    {
        $this->receiveName = $receiveName;
        $this->apiParas["receiveName"] = $receiveName;
    }

    public function getReceiveProvinceName()
    {
        return $this->receiveProvinceName;
    }

    public function setReceiveProvinceName($receiveProvinceName)
    {
        $this->receiveProvinceName = $receiveProvinceName;
        $this->apiParas["receiveProvinceName"] = $receiveProvinceName;
    }

    public function getSenderStation()
    {
        return $this->senderStation;
    }

    public function setSenderStation($senderStation)
    {
        $this->senderStation = $senderStation;
        $this->apiParas["senderStation"] = $senderStation;
    }

    public function getDeliverStation()
    {
        return $this->deliverStation;
    }

    public function setDeliverStation($deliverStation)
    {
        $this->deliverStation = $deliverStation;
        $this->apiParas["deliverStation"] = $deliverStation;
    }

    public function getReceiveAddress()
    {
        return $this->receiveAddress;
    }

    public function setReceiveAddress($receiveAddress)
    {
        $this->receiveAddress = $receiveAddress;
        $this->apiParas["receiveAddress"] = $receiveAddress;
    }

    public function getReceiveCityId()
    {
        return $this->receiveCityId;
    }

    public function setReceiveCityId($receiveCityId)
    {
        $this->receiveCityId = $receiveCityId;
        $this->apiParas["receiveCityId"] = $receiveCityId;
    }

    public function getReceiveCountyId()
    {
        return $this->receiveCountyId;
    }

    public function setReceiveCountyId($receiveCountyId)
    {
        $this->receiveCountyId = $receiveCountyId;
        $this->apiParas["receiveCountyId"] = $receiveCountyId;
    }
}
