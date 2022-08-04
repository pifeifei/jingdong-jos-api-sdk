<?php

namespace ACES\Request;

class EclpStockQueryBatchAttrStockRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.eclp.stock.queryBatchAttrStock';
    }

    public function check()
    {
    }

    public function getCursor()
    {
        return $this->apiParas['cursor'];
    }

    public function setCursor($cursor)
    {
        $this->apiParas['cursor'] = $cursor;

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

    public function getGoodsLevel()
    {
        return $this->apiParas['goodsLevel'];
    }

    public function setGoodsLevel($goodsLevel)
    {
        $this->apiParas['goodsLevel'] = $goodsLevel;

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

    public function getStartTime()
    {
        return $this->apiParas['startTime'];
    }

    public function setStartTime($startTime)
    {
        $this->apiParas['startTime'] = $startTime;

        return $this;
    }

    public function getPage()
    {
        return $this->apiParas['page'];
    }

    public function setPage($page)
    {
        $this->apiParas['page'] = $page;

        return $this;
    }

    public function getEndTime()
    {
        return $this->apiParas['endTime'];
    }

    public function setEndTime($endTime)
    {
        $this->apiParas['endTime'] = $endTime;

        return $this;
    }

    public function getSku()
    {
        return $this->apiParas['sku'];
    }

    public function setSku($sku)
    {
        $this->apiParas['sku'] = $sku;

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

    public function getWarehouseNo()
    {
        return $this->apiParas['warehouseNo'];
    }

    public function setWarehouseNo($warehouseNo)
    {
        $this->apiParas['warehouseNo'] = $warehouseNo;

        return $this;
    }

    public function getIsvGoodsNos()
    {
        return $this->apiParas['isvGoodsNos'];
    }

    public function setIsvGoodsNos($isvGoodsNos)
    {
        $this->apiParas['isvGoodsNos'] = $isvGoodsNos;

        return $this;
    }
}
