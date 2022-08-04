<?php

namespace ACES\Request;

class LdopAlphaVendorStockQueryByProviderCodeRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.ldop.alpha.vendor.stock.queryByProviderCode';
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

    public function getProviderCode()
    {
        return $this->apiParas['providerCode'];
    }

    public function setProviderCode($providerCode)
    {
        $this->apiParas['providerCode'] = $providerCode;

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
