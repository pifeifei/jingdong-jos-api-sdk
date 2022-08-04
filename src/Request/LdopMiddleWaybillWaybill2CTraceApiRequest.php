<?php

namespace ACES\Request;

class LdopMiddleWaybillWaybill2CTraceApiRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.ldop.middle.waybill.Waybill2CTraceApi';
    }

    public function check()
    {
    }

    public function getTradeCode()
    {
        return $this->apiParas['tradeCode'];
    }

    public function setTradeCode($tradeCode)
    {
        $this->apiParas['tradeCode'] = $tradeCode;

        return $this;
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
}
