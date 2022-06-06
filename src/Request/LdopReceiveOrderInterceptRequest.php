<?php

namespace ACES\Request;


class LdopReceiveOrderInterceptRequest
{
    private $apiParas = array();
    private $version;
    private $vendorCode;
    private $deliveryId;
    private $interceptReason;
    private $cancelOperatorCodeType;
    private $cancelTime;
    private $cancelOperator;

    public function getApiMethodName()
    {
        return "jingdong.ldop.receive.order.intercept";
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

    public function getVendorCode()
    {
        return $this->vendorCode;
    }

    public function setVendorCode($vendorCode)
    {
        $this->vendorCode = $vendorCode;
        $this->apiParas["vendorCode"] = $vendorCode;
    }

    public function getDeliveryId()
    {
        return $this->deliveryId;
    }

    public function setDeliveryId($deliveryId)
    {
        $this->deliveryId = $deliveryId;
        $this->apiParas["deliveryId"] = $deliveryId;
    }

    public function getInterceptReason()
    {
        return $this->interceptReason;
    }

    public function setInterceptReason($interceptReason)
    {
        $this->interceptReason = $interceptReason;
        $this->apiParas["interceptReason"] = $interceptReason;
    }

    public function getCancelOperatorCodeType()
    {
        return $this->cancelOperatorCodeType;
    }

    public function setCancelOperatorCodeType($cancelOperatorCodeType)
    {
        $this->cancelOperatorCodeType = $cancelOperatorCodeType;
        $this->apiParas["cancelOperatorCodeType"] = $cancelOperatorCodeType;
    }

    public function getCancelTime()
    {
        return $this->cancelTime;
    }

    public function setCancelTime($cancelTime)
    {
        $this->cancelTime = $cancelTime;
        $this->apiParas["cancelTime"] = $cancelTime;
    }

    public function getCancelOperator()
    {
        return $this->cancelOperator;
    }

    public function setCancelOperator($cancelOperator)
    {
        $this->cancelOperator = $cancelOperator;
        $this->apiParas["cancelOperator"] = $cancelOperator;
    }
}
