<?php

namespace ACES\Request;

use ACES\Request\Domain\UnionOpenCategoryGoodsGet\Req;

class UnionOpenCategoryGoodsGetRequest extends AbstractRequest
{
    protected string $version = '1.0';

    public function getApiMethodName()
    {
        return 'jd.union.open.category.goods.get';
    }

    public function isRequireAccessToken(): bool
    {
        return false;
    }

    public function setReq(Req $req)
    {
        $this->apiParas['req'] = $req;
    }
}
