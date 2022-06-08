<?php

namespace ACES\Request;

class EclpTraceServiceJosOrderTraceByOrderServiceRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.eclp.trace.service.jos.OrderTraceByOrderService';
    }

    public function check()
    {
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
