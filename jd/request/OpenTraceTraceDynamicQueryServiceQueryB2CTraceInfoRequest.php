<?php

class OpenTraceTraceDynamicQueryServiceQueryB2CTraceInfoRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.open.trace.TraceDynamicQueryService.queryB2CTraceInfo";
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
                                                                                                                                    private $orderNo;

    public function setOrderNo($orderNo)
    {
        $this->orderNo = $orderNo;
         $this->apiParas["orderNo"] = $orderNo;
    }

    public function getOrderNo()
    {
        return $this->orderNo;
    }

                                                        private $bizType;

    public function setBizType($bizType)
    {
        $this->bizType = $bizType;
         $this->apiParas["bizType"] = $bizType;
    }

    public function getBizType()
    {
        return $this->bizType;
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
}
