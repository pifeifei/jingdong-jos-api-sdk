<?php

namespace ACES\Request;

class EclpTraceServiceJosDynamicTraceServiceQueryDynamicTraceRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.eclp.trace.service.jos.dynamicTraceService.queryDynamicTrace';
    }

    public function check()
    {
    }

    public function getExtension()
    {
        return $this->apiParas['extension'];
    }

    public function setExtension($extension)
    {
        $this->apiParas['extension'] = $extension;

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

    public function getOrderId()
    {
        return $this->apiParas['orderId'];
    }

    public function setOrderId($orderId)
    {
        $this->apiParas['orderId'] = $orderId;

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

    public function getCustomerCode()
    {
        return $this->apiParas['customerCode'];
    }

    public function setCustomerCode($customerCode)
    {
        $this->apiParas['customerCode'] = $customerCode;

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

    public function getSource()
    {
        return $this->apiParas['source'];
    }

    public function setSource($source)
    {
        $this->apiParas['source'] = $source;

        return $this;
    }
}
