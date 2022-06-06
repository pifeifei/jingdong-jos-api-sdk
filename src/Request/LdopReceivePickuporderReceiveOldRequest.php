<?php

namespace ACES\Request;


class LdopReceivePickuporderReceiveOldRequest
{
    private $apiParas = array();
    private $version;
    private $pickupAddress;
    private $pickupName;
    private $pickupTel;
    private $customerTel;
    private $customerCode;
    private $backAddress;
    private $customerContract;
    private $desp;
    private $orderId;
    private $weight;
    private $remark;
    private $volume;
    private $valueAddService;
    private $guaranteeValue;
    private $guaranteeValueAmount;
    private $pickupStartTime;
    private $pickupEndTime;
    private $productId;
    private $productName;
    private $productCount;
    private $snCode;

    public function getApiMethodName()
    {
        return "jingdong.ldop.receive.pickuporder.receive.old";
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

    public function getPickupAddress()
    {
        return $this->pickupAddress;
    }

    public function setPickupAddress($pickupAddress)
    {
        $this->pickupAddress = $pickupAddress;
        $this->apiParas["pickupAddress"] = $pickupAddress;
    }

    public function getPickupName()
    {
        return $this->pickupName;
    }

    public function setPickupName($pickupName)
    {
        $this->pickupName = $pickupName;
        $this->apiParas["pickupName"] = $pickupName;
    }

    public function getPickupTel()
    {
        return $this->pickupTel;
    }

    public function setPickupTel($pickupTel)
    {
        $this->pickupTel = $pickupTel;
        $this->apiParas["pickupTel"] = $pickupTel;
    }

    public function getCustomerTel()
    {
        return $this->customerTel;
    }

    public function setCustomerTel($customerTel)
    {
        $this->customerTel = $customerTel;
        $this->apiParas["customerTel"] = $customerTel;
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

    public function getBackAddress()
    {
        return $this->backAddress;
    }

    public function setBackAddress($backAddress)
    {
        $this->backAddress = $backAddress;
        $this->apiParas["backAddress"] = $backAddress;
    }

    public function getCustomerContract()
    {
        return $this->customerContract;
    }

    public function setCustomerContract($customerContract)
    {
        $this->customerContract = $customerContract;
        $this->apiParas["customerContract"] = $customerContract;
    }

    public function getDesp()
    {
        return $this->desp;
    }

    public function setDesp($desp)
    {
        $this->desp = $desp;
        $this->apiParas["desp"] = $desp;
    }

    public function getOrderId()
    {
        return $this->orderId;
    }

    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
        $this->apiParas["orderId"] = $orderId;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;
        $this->apiParas["weight"] = $weight;
    }

    public function getRemark()
    {
        return $this->remark;
    }

    public function setRemark($remark)
    {
        $this->remark = $remark;
        $this->apiParas["remark"] = $remark;
    }

    public function getVolume()
    {
        return $this->volume;
    }

    public function setVolume($volume)
    {
        $this->volume = $volume;
        $this->apiParas["volume"] = $volume;
    }

    public function getValueAddService()
    {
        return $this->valueAddService;
    }

    public function setValueAddService($valueAddService)
    {
        $this->valueAddService = $valueAddService;
        $this->apiParas["valueAddService"] = $valueAddService;
    }

    public function getGuaranteeValue()
    {
        return $this->guaranteeValue;
    }

    public function setGuaranteeValue($guaranteeValue)
    {
        $this->guaranteeValue = $guaranteeValue;
        $this->apiParas["guaranteeValue"] = $guaranteeValue;
    }

    public function getGuaranteeValueAmount()
    {
        return $this->guaranteeValueAmount;
    }

    public function setGuaranteeValueAmount($guaranteeValueAmount)
    {
        $this->guaranteeValueAmount = $guaranteeValueAmount;
        $this->apiParas["guaranteeValueAmount"] = $guaranteeValueAmount;
    }

    public function getPickupStartTime()
    {
        return $this->pickupStartTime;
    }

    public function setPickupStartTime($pickupStartTime)
    {
        $this->pickupStartTime = $pickupStartTime;
        $this->apiParas["pickupStartTime"] = $pickupStartTime;
    }

    public function getPickupEndTime()
    {
        return $this->pickupEndTime;
    }

    public function setPickupEndTime($pickupEndTime)
    {
        $this->pickupEndTime = $pickupEndTime;
        $this->apiParas["pickupEndTime"] = $pickupEndTime;
    }

    public function getProductId()
    {
        return $this->productId;
    }

    public function setProductId($productId)
    {
        $this->productId = $productId;
        $this->apiParas["productId"] = $productId;
    }

    public function getProductName()
    {
        return $this->productName;
    }

    public function setProductName($productName)
    {
        $this->productName = $productName;
        $this->apiParas["productName"] = $productName;
    }

    public function getProductCount()
    {
        return $this->productCount;
    }

    public function setProductCount($productCount)
    {
        $this->productCount = $productCount;
        $this->apiParas["productCount"] = $productCount;
    }

    public function getSnCode()
    {
        return $this->snCode;
    }

    public function setSnCode($snCode)
    {
        $this->snCode = $snCode;
        $this->apiParas["snCode"] = $snCode;
    }
}
