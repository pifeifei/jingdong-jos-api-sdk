<?php

namespace ACES\Request;


class OrblsWaybillCancelInterceptRequest
{
    private $apiParas = array();
    private $version;
    private $vendorCode;
    private $cancelReasonCode;
    private $deliveryId;
    private $cancelTime;
    private $interceptReason;
    private $cancelOperator;
    private $isvOrderNo;
    private $cancelType;

    public function getApiMethodName()
    {
        return "jingdong.orbls.waybill.cancel.intercept";
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

    public function getCancelReasonCode()
    {
        return $this->cancelReasonCode;
    }

    public function setCancelReasonCode($cancelReasonCode)
    {
        $this->cancelReasonCode = $cancelReasonCode;
        $this->apiParas["cancelReasonCode"] = $cancelReasonCode;
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

    public function getCancelTime()
    {
        return $this->cancelTime;
    }

    public function setCancelTime($cancelTime)
    {
        $this->cancelTime = $cancelTime;
        $this->apiParas["cancelTime"] = $cancelTime;
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

    public function getCancelOperator()
    {
        return $this->cancelOperator;
    }

    public function setCancelOperator($cancelOperator)
    {
        $this->cancelOperator = $cancelOperator;
        $this->apiParas["cancelOperator"] = $cancelOperator;
    }

    public function getIsvOrderNo()
    {
        return $this->isvOrderNo;
    }

    public function setIsvOrderNo($isvOrderNo)
    {
        $this->isvOrderNo = $isvOrderNo;
        $this->apiParas["isvOrderNo"] = $isvOrderNo;
    }

    public function getCancelType()
    {
        return $this->cancelType;
    }

    public function setCancelType($cancelType)
    {
        $this->cancelType = $cancelType;
        $this->apiParas["cancelType"] = $cancelType;
    }
}
