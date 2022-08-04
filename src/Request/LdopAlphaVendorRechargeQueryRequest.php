<?php

namespace ACES\Request;

class LdopAlphaVendorRechargeQueryRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.ldop.alpha.vendor.recharge.query';
    }

    public function check()
    {
    }

    public function getVendorCode()
    {
        return $this->apiParas['vendorCode'];
    }

    public function setVendorCode($vendorCode)
    {
        $this->apiParas['vendorCode'] = $vendorCode;

        return $this;
    }

    public function getProviderId()
    {
        return $this->apiParas['providerId'];
    }

    public function setProviderId($providerId)
    {
        $this->apiParas['providerId'] = $providerId;

        return $this;
    }

    public function getBranchCode()
    {
        return $this->apiParas['branchCode'];
    }

    public function setBranchCode($branchCode)
    {
        $this->apiParas['branchCode'] = $branchCode;

        return $this;
    }

    public function getStartTime()
    {
        return $this->apiParas['startTime'];
    }

    public function setStartTime($startTime)
    {
        $this->apiParas['startTime'] = $startTime;

        return $this;
    }

    public function getEndTime()
    {
        return $this->apiParas['endTime'];
    }

    public function setEndTime($endTime)
    {
        $this->apiParas['endTime'] = $endTime;

        return $this;
    }
}
