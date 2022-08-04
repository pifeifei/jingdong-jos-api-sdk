<?php

namespace ACES\Request;

class OrblsWaybillCancelInterceptRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.orbls.waybill.cancel.intercept';
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

    public function getCancelReasonCode()
    {
        return $this->apiParas['cancelReasonCode'];
    }

    public function setCancelReasonCode($cancelReasonCode)
    {
        $this->apiParas['cancelReasonCode'] = $cancelReasonCode;

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

    public function getCancelTime()
    {
        return $this->apiParas['cancelTime'];
    }

    public function setCancelTime($cancelTime)
    {
        $this->apiParas['cancelTime'] = $cancelTime;

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

    public function getCancelOperator()
    {
        return $this->apiParas['cancelOperator'];
    }

    public function setCancelOperator($cancelOperator)
    {
        $this->apiParas['cancelOperator'] = $cancelOperator;

        return $this;
    }

    public function getIsvOrderNo()
    {
        return $this->apiParas['isvOrderNo'];
    }

    public function setIsvOrderNo($isvOrderNo)
    {
        $this->apiParas['isvOrderNo'] = $isvOrderNo;

        return $this;
    }

    public function getCancelType()
    {
        return $this->apiParas['cancelType'];
    }

    public function setCancelType($cancelType)
    {
        $this->apiParas['cancelType'] = $cancelType;

        return $this;
    }
}
