<?php

namespace ACES\Request;


class EclpGoodsQueryShopGoodsInfoRequest
{
    private $apiParas = array();
    private $version;
    private $size;
    private $current;
    private $deptNo;
    private $goodsNo;
    private $shopNo;
    private $spGoodsNo;
    private $isvGoodsNo;
    private $shopGoodsNoLT;

    public function getApiMethodName()
    {
        return "jingdong.eclp.goods.queryShopGoodsInfo";
    }

    public function getApiParas()
    {
        if (empty($this->apiParas)) {
            return "{}";
        }
        return json_encode($this->apiParas);
    }

    public function check()
    {
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }

    public function getVersion()
    {
        return $this->version;
    }

    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function setSize($size)
    {
        $this->size = $size;
        $this->apiParas["size"] = $size;
    }

    public function getCurrent()
    {
        return $this->current;
    }

    public function setCurrent($current)
    {
        $this->current = $current;
        $this->apiParas["current"] = $current;
    }

    public function getDeptNo()
    {
        return $this->deptNo;
    }

    public function setDeptNo($deptNo)
    {
        $this->deptNo = $deptNo;
        $this->apiParas["deptNo"] = $deptNo;
    }

    public function getGoodsNo()
    {
        return $this->goodsNo;
    }

    public function setGoodsNo($goodsNo)
    {
        $this->goodsNo = $goodsNo;
        $this->apiParas["goodsNo"] = $goodsNo;
    }

    public function getShopNo()
    {
        return $this->shopNo;
    }

    public function setShopNo($shopNo)
    {
        $this->shopNo = $shopNo;
        $this->apiParas["shopNo"] = $shopNo;
    }

    public function getSpGoodsNo()
    {
        return $this->spGoodsNo;
    }

    public function setSpGoodsNo($spGoodsNo)
    {
        $this->spGoodsNo = $spGoodsNo;
        $this->apiParas["spGoodsNo"] = $spGoodsNo;
    }

    public function getIsvGoodsNo()
    {
        return $this->isvGoodsNo;
    }

    public function setIsvGoodsNo($isvGoodsNo)
    {
        $this->isvGoodsNo = $isvGoodsNo;
        $this->apiParas["isvGoodsNo"] = $isvGoodsNo;
    }

    public function getShopGoodsNoLT()
    {
        return $this->shopGoodsNoLT;
    }

    public function setShopGoodsNoLT($shopGoodsNoLT)
    {
        $this->shopGoodsNoLT = $shopGoodsNoLT;
        $this->apiParas["shopGoodsNoLT"] = $shopGoodsNoLT;
    }
}
