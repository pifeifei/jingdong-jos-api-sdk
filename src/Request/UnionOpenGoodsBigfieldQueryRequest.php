<?php

namespace ACES\Request;

class UnionOpenGoodsBigfieldQueryRequest extends AbstractRequest
{
    protected string $version = '1.0';

    public function getApiMethodName()
    {
        return 'jd.union.open.goods.bigfield.query';
    }

    public function setGoodsReq($goodsReq)
    {
        $this->apiParas['goodsReq'] = $goodsReq;
    }

    public function getGoodsReq()
    {
        return $this->apiParas['goodsReq'];
    }

    public function isRequireAccessToken(): bool
    {
        return false;
    }
}
