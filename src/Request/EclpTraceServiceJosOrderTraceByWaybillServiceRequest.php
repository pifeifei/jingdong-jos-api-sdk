<?php

namespace ACES\Request;

class EclpTraceServiceJosOrderTraceByWaybillServiceRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.eclp.trace.service.jos.OrderTraceByWaybillService';
    }

    public function check()
    {
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

    public function getCarrierCode()
    {
        return $this->apiParas['carrierCode'];
    }

    public function setCarrierCode($carrierCode)
    {
        $this->apiParas['carrierCode'] = $carrierCode;

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

    public function getUserId()
    {
        return $this->apiParas['userId'];
    }

    public function setUserId($userId)
    {
        $this->apiParas['userId'] = $userId;

        return $this;
    }
}
