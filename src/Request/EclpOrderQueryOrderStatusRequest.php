<?php

namespace ACES\Request;

class EclpOrderQueryOrderStatusRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.eclp.order.queryOrderStatus';
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
