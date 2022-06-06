<?php

class OrblsWaybillCancelInterceptRequest
{
    private $apiParas = array();

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

                                                        private $cancelReasonCode;

    public function setCancelReasonCode($cancelReasonCode)
    {
        $this->cancelReasonCode = $cancelReasonCode;
         $this->apiParas["cancelReasonCode"] = $cancelReasonCode;
    }

    public function getCancelReasonCode()
    {
        return $this->cancelReasonCode;
    }

                                                        private $deliveryId;

    public function setDeliveryId($deliveryId)
    {
        $this->deliveryId = $deliveryId;
         $this->apiParas["deliveryId"] = $deliveryId;
    }

    public function getDeliveryId()
    {
        return $this->deliveryId;
    }

                                                        private $cancelTime;

    public function setCancelTime($cancelTime)
    {
        $this->cancelTime = $cancelTime;
         $this->apiParas["cancelTime"] = $cancelTime;
    }

    public function getCancelTime()
    {
        return $this->cancelTime;
    }

                                                                                    private $interceptReason;

    public function setInterceptReason($interceptReason)
    {
        $this->interceptReason = $interceptReason;
         $this->apiParas["interceptReason"] = $interceptReason;
    }

    public function getInterceptReason()
    {
        return $this->interceptReason;
    }

                                                        private $cancelOperator;

    public function setCancelOperator($cancelOperator)
    {
        $this->cancelOperator = $cancelOperator;
         $this->apiParas["cancelOperator"] = $cancelOperator;
    }

    public function getCancelOperator()
    {
        return $this->cancelOperator;
    }

                                                        private $isvOrderNo;

    public function setIsvOrderNo($isvOrderNo)
    {
        $this->isvOrderNo = $isvOrderNo;
         $this->apiParas["isvOrderNo"] = $isvOrderNo;
    }

    public function getIsvOrderNo()
    {
        return $this->isvOrderNo;
    }

                                                        private $cancelType;

    public function setCancelType($cancelType)
    {
        $this->cancelType = $cancelType;
         $this->apiParas["cancelType"] = $cancelType;
    }

    public function getCancelType()
    {
        return $this->cancelType;
    }
}
