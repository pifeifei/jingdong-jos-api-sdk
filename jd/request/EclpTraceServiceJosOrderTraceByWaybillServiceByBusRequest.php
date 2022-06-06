<?php

class EclpTraceServiceJosOrderTraceByWaybillServiceByBusRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.trace.service.jos.orderTraceByWaybillServiceByBus";
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

                                                        private $venderId;

    public function setVenderId($venderId)
    {
        $this->venderId = $venderId;
         $this->apiParas["venderId"] = $venderId;
    }

    public function getVenderId()
    {
        return $this->venderId;
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

                                                        private $waybillId;

    public function setWaybillId($waybillId)
    {
        $this->waybillId = $waybillId;
         $this->apiParas["waybillId"] = $waybillId;
    }

    public function getWaybillId()
    {
        return $this->waybillId;
    }
}
