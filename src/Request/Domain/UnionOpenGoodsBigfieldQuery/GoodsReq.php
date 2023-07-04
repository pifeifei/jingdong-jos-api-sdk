<?php

namespace ACES\Request\Domain\UnionOpenGoodsBigfieldQuery;

use ACES\Request\Domain\AbstractParams;

class GoodsReq extends AbstractParams
{
    public function __construct()
    {
        $this->params['@type'] = 'com.jd.union.open.gateway.api.dto.goods.bigfield.BigFieldGoodsReq';
    }

    public function setSkuIds(array $skuIds)
    {
        $this->params['skuIds'] = $skuIds;
    }

    public function getSkuIds(): array
    {
        return $this->params['skuIds'] ?? [];
    }

    public function setFields($fields)
    {
        $this->params['fields'] = $fields;
    }

    public function getFields()
    {
        return $this->params['fields'] ?? null;
    }

    public function setItemIds(array $itemIds)
    {
        $this->params['itemIds'] = $itemIds;
    }

    public function getItemIds(): array
    {
        return $this->params['itemIds'] ?? [];
    }

    public function getInstance()
    {
        return $this->params;
    }
}
