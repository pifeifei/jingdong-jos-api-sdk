<?php

namespace ACES\Request;

class OrderTraceByWaybillServiceGetOrderTraceByWaybillIdAndVenderCodeRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.orderTraceByWaybillService.getOrderTraceByWaybillIdAndVenderCode';
    }

    public function check()
    {
    }

    public function getVenderCode()
    {
        return $this->apiParas['venderCode'];
    }

    public function setVenderCode($venderCode)
    {
        $this->apiParas['venderCode'] = $venderCode;

        return $this;
    }

    public function getWaybillId()
    {
        return $this->apiParas['waybillId'];
    }

    public function setWaybillId($waybillId)
    {
        $this->apiParas['waybillId'] = $waybillId;

        return $this;
    }
}
