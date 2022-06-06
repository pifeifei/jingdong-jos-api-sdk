<?php

class ServiceOrderSubmitCommandRequest
{
    private $apiParas = array();

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

    private $version;

    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function getVersion()
    {
        return $this->version;
    }
                                                                                                                                    private $optType;

    public function setOptType($optType)
    {
        $this->optType = $optType;
         $this->apiParas["optType"] = $optType;
    }

    public function getOptType()
    {
        return $this->optType;
    }

                                                                                    private $optDesc;

    public function setOptDesc($optDesc)
    {
        $this->optDesc = $optDesc;
         $this->apiParas["optDesc"] = $optDesc;
    }

    public function getOptDesc()
    {
        return $this->optDesc;
    }

                                                        private $serviceCode;

    public function setServiceCode($serviceCode)
    {
        $this->serviceCode = $serviceCode;
         $this->apiParas["serviceCode"] = $serviceCode;
    }

    public function getServiceCode()
    {
        return $this->serviceCode;
    }

                                                        private $deptCode;

    public function setDeptCode($deptCode)
    {
        $this->deptCode = $deptCode;
         $this->apiParas["deptCode"] = $deptCode;
    }

    public function getDeptCode()
    {
        return $this->deptCode;
    }
}
