<?php

namespace ACES\Request;


class EclpCoCancelLwbMainRequest
{
    private $apiParas = array();
    private $version;
    private $deptNo;
    private $orderNo;
    private $lwbNo;

    public function getApiMethodName()
    {
        return "jingdong.eclp.co.cancelLwbMain";
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

    public function getLwbNo()
    {
        return $this->lwbNo;
    }

    public function setLwbNo($lwbNo)
    {
        $this->lwbNo = $lwbNo;
        $this->apiParas["lwbNo"] = $lwbNo;
    }
}
