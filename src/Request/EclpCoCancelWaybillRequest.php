<?php

namespace ACES\Request;


class EclpCoCancelWaybillRequest
{
    private $apiParas = array();
    private $version;
    private $deptNo;
    private $orderNo;
    private $wbNo;
    private $lwbNo;
    private $reason;
    private $cancelMode;

    public function getApiMethodName()
    {
        return "jingdong.eclp.co.cancelWaybill";
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

    public function getWbNo()
    {
        return $this->wbNo;
    }

    public function setWbNo($wbNo)
    {
        $this->wbNo = $wbNo;
        $this->apiParas["wbNo"] = $wbNo;
    }

    public function getLwbNo()
    {
        return $this->lwbNo;
    }

    public function setLwbNo($lwbNo)
    {
        $this->lwbNo = $lwbNo;
        $this->apiParas["lwbNo"] = $lwbNo;
    }

    public function getReason()
    {
        return $this->reason;
    }

    public function setReason($reason)
    {
        $this->reason = $reason;
        $this->apiParas["reason"] = $reason;
    }

    public function getCancelMode()
    {
        return $this->cancelMode;
    }

    public function setCancelMode($cancelMode)
    {
        $this->cancelMode = $cancelMode;
        $this->apiParas["cancelMode"] = $cancelMode;
    }
}
