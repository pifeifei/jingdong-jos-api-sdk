<?php

namespace ACES\Request;


class OpenBoModifyWaybillRequest
{
    private $apiParas = array();
    private $version;
    private $orderNo;
    private $wayBillCode;
    private $deptNo;
    private $grossWeight;
    private $grossVolume;
    private $expressItemQty;

    public function getApiMethodName()
    {
        return "jingdong.open.bo.modifyWaybill";
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

    public function getOrderNo()
    {
        return $this->orderNo;
    }

    public function setOrderNo($orderNo)
    {
        $this->orderNo = $orderNo;
        $this->apiParas["orderNo"] = $orderNo;
    }

    public function getWayBillCode()
    {
        return $this->wayBillCode;
    }

    public function setWayBillCode($wayBillCode)
    {
        $this->wayBillCode = $wayBillCode;
        $this->apiParas["wayBillCode"] = $wayBillCode;
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

    public function getGrossWeight()
    {
        return $this->grossWeight;
    }

    public function setGrossWeight($grossWeight)
    {
        $this->grossWeight = $grossWeight;
        $this->apiParas["grossWeight"] = $grossWeight;
    }

    public function getGrossVolume()
    {
        return $this->grossVolume;
    }

    public function setGrossVolume($grossVolume)
    {
        $this->grossVolume = $grossVolume;
        $this->apiParas["grossVolume"] = $grossVolume;
    }

    public function getExpressItemQty()
    {
        return $this->expressItemQty;
    }

    public function setExpressItemQty($expressItemQty)
    {
        $this->expressItemQty = $expressItemQty;
        $this->apiParas["expressItemQty"] = $expressItemQty;
    }
}
