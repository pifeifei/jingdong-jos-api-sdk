<?php

namespace ACES\Request;

class EclpOrderGetOrderTrackMessageRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.eclp.order.getOrderTrackMessage';
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
}
