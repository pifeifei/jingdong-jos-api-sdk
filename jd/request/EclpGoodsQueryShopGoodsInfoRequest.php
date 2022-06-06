<?php

class EclpGoodsQueryShopGoodsInfoRequest
{
    private $apiParas = array();

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

    private $version;

    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function getVersion()
    {
        return $this->version;
    }
                                                                                                                                                                                                    private $size;

    public function setSize($size)
    {
        $this->size = $size;
         $this->apiParas["size"] = $size;
    }

    public function getSize()
    {
        return $this->size;
    }

                                                        private $current;

    public function setCurrent($current)
    {
        $this->current = $current;
         $this->apiParas["current"] = $current;
    }

    public function getCurrent()
    {
        return $this->current;
    }

                                                                                                                                                    private $deptNo;

    public function setDeptNo($deptNo)
    {
        $this->deptNo = $deptNo;
         $this->apiParas["deptNo"] = $deptNo;
    }

    public function getDeptNo()
    {
        return $this->deptNo;
    }

                                                        private $goodsNo;

    public function setGoodsNo($goodsNo)
    {
        $this->goodsNo = $goodsNo;
         $this->apiParas["goodsNo"] = $goodsNo;
    }

    public function getGoodsNo()
    {
        return $this->goodsNo;
    }

                                                        private $shopNo;

    public function setShopNo($shopNo)
    {
        $this->shopNo = $shopNo;
         $this->apiParas["shopNo"] = $shopNo;
    }

    public function getShopNo()
    {
        return $this->shopNo;
    }

                                                        private $spGoodsNo;

    public function setSpGoodsNo($spGoodsNo)
    {
        $this->spGoodsNo = $spGoodsNo;
         $this->apiParas["spGoodsNo"] = $spGoodsNo;
    }

    public function getSpGoodsNo()
    {
        return $this->spGoodsNo;
    }

                                                        private $isvGoodsNo;

    public function setIsvGoodsNo($isvGoodsNo)
    {
        $this->isvGoodsNo = $isvGoodsNo;
         $this->apiParas["isvGoodsNo"] = $isvGoodsNo;
    }

    public function getIsvGoodsNo()
    {
        return $this->isvGoodsNo;
    }

                                                        private $shopGoodsNoLT;

    public function setShopGoodsNoLT($shopGoodsNoLT)
    {
        $this->shopGoodsNoLT = $shopGoodsNoLT;
         $this->apiParas["shopGoodsNoLT"] = $shopGoodsNoLT;
    }

    public function getShopGoodsNoLT()
    {
        return $this->shopGoodsNoLT;
    }
}
