<?php

namespace ACES\Request;


class LdopMiddleWaybillWaybillPickupApiRequest
{
    private $apiParas = array();
    private $version;
    private $vendorCode;
    private $pickupCode;

    public function getApiMethodName()
    {
        return "jingdong.ldop.middle.waybill.WaybillPickupApi";
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

    public function getVendorCode()
    {
        return $this->vendorCode;
    }

    public function setVendorCode($vendorCode)
    {
        $this->vendorCode = $vendorCode;
        $this->apiParas["vendorCode"] = $vendorCode;
    }

    public function getPickupCode()
    {
        return $this->pickupCode;
    }

    public function setPickupCode($pickupCode)
    {
        $this->pickupCode = $pickupCode;
        $this->apiParas["pickupCode"] = $pickupCode;
    }
}