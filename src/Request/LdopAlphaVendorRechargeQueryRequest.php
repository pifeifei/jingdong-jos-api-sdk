<?php

namespace ACES\Request;


class LdopAlphaVendorRechargeQueryRequest
{
    private $apiParas = array();
    private $version;
    private $vendorCode;
    private $providerId;
    private $branchCode;
    private $startTime;
    private $endTime;

    public function getApiMethodName()
    {
        return "jingdong.ldop.alpha.vendor.recharge.query";
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

    public function getProviderId()
    {
        return $this->providerId;
    }

    public function setProviderId($providerId)
    {
        $this->providerId = $providerId;
        $this->apiParas["providerId"] = $providerId;
    }

    public function getBranchCode()
    {
        return $this->branchCode;
    }

    public function setBranchCode($branchCode)
    {
        $this->branchCode = $branchCode;
        $this->apiParas["branchCode"] = $branchCode;
    }

    public function getStartTime()
    {
        return $this->startTime;
    }

    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
        $this->apiParas["startTime"] = $startTime;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }

    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
        $this->apiParas["endTime"] = $endTime;
    }
}
