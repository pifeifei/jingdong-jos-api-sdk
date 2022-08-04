<?php

namespace ACES\Request;

class LdopAlphaVendorStockQueryRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.ldop.alpha.vendor.stock.query';
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
}
