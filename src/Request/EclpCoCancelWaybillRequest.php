<?php

namespace ACES\Request;

class EclpCoCancelWaybillRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.eclp.co.cancelWaybill';
    }

    public function check()
    {
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

    public function getWbNo()
    {
        return $this->apiParas['wbNo'];
    }

    public function setWbNo($wbNo)
    {
        $this->apiParas['wbNo'] = $wbNo;

        return $this;
    }

    public function getLwbNo()
    {
        return $this->apiParas['lwbNo'];
    }

    public function setLwbNo($lwbNo)
    {
        $this->apiParas['lwbNo'] = $lwbNo;

        return $this;
    }

    public function getReason()
    {
        return $this->apiParas['reason'];
    }

    public function setReason($reason)
    {
        $this->apiParas['reason'] = $reason;

        return $this;
    }

    public function getCancelMode()
    {
        return $this->apiParas['cancelMode'];
    }

    public function setCancelMode($cancelMode)
    {
        $this->apiParas['cancelMode'] = $cancelMode;

        return $this;
    }
}
