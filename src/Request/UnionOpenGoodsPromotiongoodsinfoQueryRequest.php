<?php

namespace ACES\Request;

class UnionOpenGoodsPromotiongoodsinfoQueryRequest extends AbstractRequest
{
    protected string $version = '1.0';

    public function getApiMethodName()
    {
        return 'jd.union.open.goods.promotiongoodsinfo.query';
    }

    public function setSkuIds(array $skuIds)
    {
        $this->apiParas['skuIds'] = implode(',', $skuIds);
    }

    public function getSkuIds(): array
    {
        return explode($this->apiParas['skuIds'] ?? '', ',');
    }

    public function isRequireAccessToken(): bool
    {
        return false;
    }
}
