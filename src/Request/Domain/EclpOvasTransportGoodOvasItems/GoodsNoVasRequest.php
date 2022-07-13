<?php

namespace ACES\Request\Domain\EclpOvasTransportGoodOvasItems;

class GoodsNoVasRequest
{
    private array $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.eclp.ovas.request.goods.admin.GoodsNoVasRequest';
    }

    public function getGoodsNo()
    {
        return $this->params['goodsNo'];
    }

    public function setGoodsNo($goodsNo)
    {
        $this->params['goodsNo'] = $goodsNo;
    }

    public function setVasRequestList($vasRequestList)
    {
        $size = count($vasRequestList);
        for ($i = 0; $i < $size; ++$i) {
            $vasRequestList[$i] = $vasRequestList[$i]->getInstance();
        }
        $this->params['vasRequestList'] = $vasRequestList;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
