<?php

namespace ACES\Request;

class EclpTraceServiceJosOrderTraceByWaybillServiceByBusRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.eclp.trace.service.jos.orderTraceByWaybillServiceByBus';
    }

    public function check()
    {
    }

    public function getUserId()
    {
        return $this->apiParas['userId'];
    }

    public function setUserId($userId)
    {
        $this->apiParas['userId'] = $userId;

        return $this;
    }

    public function getVenderId()
    {
        return $this->apiParas['venderId'];
    }

    public function setVenderId($venderId)
    {
        $this->apiParas['venderId'] = $venderId;

        return $this;
    }

    public function getRole()
    {
        return $this->apiParas['role'];
    }

    public function setRole($role)
    {
        $this->apiParas['role'] = $role;

        return $this;
    }

    public function getBusinessType()
    {
        return $this->apiParas['businessType'];
    }

    public function setBusinessType($businessType)
    {
        $this->apiParas['businessType'] = $businessType;

        return $this;
    }

    public function getCarrierCode()
    {
        return $this->apiParas['carrierCode'];
    }

    public function setCarrierCode($carrierCode)
    {
        $this->apiParas['carrierCode'] = $carrierCode;

        return $this;
    }

    public function getWaybillId()
    {
        return $this->apiParas['waybillId'];
    }

    public function setWaybillId($waybillId)
    {
        $this->apiParas['waybillId'] = $waybillId;

        return $this;
    }
}
