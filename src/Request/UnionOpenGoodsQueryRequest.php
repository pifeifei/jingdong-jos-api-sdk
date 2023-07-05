<?php

namespace ACES\Request;

use ACES\Request\Domain\UnionOpenGoodsQuery\GoodsReqDTO;

class UnionOpenGoodsQueryRequest extends AbstractRequest
{
    protected string $version = '1.0';

    public function getApiMethodName()
    {
        return 'jd.union.open.goods.query';
    }

    public function isRequireAccessToken(): bool
    {
        return false;
    }

    public function setGoodsReqDTO(GoodsReqDTO $goodsReqDTO)
    {
        $this->apiParas['goodsReqDTO'] = $goodsReqDTO;
    }

    public function getGoodsReqDTO(): GoodsReqDTO
    {
        return $this->apiParas['goodsReqDTO'];
    }
}
