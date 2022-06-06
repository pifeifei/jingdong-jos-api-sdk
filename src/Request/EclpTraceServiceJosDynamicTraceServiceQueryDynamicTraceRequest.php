<?php

namespace ACES\Request;


class EclpTraceServiceJosDynamicTraceServiceQueryDynamicTraceRequest
{
    private $apiParas = array();
    private $version;
    private $extension;
    private $t;
    private $orderId;
    private $sign;
    private $customerCode;
    private $waybillCode;
    private $source;

    public function getApiMethodName()
    {
        return "jingdong.eclp.trace.service.jos.dynamicTraceService.queryDynamicTrace";
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

    public function getExtension()
    {
        return $this->extension;
    }

    public function setExtension($extension)
    {
        $this->extension = $extension;
        $this->apiParas["extension"] = $extension;
    }

    public function getT()
    {
        return $this->t;
    }

    public function setT($t)
    {
        $this->t = $t;
        $this->apiParas["t"] = $t;
    }

    public function getOrderId()
    {
        return $this->orderId;
    }

    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
        $this->apiParas["orderId"] = $orderId;
    }

    public function getSign()
    {
        return $this->sign;
    }

    public function setSign($sign)
    {
        $this->sign = $sign;
        $this->apiParas["sign"] = $sign;
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

    public function getWaybillCode()
    {
        return $this->waybillCode;
    }

    public function setWaybillCode($waybillCode)
    {
        $this->waybillCode = $waybillCode;
        $this->apiParas["waybillCode"] = $waybillCode;
    }

    public function getSource()
    {
        return $this->source;
    }

    public function setSource($source)
    {
        $this->source = $source;
        $this->apiParas["source"] = $source;
    }
}
