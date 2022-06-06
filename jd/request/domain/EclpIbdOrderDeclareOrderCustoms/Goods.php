<?php

namespace EclpIbdOrderDeclareOrderCustoms;

class Goods
{
    private $params = array();

    function __construct()
    {
        $this->params["@type"] = "com.jd.eclp.isv.domain.so.OrderCustomsItemParam";
    }

    private $gnum;

    public function setGnum($gnum)
    {
        $this->params['gnum'] = $gnum;
    }

    public function getGnum()
    {
        return $this->gnum;
    }

    private $isvGoodsNo;

    public function setIsvGoodsNo($isvGoodsNo)
    {
        $this->params['isvGoodsNo'] = $isvGoodsNo;
    }

    public function getIsvGoodsNo()
    {
        return $this->isvGoodsNo;
    }

    private $spGoodsNo;

    public function setSpGoodsNo($spGoodsNo)
    {
        $this->params['spGoodsNo'] = $spGoodsNo;
    }

    public function getSpGoodsNo()
    {
        return $this->spGoodsNo;
    }

    private $quantity;

    public function setQuantity($quantity)
    {
        $this->params['quantity'] = $quantity;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    private $price;

    public function setPrice($price)
    {
        $this->params['price'] = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }

    private $goodsRemark;

    public function setGoodsRemark($goodsRemark)
    {
        $this->params['goodsRemark'] = $goodsRemark;
    }

    public function getGoodsRemark()
    {
        return $this->goodsRemark;
    }

    private $itemLink;

    public function setItemLink($itemLink)
    {
        $this->params['itemLink'] = $itemLink;
    }

    public function getItemLink()
    {
        return $this->itemLink;
    }

    function getInstance()
    {
        return $this->params;
    }
}
