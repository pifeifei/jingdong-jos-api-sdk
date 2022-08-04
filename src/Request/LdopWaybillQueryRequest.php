<?php

namespace ACES\Request;

class LdopWaybillQueryRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.ldop.waybill.query';
    }

    public function check()
    {
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

    public function getCustomerCode()
    {
        return $this->apiParas['customerCode'];
    }

    public function setCustomerCode($customerCode)
    {
        $this->apiParas['customerCode'] = $customerCode;

        return $this;
    }
}
