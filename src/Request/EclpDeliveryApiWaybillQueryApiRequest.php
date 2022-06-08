<?php

namespace ACES\Request;

class EclpDeliveryApiWaybillQueryApiRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.eclp.delivery.api.WaybillQueryApi';
    }

    public function check()
    {
    }

    public function getWaybillCode()
    {
        return $this->apiParas['waybillCode'];
    }

    public function setWaybillCode($waybillCode)
    {
        $this->apiParas['waybillCode'] = $waybillCode;

        return $this;
    }

    public function getOrderNo()
    {
        return $this->apiParas['orderNo'];
    }

    public function setOrderNo($orderNo)
    {
        $this->apiParas['orderNo'] = $orderNo;

        return $this;
    }

    public function getSettleType()
    {
        return $this->apiParas['settleType'];
    }

    public function setSettleType($settleType)
    {
        $this->apiParas['settleType'] = $settleType;

        return $this;
    }

    public function getTraderCode()
    {
        return $this->apiParas['traderCode'];
    }

    public function setTraderCode($traderCode)
    {
        $this->apiParas['traderCode'] = $traderCode;

        return $this;
    }
}
