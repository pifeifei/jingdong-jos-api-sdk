<?php

class EclpB2cPromiseInfoApiQueryWaybillFreightsRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.b2c.PromiseInfoApi.queryWaybillFreights";
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
                                                                                                                                    private $vendorCode;

    public function setVendorCode($vendorCode)
    {
        $this->vendorCode = $vendorCode;
         $this->apiParas["vendorCode"] = $vendorCode;
    }

    public function getVendorCode()
    {
        return $this->vendorCode;
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
}
