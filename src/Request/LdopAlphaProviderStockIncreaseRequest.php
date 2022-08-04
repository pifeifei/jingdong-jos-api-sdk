<?php

namespace ACES\Request;

class LdopAlphaProviderStockIncreaseRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.ldop.alpha.provider.stock.increase';
    }

    public function check()
    {
    }

    public function getOperatorCode()
    {
        return $this->apiParas['operatorCode'];
    }

    public function setOperatorCode($operatorCode)
    {
        $this->apiParas['operatorCode'] = $operatorCode;

        return $this;
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

    public function getVendorName()
    {
        return $this->apiParas['vendorName'];
    }

    public function setVendorName($vendorName)
    {
        $this->apiParas['vendorName'] = $vendorName;

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

    public function getProviderCode()
    {
        return $this->apiParas['providerCode'];
    }

    public function setProviderCode($providerCode)
    {
        $this->apiParas['providerCode'] = $providerCode;

        return $this;
    }

    public function getProviderName()
    {
        return $this->apiParas['providerName'];
    }

    public function setProviderName($providerName)
    {
        $this->apiParas['providerName'] = $providerName;

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

    public function getBranchName()
    {
        return $this->apiParas['branchName'];
    }

    public function setBranchName($branchName)
    {
        $this->apiParas['branchName'] = $branchName;

        return $this;
    }

    public function getAmount()
    {
        return $this->apiParas['amount'];
    }

    public function setAmount($amount)
    {
        $this->apiParas['amount'] = $amount;

        return $this;
    }

    public function getOperatorTime()
    {
        return $this->apiParas['operatorTime'];
    }

    public function setOperatorTime($operatorTime)
    {
        $this->apiParas['operatorTime'] = $operatorTime;

        return $this;
    }

    public function getOperatorName()
    {
        return $this->apiParas['operatorName'];
    }

    public function setOperatorName($operatorName)
    {
        $this->apiParas['operatorName'] = $operatorName;

        return $this;
    }

    public function getState()
    {
        return $this->apiParas['state'];
    }

    public function setState($state)
    {
        $this->apiParas['state'] = $state;

        return $this;
    }
}
