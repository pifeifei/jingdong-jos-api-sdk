<?php

namespace ACES\Request;

class EclpGoodsQueryGoodsSerialRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.eclp.goods.queryGoodsSerial';
    }

    public function check()
    {
    }

    public function getBizNo()
    {
        return $this->apiParas['bizNo'];
    }

    public function setBizNo($bizNo)
    {
        $this->apiParas['bizNo'] = $bizNo;

        return $this;
    }
}
