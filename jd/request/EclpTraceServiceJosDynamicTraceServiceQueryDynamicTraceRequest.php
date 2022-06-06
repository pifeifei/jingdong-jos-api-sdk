<?php

class EclpTraceServiceJosDynamicTraceServiceQueryDynamicTraceRequest
{
    private $apiParas = array();

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

    private $version;

    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function getVersion()
    {
        return $this->version;
    }
                                                                                                                                    private $extension;

    public function setExtension($extension)
    {
        $this->extension = $extension;
         $this->apiParas["extension"] = $extension;
    }

    public function getExtension()
    {
        return $this->extension;
    }

                                                                                    private $t;

    public function setT($t)
    {
        $this->t = $t;
         $this->apiParas["t"] = $t;
    }

    public function getT()
    {
        return $this->t;
    }

                                                        private $orderId;

    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
         $this->apiParas["orderId"] = $orderId;
    }

    public function getOrderId()
    {
        return $this->orderId;
    }

                                                                                    private $sign;

    public function setSign($sign)
    {
        $this->sign = $sign;
         $this->apiParas["sign"] = $sign;
    }

    public function getSign()
    {
        return $this->sign;
    }

                                                        private $customerCode;

    public function setCustomerCode($customerCode)
    {
        $this->customerCode = $customerCode;
         $this->apiParas["customerCode"] = $customerCode;
    }

    public function getCustomerCode()
    {
        return $this->customerCode;
    }

                                                        private $waybillCode;

    public function setWaybillCode($waybillCode)
    {
        $this->waybillCode = $waybillCode;
         $this->apiParas["waybillCode"] = $waybillCode;
    }

    public function getWaybillCode()
    {
        return $this->waybillCode;
    }

                                                        private $source;

    public function setSource($source)
    {
        $this->source = $source;
         $this->apiParas["source"] = $source;
    }

    public function getSource()
    {
        return $this->source;
    }
}
