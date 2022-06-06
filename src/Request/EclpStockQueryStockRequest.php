<?php

namespace ACES\Request;


class EclpStockQueryStockRequest
{
    private $apiParas = array();
    private $version;
    private $deptNo;
    private $warehouseNo;
    private $stockStatus;
    private $stockType;
    private $goodsNo;
    private $currentPage;
    private $pageSize;
    private $returnZeroStock;
    private $returnIsvLotattrs;
    private $goodsLevel;
    private $isvSku;
    private $sellerGoodsSign;

    public function getApiMethodName()
    {
        return "jingdong.eclp.stock.queryStock";
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

    public function getDeptNo()
    {
        return $this->deptNo;
    }

    public function setDeptNo($deptNo)
    {
        $this->deptNo = $deptNo;
        $this->apiParas["deptNo"] = $deptNo;
    }

    public function getWarehouseNo()
    {
        return $this->warehouseNo;
    }

    public function setWarehouseNo($warehouseNo)
    {
        $this->warehouseNo = $warehouseNo;
        $this->apiParas["warehouseNo"] = $warehouseNo;
    }

    public function getStockStatus()
    {
        return $this->stockStatus;
    }

    public function setStockStatus($stockStatus)
    {
        $this->stockStatus = $stockStatus;
        $this->apiParas["stockStatus"] = $stockStatus;
    }

    public function getStockType()
    {
        return $this->stockType;
    }

    public function setStockType($stockType)
    {
        $this->stockType = $stockType;
        $this->apiParas["stockType"] = $stockType;
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

    public function getCurrentPage()
    {
        return $this->currentPage;
    }

    public function setCurrentPage($currentPage)
    {
        $this->currentPage = $currentPage;
        $this->apiParas["currentPage"] = $currentPage;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }

    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
        $this->apiParas["pageSize"] = $pageSize;
    }

    public function getReturnZeroStock()
    {
        return $this->returnZeroStock;
    }

    public function setReturnZeroStock($returnZeroStock)
    {
        $this->returnZeroStock = $returnZeroStock;
        $this->apiParas["returnZeroStock"] = $returnZeroStock;
    }

    public function getReturnIsvLotattrs()
    {
        return $this->returnIsvLotattrs;
    }

    public function setReturnIsvLotattrs($returnIsvLotattrs)
    {
        $this->returnIsvLotattrs = $returnIsvLotattrs;
        $this->apiParas["returnIsvLotattrs"] = $returnIsvLotattrs;
    }

    public function getGoodsLevel()
    {
        return $this->goodsLevel;
    }

    public function setGoodsLevel($goodsLevel)
    {
        $this->goodsLevel = $goodsLevel;
        $this->apiParas["goodsLevel"] = $goodsLevel;
    }

    public function getIsvSku()
    {
        return $this->isvSku;
    }

    public function setIsvSku($isvSku)
    {
        $this->isvSku = $isvSku;
        $this->apiParas["isvSku"] = $isvSku;
    }

    public function getSellerGoodsSign()
    {
        return $this->sellerGoodsSign;
    }

    public function setSellerGoodsSign($sellerGoodsSign)
    {
        $this->sellerGoodsSign = $sellerGoodsSign;
        $this->apiParas["sellerGoodsSign"] = $sellerGoodsSign;
    }
}
