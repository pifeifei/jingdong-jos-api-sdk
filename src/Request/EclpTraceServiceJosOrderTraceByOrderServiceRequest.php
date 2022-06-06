<?php

namespace ACES\Request;


class EclpTraceServiceJosOrderTraceByOrderServiceRequest
{
    private $apiParas = array();
    private $version;
    private $orderId;
    private $role;
    private $userId;

    public function getApiMethodName()
    {
        return "jingdong.eclp.trace.service.jos.OrderTraceByOrderService";
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

    public function getOrderId()
    {
        return $this->orderId;
    }

    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
        $this->apiParas["orderId"] = $orderId;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function setRole($role)
    {
        $this->role = $role;
        $this->apiParas["role"] = $role;
    }

    public function getUserId()
    {
        return $this->userId;
    }

    public function setUserId($userId)
    {
        $this->userId = $userId;
        $this->apiParas["userId"] = $userId;
    }
}
