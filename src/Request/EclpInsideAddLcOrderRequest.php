<?php

namespace ACES\Request;

class EclpInsideAddLcOrderRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.eclp.inside.addLcOrder';
    }

    public function check()
    {
    }

    public function getSellerLcNo()
    {
        return $this->apiParas['sellerLcNo'];
    }

    public function setSellerLcNo($sellerLcNo)
    {
        $this->apiParas['sellerLcNo'] = $sellerLcNo;

        return $this;
    }

    public function getSellerNo()
    {
        return $this->apiParas['sellerNo'];
    }

    public function setSellerNo($sellerNo)
    {
        $this->apiParas['sellerNo'] = $sellerNo;

        return $this;
    }

    public function getWareHouseNo()
    {
        return $this->apiParas['wareHouseNo'];
    }

    public function setWareHouseNo($wareHouseNo)
    {
        $this->apiParas['wareHouseNo'] = $wareHouseNo;

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

    public function getOutsideLogicStock()
    {
        return $this->apiParas['outsideLogicStock'];
    }

    public function setOutsideLogicStock($outsideLogicStock)
    {
        $this->apiParas['outsideLogicStock'] = $outsideLogicStock;

        return $this;
    }

    public function getInsideLogicStock()
    {
        return $this->apiParas['insideLogicStock'];
    }

    public function setInsideLogicStock($insideLogicStock)
    {
        $this->apiParas['insideLogicStock'] = $insideLogicStock;

        return $this;
    }

    public function getLack()
    {
        return $this->apiParas['lack'];
    }

    public function setLack($lack)
    {
        $this->apiParas['lack'] = $lack;

        return $this;
    }

    public function getOrderLine()
    {
        return $this->apiParas['orderLine'];
    }

    public function setOrderLine($orderLine)
    {
        $this->apiParas['orderLine'] = $orderLine;

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

    public function getOutGoodsLevel()
    {
        return $this->apiParas['outGoodsLevel'];
    }

    public function setOutGoodsLevel($outGoodsLevel)
    {
        $this->apiParas['outGoodsLevel'] = $outGoodsLevel;

        return $this;
    }

    public function getInGoodsLevel()
    {
        return $this->apiParas['inGoodsLevel'];
    }

    public function setInGoodsLevel($inGoodsLevel)
    {
        $this->apiParas['inGoodsLevel'] = $inGoodsLevel;

        return $this;
    }

    public function getPlanQty()
    {
        return $this->apiParas['planQty'];
    }

    public function setPlanQty($planQty)
    {
        $this->apiParas['planQty'] = $planQty;

        return $this;
    }
}
