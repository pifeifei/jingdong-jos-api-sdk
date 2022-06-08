<?php

namespace ACES\Request;

class EclpOrderCancelOrderRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.eclp.order.cancelOrder';
    }

    public function check()
    {
    }

    public function getEclpSoNo()
    {
        return $this->apiParas['eclpSoNo'];
    }

    public function setEclpSoNo($eclpSoNo)
    {
        $this->apiParas['eclpSoNo'] = $eclpSoNo;

        return $this;
    }
}
