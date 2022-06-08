<?php

namespace ACES\Request;

class ServiceOrderSubmitCommandRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.service.order.submitCommand';
    }

    public function check()
    {
    }

    public function getOptType()
    {
        return $this->apiParas['optType'];
    }

    public function setOptType($optType)
    {
        $this->apiParas['optType'] = $optType;

        return $this;
    }

    public function getOptDesc()
    {
        return $this->apiParas['optDesc'];
    }

    public function setOptDesc($optDesc)
    {
        $this->apiParas['optDesc'] = $optDesc;

        return $this;
    }

    public function getServiceCode()
    {
        return $this->apiParas['serviceCode'];
    }

    public function setServiceCode($serviceCode)
    {
        $this->apiParas['serviceCode'] = $serviceCode;

        return $this;
    }

    public function getDeptCode()
    {
        return $this->apiParas['deptCode'];
    }

    public function setDeptCode($deptCode)
    {
        $this->apiParas['deptCode'] = $deptCode;

        return $this;
    }
}
