<?php

namespace ACES\Request;


class ServiceOrderHandleOrderResultRequest
{
    private $apiParas = array();
    private $version;
    private $recheckResultDesc;
    private $serviceCode;
    private $deptCode;
    private $recheckResult;

    public function getApiMethodName()
    {
        return "jingdong.service.order.handleOrderResult";
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

    public function getRecheckResultDesc()
    {
        return $this->recheckResultDesc;
    }

    public function setRecheckResultDesc($recheckResultDesc)
    {
        $this->recheckResultDesc = $recheckResultDesc;
        $this->apiParas["recheckResultDesc"] = $recheckResultDesc;
    }

    public function getServiceCode()
    {
        return $this->serviceCode;
    }

    public function setServiceCode($serviceCode)
    {
        $this->serviceCode = $serviceCode;
        $this->apiParas["serviceCode"] = $serviceCode;
    }

    public function getDeptCode()
    {
        return $this->deptCode;
    }

    public function setDeptCode($deptCode)
    {
        $this->deptCode = $deptCode;
        $this->apiParas["deptCode"] = $deptCode;
    }

    public function getRecheckResult()
    {
        return $this->recheckResult;
    }

    public function setRecheckResult($recheckResult)
    {
        $this->recheckResult = $recheckResult;
        $this->apiParas["recheckResult"] = $recheckResult;
    }
}
