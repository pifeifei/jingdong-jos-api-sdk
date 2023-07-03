<?php

namespace ACES\Request\Domain\EclpIbdOrderDeclareOrderCustoms;

class Goods
{
    private array $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.eclp.isv.domain.so.OrderCustomsItemParam';
    }

    public function getGnum()
    {
        return $this->params['gnum'];
    }

    public function setGnum($gnum)
    {
        $this->params['gnum'] = $gnum;
    }

    public function getIsvGoodsNo()
    {
        return $this->params['isvGoodsNo'];
    }

    public function setIsvGoodsNo($isvGoodsNo)
    {
        $this->params['isvGoodsNo'] = $isvGoodsNo;
    }

    public function getSpGoodsNo()
    {
        return $this->params['spGoodsNo'];
    }

    public function setSpGoodsNo($spGoodsNo)
    {
        $this->params['spGoodsNo'] = $spGoodsNo;
    }

    public function getQuantity()
    {
        return $this->params['quantity'];
    }

    public function setQuantity($quantity)
    {
        $this->params['quantity'] = $quantity;
    }

    public function getPrice()
    {
        return $this->params['price'];
    }

    public function setPrice($price)
    {
        $this->params['price'] = $price;
    }

    public function getGoodsRemark()
    {
        return $this->params['goodsRemark'];
    }

    public function setGoodsRemark($goodsRemark)
    {
        $this->params['goodsRemark'] = $goodsRemark;
    }

    public function getItemLink()
    {
        return $this->params['itemLink'];
    }

    public function setItemLink($itemLink)
    {
        $this->params['itemLink'] = $itemLink;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
