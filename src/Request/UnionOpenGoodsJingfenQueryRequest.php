<?php

namespace ACES\Request;

class UnionOpenGoodsJingfenQueryRequest extends AbstractRequest
{
    protected string $version = '1.0';

    public function getApiMethodName()
    {
        return 'jd.union.open.goods.jingfen.query';
    }

    public function isRequireAccessToken(): bool
    {
        return false;
    }

    public function setGoodsReq($goodsReq)
    {
        $this->apiParas['goodsReq'] = $goodsReq;
    }

    public function getGoodsReq()
    {
        return $this->apiParas['goodsReq'];
    }
}
