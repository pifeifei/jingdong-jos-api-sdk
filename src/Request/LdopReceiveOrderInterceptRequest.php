<?php

namespace ACES\Request;

class LdopReceiveOrderInterceptRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.ldop.receive.order.intercept';
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

    public function getDeliveryId()
    {
        return $this->apiParas['deliveryId'];
    }

    public function setDeliveryId($deliveryId)
    {
        $this->apiParas['deliveryId'] = $deliveryId;

        return $this;
    }

    public function getInterceptReason()
    {
        return $this->apiParas['interceptReason'];
    }

    public function setInterceptReason($interceptReason)
    {
        $this->apiParas['interceptReason'] = $interceptReason;

        return $this;
    }

    public function getCancelOperatorCodeType()
    {
        return $this->apiParas['cancelOperatorCodeType'];
    }

    public function setCancelOperatorCodeType($cancelOperatorCodeType)
    {
        $this->apiParas['cancelOperatorCodeType'] = $cancelOperatorCodeType;

        return $this;
    }

    public function getCancelTime()
    {
        return $this->apiParas['cancelTime'];
    }

    public function setCancelTime($cancelTime)
    {
        $this->apiParas['cancelTime'] = $cancelTime;

        return $this;
    }

    public function getCancelOperator()
    {
        return $this->apiParas['cancelOperator'];
    }

    public function setCancelOperator($cancelOperator)
    {
        $this->apiParas['cancelOperator'] = $cancelOperator;

        return $this;
    }
}
