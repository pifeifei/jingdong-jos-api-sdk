<?php

namespace ACES\Request;

class EclpIbdOrderDeclareOrderRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.eclp.ibd.order.declareOrder';
    }

    public function check()
    {
    }

    public function getCustomsOrder()
    {
        return $this->apiParas['customsOrder'];
    }

    public function setCustomsOrder($customsOrder)
    {
        $this->apiParas['customsOrder'] = $customsOrder;

        return $this;
    }

    public function getGoodsList()
    {
        return $this->apiParas['goodsList'];
    }

    public function setGoodsList($goodsList)
    {
        $this->apiParas['goodsList'] = $goodsList;

        return $this;
    }
}
