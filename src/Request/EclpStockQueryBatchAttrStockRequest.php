<?php

namespace ACES\Request;


class EclpStockQueryBatchAttrStockRequest
{
    private $apiParas = array();
    private $version;
    private $cursor;
    private $stockType;
    private $goodsLevel;
    private $pageSize;
    private $startTime;
    private $page;
    private $endTime;
    private $sku;
    private $deptNo;
    private $warehouseNo;
    private $isvGoodsNos;

    public function getApiMethodName()
    {
        return "jingdong.eclp.stock.queryBatchAttrStock";
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

    public function getCursor()
    {
        return $this->cursor;
    }

    public function setCursor($cursor)
    {
        $this->cursor = $cursor;
        $this->apiParas["cursor"] = $cursor;
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

    public function getGoodsLevel()
    {
        return $this->goodsLevel;
    }

    public function setGoodsLevel($goodsLevel)
    {
        $this->goodsLevel = $goodsLevel;
        $this->apiParas["goodsLevel"] = $goodsLevel;
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

    public function getStartTime()
    {
        return $this->startTime;
    }

    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
        $this->apiParas["startTime"] = $startTime;
    }

    public function getPage()
    {
        return $this->page;
    }

    public function setPage($page)
    {
        $this->page = $page;
        $this->apiParas["page"] = $page;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }

    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
        $this->apiParas["endTime"] = $endTime;
    }

    public function getSku()
    {
        return $this->sku;
    }

    public function setSku($sku)
    {
        $this->sku = $sku;
        $this->apiParas["sku"] = $sku;
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

    public function getIsvGoodsNos()
    {
        return $this->isvGoodsNos;
    }

    public function setIsvGoodsNos($isvGoodsNos)
    {
        $this->isvGoodsNos = $isvGoodsNos;
        $this->apiParas["isvGoodsNos"] = $isvGoodsNos;
    }
}
