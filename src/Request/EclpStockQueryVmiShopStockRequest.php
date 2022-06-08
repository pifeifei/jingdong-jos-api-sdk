<?php

namespace ACES\Request;

class EclpStockQueryVmiShopStockRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.eclp.stock.queryVmiShopStock';
    }

    public function check()
    {
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

    public function getShopNos()
    {
        return $this->apiParas['shopNos'];
    }

    public function setShopNos($shopNos)
    {
        $this->apiParas['shopNos'] = $shopNos;

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
}
