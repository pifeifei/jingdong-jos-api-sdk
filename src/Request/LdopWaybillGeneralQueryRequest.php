<?php

namespace ACES\Request;

class LdopWaybillGeneralQueryRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.ldop.waybill.generalQuery';
    }

    public function check()
    {
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

    public function getDeliveryId()
    {
        return $this->apiParas['deliveryId'];
    }

    public function setDeliveryId($deliveryId)
    {
        $this->apiParas['deliveryId'] = $deliveryId;

        return $this;
    }

    public function getPhone()
    {
        return $this->apiParas['phone'];
    }

    public function setPhone($phone)
    {
        $this->apiParas['phone'] = $phone;

        return $this;
    }

    public function getDynamicTimeFlag()
    {
        return $this->apiParas['dynamicTimeFlag'];
    }

    public function setDynamicTimeFlag($dynamicTimeFlag)
    {
        $this->apiParas['dynamicTimeFlag'] = $dynamicTimeFlag;

        return $this;
    }
}
