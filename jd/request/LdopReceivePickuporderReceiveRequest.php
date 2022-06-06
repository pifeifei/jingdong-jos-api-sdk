<?php

class LdopReceivePickuporderReceiveRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ldop.receive.pickuporder.receive";
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

    private $version;

    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function getVersion()
    {
        return $this->version;
    }
                                                                                                                                    private $pickupAddress;

    public function setPickupAddress($pickupAddress)
    {
        $this->pickupAddress = $pickupAddress;
         $this->apiParas["pickupAddress"] = $pickupAddress;
    }

    public function getPickupAddress()
    {
        return $this->pickupAddress;
    }

                                                        private $pickupName;

    public function setPickupName($pickupName)
    {
        $this->pickupName = $pickupName;
         $this->apiParas["pickupName"] = $pickupName;
    }

    public function getPickupName()
    {
        return $this->pickupName;
    }

                                                        private $pickupTel;

    public function setPickupTel($pickupTel)
    {
        $this->pickupTel = $pickupTel;
         $this->apiParas["pickupTel"] = $pickupTel;
    }

    public function getPickupTel()
    {
        return $this->pickupTel;
    }

                                                        private $customerTel;

    public function setCustomerTel($customerTel)
    {
        $this->customerTel = $customerTel;
         $this->apiParas["customerTel"] = $customerTel;
    }

    public function getCustomerTel()
    {
        return $this->customerTel;
    }

                                                        private $customerCode;

    public function setCustomerCode($customerCode)
    {
        $this->customerCode = $customerCode;
         $this->apiParas["customerCode"] = $customerCode;
    }

    public function getCustomerCode()
    {
        return $this->customerCode;
    }

                                                                                    private $backAddress;

    public function setBackAddress($backAddress)
    {
        $this->backAddress = $backAddress;
         $this->apiParas["backAddress"] = $backAddress;
    }

    public function getBackAddress()
    {
        return $this->backAddress;
    }

                                                        private $customerContract;

    public function setCustomerContract($customerContract)
    {
        $this->customerContract = $customerContract;
         $this->apiParas["customerContract"] = $customerContract;
    }

    public function getCustomerContract()
    {
        return $this->customerContract;
    }

                                                        private $desp;

    public function setDesp($desp)
    {
        $this->desp = $desp;
         $this->apiParas["desp"] = $desp;
    }

    public function getDesp()
    {
        return $this->desp;
    }

                                                        private $orderId;

    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
         $this->apiParas["orderId"] = $orderId;
    }

    public function getOrderId()
    {
        return $this->orderId;
    }

                                                        private $weight;

    public function setWeight($weight)
    {
        $this->weight = $weight;
         $this->apiParas["weight"] = $weight;
    }

    public function getWeight()
    {
        return $this->weight;
    }

                                                        private $remark;

    public function setRemark($remark)
    {
        $this->remark = $remark;
         $this->apiParas["remark"] = $remark;
    }

    public function getRemark()
    {
        return $this->remark;
    }

                                                        private $volume;

    public function setVolume($volume)
    {
        $this->volume = $volume;
         $this->apiParas["volume"] = $volume;
    }

    public function getVolume()
    {
        return $this->volume;
    }

                                                        private $valueAddService;

    public function setValueAddService($valueAddService)
    {
        $this->valueAddService = $valueAddService;
         $this->apiParas["valueAddService"] = $valueAddService;
    }

    public function getValueAddService()
    {
        return $this->valueAddService;
    }

                                                        private $guaranteeValue;

    public function setGuaranteeValue($guaranteeValue)
    {
        $this->guaranteeValue = $guaranteeValue;
         $this->apiParas["guaranteeValue"] = $guaranteeValue;
    }

    public function getGuaranteeValue()
    {
        return $this->guaranteeValue;
    }

                                                        private $guaranteeValueAmount;

    public function setGuaranteeValueAmount($guaranteeValueAmount)
    {
        $this->guaranteeValueAmount = $guaranteeValueAmount;
         $this->apiParas["guaranteeValueAmount"] = $guaranteeValueAmount;
    }

    public function getGuaranteeValueAmount()
    {
        return $this->guaranteeValueAmount;
    }

                                                        private $pickupStartTime;

    public function setPickupStartTime($pickupStartTime)
    {
        $this->pickupStartTime = $pickupStartTime;
         $this->apiParas["pickupStartTime"] = $pickupStartTime;
    }

    public function getPickupStartTime()
    {
        return $this->pickupStartTime;
    }

                                                        private $pickupEndTime;

    public function setPickupEndTime($pickupEndTime)
    {
        $this->pickupEndTime = $pickupEndTime;
         $this->apiParas["pickupEndTime"] = $pickupEndTime;
    }

    public function getPickupEndTime()
    {
        return $this->pickupEndTime;
    }

                                                                                                                                                                                                                                                                                                                                                                                               private $productId;
    public function setProductId($productId)
    {
        $this->productId = $productId;
        $this->apiParas["productId"] = $productId;
    }

    public function getProductId()
    {
        return $this->productId;
    }
                                                                                                                                                                                                                                                                                                                                              private $productName;
    public function setProductName($productName)
    {
        $this->productName = $productName;
        $this->apiParas["productName"] = $productName;
    }

    public function getProductName()
    {
        return $this->productName;
    }
                                                                                                                                                                                                                                                                                                                                              private $productCount;
    public function setProductCount($productCount)
    {
        $this->productCount = $productCount;
        $this->apiParas["productCount"] = $productCount;
    }

    public function getProductCount()
    {
        return $this->productCount;
    }
                                                                                                                                                                                                                                                                                                                                              private $snCode;
    public function setSnCode($snCode)
    {
        $this->snCode = $snCode;
        $this->apiParas["snCode"] = $snCode;
    }

    public function getSnCode()
    {
        return $this->snCode;
    }
                                                                                                                                                                                                                                                                                                                                              private $skuAddService;
    public function setSkuAddService($skuAddService)
    {
        $this->skuAddService = $skuAddService;
        $this->apiParas["skuAddService"] = $skuAddService;
    }

    public function getSkuAddService()
    {
        return $this->skuAddService;
    }
                                                                                                                                                                                                                                                                                                                                              private $skuCheckOutShapes;
    public function setSkuCheckOutShapes($skuCheckOutShapes)
    {
        $this->skuCheckOutShapes = $skuCheckOutShapes;
        $this->apiParas["skuCheckOutShapes"] = $skuCheckOutShapes;
    }

    public function getSkuCheckOutShapes()
    {
        return $this->skuCheckOutShapes;
    }
                                                                                                                                                                                                                                                                                                                                              private $skuCheckAttachFile;
    public function setSkuCheckAttachFile($skuCheckAttachFile)
    {
        $this->skuCheckAttachFile = $skuCheckAttachFile;
        $this->apiParas["skuCheckAttachFile"] = $skuCheckAttachFile;
    }

    public function getSkuCheckAttachFile()
    {
        return $this->skuCheckAttachFile;
    }
                                                                                                                                                                                                                                                                                                                                              private $antiTearingCode;
    public function setAntiTearingCode($antiTearingCode)
    {
        $this->antiTearingCode = $antiTearingCode;
        $this->apiParas["antiTearingCode"] = $antiTearingCode;
    }

    public function getAntiTearingCode()
    {
        return $this->antiTearingCode;
    }
                                                                                                                                                                        private $promiseTimeType;

    public function setPromiseTimeType($promiseTimeType)
    {
        $this->promiseTimeType = $promiseTimeType;
         $this->apiParas["promiseTimeType"] = $promiseTimeType;
    }

    public function getPromiseTimeType()
    {
        return $this->promiseTimeType;
    }

                                                        private $guaranteeSettleType;

    public function setGuaranteeSettleType($guaranteeSettleType)
    {
        $this->guaranteeSettleType = $guaranteeSettleType;
         $this->apiParas["guaranteeSettleType"] = $guaranteeSettleType;
    }

    public function getGuaranteeSettleType()
    {
        return $this->guaranteeSettleType;
    }

                                                        private $packingSettleType;

    public function setPackingSettleType($packingSettleType)
    {
        $this->packingSettleType = $packingSettleType;
         $this->apiParas["packingSettleType"] = $packingSettleType;
    }

    public function getPackingSettleType()
    {
        return $this->packingSettleType;
    }

                                                        private $freightSettleType;

    public function setFreightSettleType($freightSettleType)
    {
        $this->freightSettleType = $freightSettleType;
         $this->apiParas["freightSettleType"] = $freightSettleType;
    }

    public function getFreightSettleType()
    {
        return $this->freightSettleType;
    }

                                                        private $allowedRepeatOrderType;

    public function setAllowedRepeatOrderType($allowedRepeatOrderType)
    {
        $this->allowedRepeatOrderType = $allowedRepeatOrderType;
         $this->apiParas["allowedRepeatOrderType"] = $allowedRepeatOrderType;
    }

    public function getAllowedRepeatOrderType()
    {
        return $this->allowedRepeatOrderType;
    }
}
