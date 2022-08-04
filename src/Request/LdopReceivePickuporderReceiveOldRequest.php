<?php

namespace ACES\Request;

class LdopReceivePickuporderReceiveOldRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.ldop.receive.pickuporder.receive.old';
    }

    public function check()
    {
    }

    public function getPickupAddress()
    {
        return $this->apiParas['pickupAddress'];
    }

    public function setPickupAddress($pickupAddress)
    {
        $this->apiParas['pickupAddress'] = $pickupAddress;

        return $this;
    }

    public function getPickupName()
    {
        return $this->apiParas['pickupName'];
    }

    public function setPickupName($pickupName)
    {
        $this->apiParas['pickupName'] = $pickupName;

        return $this;
    }

    public function getPickupTel()
    {
        return $this->apiParas['pickupTel'];
    }

    public function setPickupTel($pickupTel)
    {
        $this->apiParas['pickupTel'] = $pickupTel;

        return $this;
    }

    public function getCustomerTel()
    {
        return $this->apiParas['customerTel'];
    }

    public function setCustomerTel($customerTel)
    {
        $this->apiParas['customerTel'] = $customerTel;

        return $this;
    }

    public function getCustomerCode()
    {
        return $this->apiParas['customerCode'];
    }

    public function setCustomerCode($customerCode)
    {
        $this->apiParas['customerCode'] = $customerCode;

        return $this;
    }

    public function getBackAddress()
    {
        return $this->apiParas['backAddress'];
    }

    public function setBackAddress($backAddress)
    {
        $this->apiParas['backAddress'] = $backAddress;

        return $this;
    }

    public function getCustomerContract()
    {
        return $this->apiParas['customerContract'];
    }

    public function setCustomerContract($customerContract)
    {
        $this->apiParas['customerContract'] = $customerContract;

        return $this;
    }

    public function getDesp()
    {
        return $this->apiParas['desp'];
    }

    public function setDesp($desp)
    {
        $this->apiParas['desp'] = $desp;

        return $this;
    }

    public function getOrderId()
    {
        return $this->apiParas['orderId'];
    }

    public function setOrderId($orderId)
    {
        $this->apiParas['orderId'] = $orderId;

        return $this;
    }

    public function getWeight()
    {
        return $this->apiParas['weight'];
    }

    public function setWeight($weight)
    {
        $this->apiParas['weight'] = $weight;

        return $this;
    }

    public function getRemark()
    {
        return $this->apiParas['remark'];
    }

    public function setRemark($remark)
    {
        $this->apiParas['remark'] = $remark;

        return $this;
    }

    public function getVolume()
    {
        return $this->apiParas['volume'];
    }

    public function setVolume($volume)
    {
        $this->apiParas['volume'] = $volume;

        return $this;
    }

    public function getValueAddService()
    {
        return $this->apiParas['valueAddService'];
    }

    public function setValueAddService($valueAddService)
    {
        $this->apiParas['valueAddService'] = $valueAddService;

        return $this;
    }

    public function getGuaranteeValue()
    {
        return $this->apiParas['guaranteeValue'];
    }

    public function setGuaranteeValue($guaranteeValue)
    {
        $this->apiParas['guaranteeValue'] = $guaranteeValue;

        return $this;
    }

    public function getGuaranteeValueAmount()
    {
        return $this->apiParas['guaranteeValueAmount'];
    }

    public function setGuaranteeValueAmount($guaranteeValueAmount)
    {
        $this->apiParas['guaranteeValueAmount'] = $guaranteeValueAmount;

        return $this;
    }

    public function getPickupStartTime()
    {
        return $this->apiParas['pickupStartTime'];
    }

    public function setPickupStartTime($pickupStartTime)
    {
        $this->apiParas['pickupStartTime'] = $pickupStartTime;

        return $this;
    }

    public function getPickupEndTime()
    {
        return $this->apiParas['pickupEndTime'];
    }

    public function setPickupEndTime($pickupEndTime)
    {
        $this->apiParas['pickupEndTime'] = $pickupEndTime;

        return $this;
    }

    public function getProductId()
    {
        return $this->apiParas['productId'];
    }

    public function setProductId($productId)
    {
        $this->apiParas['productId'] = $productId;

        return $this;
    }

    public function getProductName()
    {
        return $this->apiParas['productName'];
    }

    public function setProductName($productName)
    {
        $this->apiParas['productName'] = $productName;

        return $this;
    }

    public function getProductCount()
    {
        return $this->apiParas['productCount'];
    }

    public function setProductCount($productCount)
    {
        $this->apiParas['productCount'] = $productCount;

        return $this;
    }

    public function getSnCode()
    {
        return $this->apiParas['snCode'];
    }

    public function setSnCode($snCode)
    {
        $this->apiParas['snCode'] = $snCode;

        return $this;
    }
}
