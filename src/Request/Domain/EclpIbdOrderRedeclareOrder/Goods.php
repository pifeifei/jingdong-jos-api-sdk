<?php

namespace ACES\Request\Domain\EclpIbdOrderRedeclareOrder;




class Goods
{
    private $params = array();
    private $gnum;
    private $isvGoodsNo;
    private $spGoodsNo;
    private $quantity;
    private $price;
    private $goodsRemark;
    private $itemLink;

    function __construct()
    {
        $this->params["@type"] = "com.jd.eclp.isv.domain.so.OrderCustomsItemParam";
    }

    public function getGnum()
    {
        return $this->gnum;
    }

    public function setGnum($gnum)
    {
        $this->params['gnum'] = $gnum;
    }

    public function getIsvGoodsNo()
    {
        return $this->isvGoodsNo;
    }

    public function setIsvGoodsNo($isvGoodsNo)
    {
        $this->params['isvGoodsNo'] = $isvGoodsNo;
    }

    public function getSpGoodsNo()
    {
        return $this->spGoodsNo;
    }

    public function setSpGoodsNo($spGoodsNo)
    {
        $this->params['spGoodsNo'] = $spGoodsNo;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setQuantity($quantity)
    {
        $this->params['quantity'] = $quantity;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->params['price'] = $price;
    }

    public function getGoodsRemark()
    {
        return $this->goodsRemark;
    }

    public function setGoodsRemark($goodsRemark)
    {
        $this->params['goodsRemark'] = $goodsRemark;
    }

    public function getItemLink()
    {
        return $this->itemLink;
    }

    public function setItemLink($itemLink)
    {
        $this->params['itemLink'] = $itemLink;
    }

    function getInstance()
    {
        return $this->params;
    }
}
