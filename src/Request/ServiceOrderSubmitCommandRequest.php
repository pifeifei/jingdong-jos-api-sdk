<?php

namespace ACES\Request;


class ServiceOrderSubmitCommandRequest
{
    private $apiParas = array();
    private $version;
    private $optType;
    private $optDesc;
    private $serviceCode;
    private $deptCode;

    public function getApiMethodName()
    {
        return "jingdong.service.order.submitCommand";
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

    public function getOptType()
    {
        return $this->optType;
    }

    public function setOptType($optType)
    {
        $this->optType = $optType;
        $this->apiParas["optType"] = $optType;
    }

    public function getOptDesc()
    {
        return $this->optDesc;
    }

    public function setOptDesc($optDesc)
    {
        $this->optDesc = $optDesc;
        $this->apiParas["optDesc"] = $optDesc;
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
}
