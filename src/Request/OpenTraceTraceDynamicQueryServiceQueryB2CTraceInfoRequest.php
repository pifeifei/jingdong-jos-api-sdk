<?php

namespace ACES\Request;

class OpenTraceTraceDynamicQueryServiceQueryB2CTraceInfoRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.open.trace.TraceDynamicQueryService.queryB2CTraceInfo';
    }

    public function check()
    {
    }

    public function getOrderNo()
    {
        return $this->apiParas['orderNo'];
    }

    public function setOrderNo($orderNo)
    {
        $this->apiParas['orderNo'] = $orderNo;

        return $this;
    }

    public function getBizType()
    {
        return $this->apiParas['bizType'];
    }

    public function setBizType($bizType)
    {
        $this->apiParas['bizType'] = $bizType;

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
}
