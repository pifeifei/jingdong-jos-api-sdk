<?php

namespace ACES\Request;

class EclpStockQueryStockRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.eclp.stock.queryStock';
    }

    public function check()
    {
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

    public function getWarehouseNo()
    {
        return $this->apiParas['warehouseNo'];
    }

    public function setWarehouseNo($warehouseNo)
    {
        $this->apiParas['warehouseNo'] = $warehouseNo;

        return $this;
    }

    public function getStockStatus()
    {
        return $this->apiParas['stockStatus'];
    }

    public function setStockStatus($stockStatus)
    {
        $this->apiParas['stockStatus'] = $stockStatus;

        return $this;
    }

    public function getStockType()
    {
        return $this->apiParas['stockType'];
    }

    public function setStockType($stockType)
    {
        $this->apiParas['stockType'] = $stockType;

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

    public function getCurrentPage()
    {
        return $this->apiParas['currentPage'];
    }

    public function setCurrentPage($currentPage)
    {
        $this->apiParas['currentPage'] = $currentPage;

        return $this;
    }

    public function getPageSize()
    {
        return $this->apiParas['pageSize'];
    }

    public function setPageSize($pageSize)
    {
        $this->apiParas['pageSize'] = $pageSize;

        return $this;
    }

    public function getReturnZeroStock()
    {
        return $this->apiParas['returnZeroStock'];
    }

    public function setReturnZeroStock($returnZeroStock)
    {
        $this->apiParas['returnZeroStock'] = $returnZeroStock;

        return $this;
    }

    public function getReturnIsvLotattrs()
    {
        return $this->apiParas['returnIsvLotattrs'];
    }

    public function setReturnIsvLotattrs($returnIsvLotattrs)
    {
        $this->apiParas['returnIsvLotattrs'] = $returnIsvLotattrs;

        return $this;
    }

    public function getGoodsLevel()
    {
        return $this->apiParas['goodsLevel'];
    }

    public function setGoodsLevel($goodsLevel)
    {
        $this->apiParas['goodsLevel'] = $goodsLevel;

        return $this;
    }

    public function getIsvSku()
    {
        return $this->apiParas['isvSku'];
    }

    public function setIsvSku($isvSku)
    {
        $this->apiParas['isvSku'] = $isvSku;

        return $this;
    }

    public function getSellerGoodsSign()
    {
        return $this->apiParas['sellerGoodsSign'];
    }

    public function setSellerGoodsSign($sellerGoodsSign)
    {
        $this->apiParas['sellerGoodsSign'] = $sellerGoodsSign;

        return $this;
    }
}
