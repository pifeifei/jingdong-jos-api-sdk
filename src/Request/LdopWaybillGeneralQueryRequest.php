<?php

namespace ACES\Request;


class LdopWaybillGeneralQueryRequest
{
    private $apiParas = array();
    private $version;
    private $customerCode;
    private $deliveryId;
    private $phone;
    private $dynamicTimeFlag;

    public function getApiMethodName()
    {
        return "jingdong.ldop.waybill.generalQuery";
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

    public function getCustomerCode()
    {
        return $this->customerCode;
    }

    public function setCustomerCode($customerCode)
    {
        $this->customerCode = $customerCode;
        $this->apiParas["customerCode"] = $customerCode;
    }

    public function getDeliveryId()
    {
        return $this->deliveryId;
    }

    public function setDeliveryId($deliveryId)
    {
        $this->deliveryId = $deliveryId;
        $this->apiParas["deliveryId"] = $deliveryId;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
        $this->apiParas["phone"] = $phone;
    }

    public function getDynamicTimeFlag()
    {
        return $this->dynamicTimeFlag;
    }

    public function setDynamicTimeFlag($dynamicTimeFlag)
    {
        $this->dynamicTimeFlag = $dynamicTimeFlag;
        $this->apiParas["dynamicTimeFlag"] = $dynamicTimeFlag;
    }
}
