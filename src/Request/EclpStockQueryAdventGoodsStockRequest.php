<?php

namespace ACES\Request;

class EclpStockQueryAdventGoodsStockRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.eclp.stock.queryAdventGoodsStock';
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

    public function getWarehouseNos()
    {
        return $this->apiParas['warehouseNos'];
    }

    public function setWarehouseNos($warehouseNos)
    {
        $this->apiParas['warehouseNos'] = $warehouseNos;

        return $this;
    }

    public function getGoodsNos()
    {
        return $this->apiParas['goodsNos'];
    }

    public function setGoodsNos($goodsNos)
    {
        $this->apiParas['goodsNos'] = $goodsNos;

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
}
