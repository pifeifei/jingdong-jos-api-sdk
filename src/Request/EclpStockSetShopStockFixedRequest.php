<?php

namespace ACES\Request;

class EclpStockSetShopStockFixedRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.eclp.stock.setShopStockFixed';
    }

    public function check()
    {
    }

    public function getRequestId()
    {
        return $this->apiParas['requestId'];
    }

    public function setRequestId($requestId)
    {
        $this->apiParas['requestId'] = $requestId;

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

    public function getShopNo()
    {
        return $this->apiParas['shopNo'];
    }

    public function setShopNo($shopNo)
    {
        $this->apiParas['shopNo'] = $shopNo;

        return $this;
    }

    public function getWarehouseNo()
    {
        return $this->apiParas['warehouseNo'];
    }

    public function setWarehouseNo($warehouseNo)
    {
        $this->apiParas['warehouseNo'] = $warehouseNo;

        return $this;
    }

    public function getStockNum()
    {
        return $this->apiParas['stockNum'];
    }

    public function setStockNum($stockNum)
    {
        $this->apiParas['stockNum'] = $stockNum;

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

    public function getShopType()
    {
        return $this->apiParas['shopType'];
    }

    public function setShopType($shopType)
    {
        $this->apiParas['shopType'] = $shopType;

        return $this;
    }

    public function getOpUser()
    {
        return $this->apiParas['opUser'];
    }

    public function setOpUser($opUser)
    {
        $this->apiParas['opUser'] = $opUser;

        return $this;
    }
}
