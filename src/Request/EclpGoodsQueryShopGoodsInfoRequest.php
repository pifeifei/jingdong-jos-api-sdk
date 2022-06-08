<?php

namespace ACES\Request;

class EclpGoodsQueryShopGoodsInfoRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.eclp.goods.queryShopGoodsInfo';
    }

    public function check()
    {
    }

    public function getSize()
    {
        return $this->apiParas['size'];
    }

    public function setSize($size)
    {
        $this->apiParas['size'] = $size;

        return $this;
    }

    public function getCurrent()
    {
        return $this->apiParas['current'];
    }

    public function setCurrent($current)
    {
        $this->apiParas['current'] = $current;

        return $this;
    }

    public function getDeptNo()
    {
        return $this->apiParas['deptNo'];
    }

    public function setDeptNo($deptNo)
    {
        $this->apiParas['deptNo'] = $deptNo;

        return $this;
    }

    public function getGoodsNo()
    {
        return $this->apiParas['goodsNo'];
    }

    public function setGoodsNo($goodsNo)
    {
        $this->apiParas['goodsNo'] = $goodsNo;

        return $this;
    }

    public function getShopNo()
    {
        return $this->apiParas['shopNo'];
    }

    public function setShopNo($shopNo)
    {
        $this->apiParas['shopNo'] = $shopNo;

        return $this;
    }

    public function getSpGoodsNo()
    {
        return $this->apiParas['spGoodsNo'];
    }

    public function setSpGoodsNo($spGoodsNo)
    {
        $this->apiParas['spGoodsNo'] = $spGoodsNo;

        return $this;
    }

    public function getIsvGoodsNo()
    {
        return $this->apiParas['isvGoodsNo'];
    }

    public function setIsvGoodsNo($isvGoodsNo)
    {
        $this->apiParas['isvGoodsNo'] = $isvGoodsNo;

        return $this;
    }

    public function getShopGoodsNoLT()
    {
        return $this->apiParas['shopGoodsNoLT'];
    }

    public function setShopGoodsNoLT($shopGoodsNoLT)
    {
        $this->apiParas['shopGoodsNoLT'] = $shopGoodsNoLT;

        return $this;
    }
}
