<?php

namespace ACES\Request;

class OpenOmbJosModifyRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.open.omb.jos.modify';
    }

    public function check()
    {
    }

    public function getVendorCode()
    {
        return $this->apiParas['vendorCode'];
    }

    public function setVendorCode($vendorCode)
    {
        $this->apiParas['vendorCode'] = $vendorCode;

        return $this;
    }

    public function getWeight()
    {
        return $this->apiParas['weight'];
    }

    public function setWeight($weight)
    {
        $this->apiParas['weight'] = $weight;

        return $this;
    }

    public function getReceiveTownName()
    {
        return $this->apiParas['receiveTownName'];
    }

    public function setReceiveTownName($receiveTownName)
    {
        $this->apiParas['receiveTownName'] = $receiveTownName;

        return $this;
    }

    public function getReceiveCityName()
    {
        return $this->apiParas['receiveCityName'];
    }

    public function setReceiveCityName($receiveCityName)
    {
        $this->apiParas['receiveCityName'] = $receiveCityName;

        return $this;
    }

    public function getOperateTime()
    {
        return $this->apiParas['operateTime'];
    }

    public function setOperateTime($operateTime)
    {
        $this->apiParas['operateTime'] = $operateTime;

        return $this;
    }

    public function getReceiveTel()
    {
        return $this->apiParas['receiveTel'];
    }

    public function setReceiveTel($receiveTel)
    {
        $this->apiParas['receiveTel'] = $receiveTel;

        return $this;
    }

    public function getReceiveMobile()
    {
        return $this->apiParas['receiveMobile'];
    }

    public function setReceiveMobile($receiveMobile)
    {
        $this->apiParas['receiveMobile'] = $receiveMobile;

        return $this;
    }

    public function getReceiveCountyName()
    {
        return $this->apiParas['receiveCountyName'];
    }

    public function setReceiveCountyName($receiveCountyName)
    {
        $this->apiParas['receiveCountyName'] = $receiveCountyName;

        return $this;
    }

    public function getReceiveProvinceId()
    {
        return $this->apiParas['receiveProvinceId'];
    }

    public function setReceiveProvinceId($receiveProvinceId)
    {
        $this->apiParas['receiveProvinceId'] = $receiveProvinceId;

        return $this;
    }

    public function getReceiveTownId()
    {
        return $this->apiParas['receiveTownId'];
    }

    public function setReceiveTownId($receiveTownId)
    {
        $this->apiParas['receiveTownId'] = $receiveTownId;

        return $this;
    }

    public function getOperateUser()
    {
        return $this->apiParas['operateUser'];
    }

    public function setOperateUser($operateUser)
    {
        $this->apiParas['operateUser'] = $operateUser;

        return $this;
    }

    public function getWaybillCode()
    {
        return $this->apiParas['waybillCode'];
    }

    public function setWaybillCode($waybillCode)
    {
        $this->apiParas['waybillCode'] = $waybillCode;

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

    public function getOrderNo()
    {
        return $this->apiParas['orderNo'];
    }

    public function setOrderNo($orderNo)
    {
        $this->apiParas['orderNo'] = $orderNo;

        return $this;
    }

    public function getVolume()
    {
        return $this->apiParas['volume'];
    }

    public function setVolume($volume)
    {
        $this->apiParas['volume'] = $volume;

        return $this;
    }

    public function getReceiveName()
    {
        return $this->apiParas['receiveName'];
    }

    public function setReceiveName($receiveName)
    {
        $this->apiParas['receiveName'] = $receiveName;

        return $this;
    }

    public function getReceiveProvinceName()
    {
        return $this->apiParas['receiveProvinceName'];
    }

    public function setReceiveProvinceName($receiveProvinceName)
    {
        $this->apiParas['receiveProvinceName'] = $receiveProvinceName;

        return $this;
    }

    public function getSenderStation()
    {
        return $this->apiParas['senderStation'];
    }

    public function setSenderStation($senderStation)
    {
        $this->apiParas['senderStation'] = $senderStation;

        return $this;
    }

    public function getDeliverStation()
    {
        return $this->apiParas['deliverStation'];
    }

    public function setDeliverStation($deliverStation)
    {
        $this->apiParas['deliverStation'] = $deliverStation;

        return $this;
    }

    public function getReceiveAddress()
    {
        return $this->apiParas['receiveAddress'];
    }

    public function setReceiveAddress($receiveAddress)
    {
        $this->apiParas['receiveAddress'] = $receiveAddress;

        return $this;
    }

    public function getReceiveCityId()
    {
        return $this->apiParas['receiveCityId'];
    }

    public function setReceiveCityId($receiveCityId)
    {
        $this->apiParas['receiveCityId'] = $receiveCityId;

        return $this;
    }

    public function getReceiveCountyId()
    {
        return $this->apiParas['receiveCountyId'];
    }

    public function setReceiveCountyId($receiveCountyId)
    {
        $this->apiParas['receiveCountyId'] = $receiveCountyId;

        return $this;
    }
}
