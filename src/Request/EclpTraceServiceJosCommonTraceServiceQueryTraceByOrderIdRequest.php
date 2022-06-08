<?php

namespace ACES\Request;

class EclpTraceServiceJosCommonTraceServiceQueryTraceByOrderIdRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.eclp.trace.service.jos.CommonTraceService.queryTraceByOrderId';
    }

    public function check()
    {
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

    public function getSource()
    {
        return $this->apiParas['source'];
    }

    public function setSource($source)
    {
        $this->apiParas['source'] = $source;

        return $this;
    }

    public function getSign()
    {
        return $this->apiParas['sign'];
    }

    public function setSign($sign)
    {
        $this->apiParas['sign'] = $sign;

        return $this;
    }

    public function getT()
    {
        return $this->apiParas['t'];
    }

    public function setT($t)
    {
        $this->apiParas['t'] = $t;

        return $this;
    }
}
