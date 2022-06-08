<?php

namespace ACES\Request;

class OpenBoModifyWaybillRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.open.bo.modifyWaybill';
    }

    public function check()
    {
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

    public function getWayBillCode()
    {
        return $this->apiParas['wayBillCode'];
    }

    public function setWayBillCode($wayBillCode)
    {
        $this->apiParas['wayBillCode'] = $wayBillCode;

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

    public function getGrossWeight()
    {
        return $this->apiParas['grossWeight'];
    }

    public function setGrossWeight($grossWeight)
    {
        $this->apiParas['grossWeight'] = $grossWeight;

        return $this;
    }

    public function getGrossVolume()
    {
        return $this->apiParas['grossVolume'];
    }

    public function setGrossVolume($grossVolume)
    {
        $this->apiParas['grossVolume'] = $grossVolume;

        return $this;
    }

    public function getExpressItemQty()
    {
        return $this->apiParas['expressItemQty'];
    }

    public function setExpressItemQty($expressItemQty)
    {
        $this->apiParas['expressItemQty'] = $expressItemQty;

        return $this;
    }
}
