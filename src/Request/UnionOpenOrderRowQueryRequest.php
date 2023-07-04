<?php

namespace ACES\Request;

class UnionOpenOrderRowQueryRequest extends AbstractRequest
{
    protected string $version = '1.0';

    public function getApiMethodName()
    {
        return 'jd.union.open.order.row.query';
    }

    public function setOrderReq($orderReq)
    {
        $this->apiParas['orderReq'] = $orderReq;
    }

    public function getOrderReq()
    {
        return $this->apiParas['orderReq'];
    }

    public function isRequireAccessToken(): bool
    {
        return false;
    }
}
