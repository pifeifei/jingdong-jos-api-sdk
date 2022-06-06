<?php

namespace ACES\Request;


class EclpStockQueryVmiShopStockRequest
{
    private $apiParas = array();
    private $version;
    private $goodsNos;
    private $shopNos;
    private $currentPage;
    private $pageSize;
    private $deptNo;
    private $warehouseNo;

    public function getApiMethodName()
    {
        return "jingdong.eclp.stock.queryVmiShopStock";
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

    public function getGoodsNos()
    {
        return $this->goodsNos;
    }

    public function setGoodsNos($goodsNos)
    {
        $this->goodsNos = $goodsNos;
        $this->apiParas["goodsNos"] = $goodsNos;
    }

    public function getShopNos()
    {
        return $this->shopNos;
    }

    public function setShopNos($shopNos)
    {
        $this->shopNos = $shopNos;
        $this->apiParas["shopNos"] = $shopNos;
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
}
