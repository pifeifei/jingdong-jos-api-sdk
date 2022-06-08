<?php

namespace ACES\Request;

class EclpTraceServiceJosOrderTraceByOrderServiceGetOrderTraceByISVOrderIdRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.eclp.trace.service.jos.OrderTraceByOrderService.getOrderTraceByISVOrderId';
    }

    public function check()
    {
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

    public function getOrderId()
    {
        return $this->apiParas['orderId'];
    }

    public function setOrderId($orderId)
    {
        $this->apiParas['orderId'] = $orderId;

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

    public function getBusinessType()
    {
        return $this->apiParas['businessType'];
    }

    public function setBusinessType($businessType)
    {
        $this->apiParas['businessType'] = $businessType;

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
