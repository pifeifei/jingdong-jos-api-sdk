<?php

namespace ACES\Request;


class EclpTraceServiceJosOrderTraceByWaybillServiceRequest
{
    private $apiParas = array();
    private $version;
    private $waybillId;
    private $carrierCode;
    private $role;
    private $userId;

    public function getApiMethodName()
    {
        return "jingdong.eclp.trace.service.jos.OrderTraceByWaybillService";
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

    public function getWaybillId()
    {
        return $this->waybillId;
    }

    public function setWaybillId($waybillId)
    {
        $this->waybillId = $waybillId;
        $this->apiParas["waybillId"] = $waybillId;
    }

    public function getCarrierCode()
    {
        return $this->carrierCode;
    }

    public function setCarrierCode($carrierCode)
    {
        $this->carrierCode = $carrierCode;
        $this->apiParas["carrierCode"] = $carrierCode;
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
