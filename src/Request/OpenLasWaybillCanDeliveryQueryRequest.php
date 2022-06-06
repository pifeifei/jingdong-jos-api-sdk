<?php

namespace ACES\Request;


class OpenLasWaybillCanDeliveryQueryRequest
{
    private $apiParas = array();
    private $version;
    private $fromDcName;
    private $pickUpType;
    private $fromAddress;
    private $toAddress;
    private $deptNo;

    public function getApiMethodName()
    {
        return "jingdong.open.lasWaybillCanDelivery.query";
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

    public function getFromDcName()
    {
        return $this->fromDcName;
    }

    public function setFromDcName($fromDcName)
    {
        $this->fromDcName = $fromDcName;
        $this->apiParas["fromDcName"] = $fromDcName;
    }

    public function getPickUpType()
    {
        return $this->pickUpType;
    }

    public function setPickUpType($pickUpType)
    {
        $this->pickUpType = $pickUpType;
        $this->apiParas["pickUpType"] = $pickUpType;
    }

    public function getFromAddress()
    {
        return $this->fromAddress;
    }

    public function setFromAddress($fromAddress)
    {
        $this->fromAddress = $fromAddress;
        $this->apiParas["fromAddress"] = $fromAddress;
    }

    public function getToAddress()
    {
        return $this->toAddress;
    }

    public function setToAddress($toAddress)
    {
        $this->toAddress = $toAddress;
        $this->apiParas["toAddress"] = $toAddress;
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
