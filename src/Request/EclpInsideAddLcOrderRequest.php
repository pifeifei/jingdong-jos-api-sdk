<?php

namespace ACES\Request;


class EclpInsideAddLcOrderRequest
{
    private $apiParas = array();
    private $version;
    private $sellerLcNo;
    private $sellerNo;
    private $wareHouseNo;
    private $deptNo;
    private $outsideLogicStock;
    private $insideLogicStock;
    private $lack;
    private $orderLine;
    private $isvGoodsNo;
    private $outGoodsLevel;
    private $inGoodsLevel;
    private $planQty;

    public function getApiMethodName()
    {
        return "jingdong.eclp.inside.addLcOrder";
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

    public function getSellerLcNo()
    {
        return $this->sellerLcNo;
    }

    public function setSellerLcNo($sellerLcNo)
    {
        $this->sellerLcNo = $sellerLcNo;
        $this->apiParas["sellerLcNo"] = $sellerLcNo;
    }

    public function getSellerNo()
    {
        return $this->sellerNo;
    }

    public function setSellerNo($sellerNo)
    {
        $this->sellerNo = $sellerNo;
        $this->apiParas["sellerNo"] = $sellerNo;
    }

    public function getWareHouseNo()
    {
        return $this->wareHouseNo;
    }

    public function setWareHouseNo($wareHouseNo)
    {
        $this->wareHouseNo = $wareHouseNo;
        $this->apiParas["wareHouseNo"] = $wareHouseNo;
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

    public function getOutsideLogicStock()
    {
        return $this->outsideLogicStock;
    }

    public function setOutsideLogicStock($outsideLogicStock)
    {
        $this->outsideLogicStock = $outsideLogicStock;
        $this->apiParas["outsideLogicStock"] = $outsideLogicStock;
    }

    public function getInsideLogicStock()
    {
        return $this->insideLogicStock;
    }

    public function setInsideLogicStock($insideLogicStock)
    {
        $this->insideLogicStock = $insideLogicStock;
        $this->apiParas["insideLogicStock"] = $insideLogicStock;
    }

    public function getLack()
    {
        return $this->lack;
    }

    public function setLack($lack)
    {
        $this->lack = $lack;
        $this->apiParas["lack"] = $lack;
    }

    public function getOrderLine()
    {
        return $this->orderLine;
    }

    public function setOrderLine($orderLine)
    {
        $this->orderLine = $orderLine;
        $this->apiParas["orderLine"] = $orderLine;
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

    public function getOutGoodsLevel()
    {
        return $this->outGoodsLevel;
    }

    public function setOutGoodsLevel($outGoodsLevel)
    {
        $this->outGoodsLevel = $outGoodsLevel;
        $this->apiParas["outGoodsLevel"] = $outGoodsLevel;
    }

    public function getInGoodsLevel()
    {
        return $this->inGoodsLevel;
    }

    public function setInGoodsLevel($inGoodsLevel)
    {
        $this->inGoodsLevel = $inGoodsLevel;
        $this->apiParas["inGoodsLevel"] = $inGoodsLevel;
    }

    public function getPlanQty()
    {
        return $this->planQty;
    }

    public function setPlanQty($planQty)
    {
        $this->planQty = $planQty;
        $this->apiParas["planQty"] = $planQty;
    }
}
