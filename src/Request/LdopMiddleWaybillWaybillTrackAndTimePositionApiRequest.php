<?php

namespace ACES\Request;


class LdopMiddleWaybillWaybillTrackAndTimePositionApiRequest
{
    private $apiParas = array();
    private $version;
    private $waybillCode;
    private $gpsTime;
    private $customerCode;

    public function getApiMethodName()
    {
        return "jingdong.ldop.middle.waybill.WaybillTrackAndTimePositionApi";
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

    public function getWaybillCode()
    {
        return $this->waybillCode;
    }

    public function setWaybillCode($waybillCode)
    {
        $this->waybillCode = $waybillCode;
        $this->apiParas["waybillCode"] = $waybillCode;
    }

    public function getGpsTime()
    {
        return $this->gpsTime;
    }

    public function setGpsTime($gpsTime)
    {
        $this->gpsTime = $gpsTime;
        $this->apiParas["gpsTime"] = $gpsTime;
    }

    public function getCustomerCode()
    {
        return $this->customerCode;
    }

    public function setCustomerCode($customerCode)
    {
        $this->customerCode = $customerCode;
        $this->apiParas["customerCode"] = $customerCode;
    }
}
