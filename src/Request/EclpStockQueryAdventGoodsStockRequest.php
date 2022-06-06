<?php

namespace ACES\Request;


class EclpStockQueryAdventGoodsStockRequest
{
    private $apiParas = array();
    private $version;
    private $deptNo;
    private $warehouseNos;
    private $goodsNos;
    private $currentPage;
    private $pageSize;

    public function getApiMethodName()
    {
        return "jingdong.eclp.stock.queryAdventGoodsStock";
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

    public function getWarehouseNos()
    {
        return $this->warehouseNos;
    }

    public function setWarehouseNos($warehouseNos)
    {
        $this->warehouseNos = $warehouseNos;
        $this->apiParas["warehouseNos"] = $warehouseNos;
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
}
