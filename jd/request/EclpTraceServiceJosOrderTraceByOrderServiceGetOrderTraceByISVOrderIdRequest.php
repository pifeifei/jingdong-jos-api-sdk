<?php

class EclpTraceServiceJosOrderTraceByOrderServiceGetOrderTraceByISVOrderIdRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.trace.service.jos.OrderTraceByOrderService.getOrderTraceByISVOrderId";
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
                                                                                                                                    private $role;

    public function setRole($role)
    {
        $this->role = $role;
         $this->apiParas["role"] = $role;
    }

    public function getRole()
    {
        return $this->role;
    }

                                                                                    private $orderId;

    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
         $this->apiParas["orderId"] = $orderId;
    }

    public function getOrderId()
    {
        return $this->orderId;
    }

                                                        private $carrierCode;

    public function setCarrierCode($carrierCode)
    {
        $this->carrierCode = $carrierCode;
         $this->apiParas["carrierCode"] = $carrierCode;
    }

    public function getCarrierCode()
    {
        return $this->carrierCode;
    }

                                                                                    private $businessType;

    public function setBusinessType($businessType)
    {
        $this->businessType = $businessType;
         $this->apiParas["businessType"] = $businessType;
    }

    public function getBusinessType()
    {
        return $this->businessType;
    }

                                                        private $userId;

    public function setUserId($userId)
    {
        $this->userId = $userId;
         $this->apiParas["userId"] = $userId;
    }

    public function getUserId()
    {
        return $this->userId;
    }
}
