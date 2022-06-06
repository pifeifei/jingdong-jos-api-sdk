<?php

namespace ACES\Request;


class LdopAlphaProviderStockIncreaseRequest
{
    private $apiParas = array();
    private $version;
    private $operatorCode;
    private $vendorCode;
    private $vendorName;
    private $providerId;
    private $providerCode;
    private $providerName;
    private $branchCode;
    private $branchName;
    private $amount;
    private $operatorTime;
    private $operatorName;
    private $state;

    public function getApiMethodName()
    {
        return "jingdong.ldop.alpha.provider.stock.increase";
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

    public function getOperatorCode()
    {
        return $this->operatorCode;
    }

    public function setOperatorCode($operatorCode)
    {
        $this->operatorCode = $operatorCode;
        $this->apiParas["operatorCode"] = $operatorCode;
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

    public function getVendorName()
    {
        return $this->vendorName;
    }

    public function setVendorName($vendorName)
    {
        $this->vendorName = $vendorName;
        $this->apiParas["vendorName"] = $vendorName;
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

    public function getProviderCode()
    {
        return $this->providerCode;
    }

    public function setProviderCode($providerCode)
    {
        $this->providerCode = $providerCode;
        $this->apiParas["providerCode"] = $providerCode;
    }

    public function getProviderName()
    {
        return $this->providerName;
    }

    public function setProviderName($providerName)
    {
        $this->providerName = $providerName;
        $this->apiParas["providerName"] = $providerName;
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

    public function getBranchName()
    {
        return $this->branchName;
    }

    public function setBranchName($branchName)
    {
        $this->branchName = $branchName;
        $this->apiParas["branchName"] = $branchName;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;
        $this->apiParas["amount"] = $amount;
    }

    public function getOperatorTime()
    {
        return $this->operatorTime;
    }

    public function setOperatorTime($operatorTime)
    {
        $this->operatorTime = $operatorTime;
        $this->apiParas["operatorTime"] = $operatorTime;
    }

    public function getOperatorName()
    {
        return $this->operatorName;
    }

    public function setOperatorName($operatorName)
    {
        $this->operatorName = $operatorName;
        $this->apiParas["operatorName"] = $operatorName;
    }

    public function getState()
    {
        return $this->state;
    }

    public function setState($state)
    {
        $this->state = $state;
        $this->apiParas["state"] = $state;
    }
}
