<?php

namespace ACES\Request;

class ServiceOrderHandleOrderResultRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.service.order.handleOrderResult';
    }

    public function check()
    {
    }

    public function getRecheckResultDesc()
    {
        return $this->apiParas['recheckResultDesc'];
    }

    public function setRecheckResultDesc($recheckResultDesc)
    {
        $this->apiParas['recheckResultDesc'] = $recheckResultDesc;

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

    public function getRecheckResult()
    {
        return $this->apiParas['recheckResult'];
    }

    public function setRecheckResult($recheckResult)
    {
        $this->apiParas['recheckResult'] = $recheckResult;

        return $this;
    }
}
