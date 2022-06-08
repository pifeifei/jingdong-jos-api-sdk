<?php

namespace ACES\Request;

class EclpOrderGetTrackMessagePlusByOrderRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.eclp.order.getTrackMessagePlusByOrder';
    }

    public function check()
    {
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

    public function getBizCode()
    {
        return $this->apiParas['bizCode'];
    }

    public function setBizCode($bizCode)
    {
        $this->apiParas['bizCode'] = $bizCode;

        return $this;
    }

    public function getType()
    {
        return $this->apiParas['type'];
    }

    public function setType($type)
    {
        $this->apiParas['type'] = $type;

        return $this;
    }
}
