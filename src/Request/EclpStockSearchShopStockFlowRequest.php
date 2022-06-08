<?php

namespace ACES\Request;

class EclpStockSearchShopStockFlowRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.eclp.stock.searchShopStockFlow';
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

    public function getGoodsNo()
    {
        return $this->apiParas['goodsNo'];
    }

    public function setGoodsNo($goodsNo)
    {
        $this->apiParas['goodsNo'] = $goodsNo;

        return $this;
    }

    public function getStartDate()
    {
        return $this->apiParas['startDate'];
    }

    public function setStartDate($startDate)
    {
        $this->apiParas['startDate'] = $startDate;

        return $this;
    }

    public function getEndDate()
    {
        return $this->apiParas['endDate'];
    }

    public function setEndDate($endDate)
    {
        $this->apiParas['endDate'] = $endDate;

        return $this;
    }

    public function getPageNumber()
    {
        return $this->apiParas['pageNumber'];
    }

    public function setPageNumber($pageNumber)
    {
        $this->apiParas['pageNumber'] = $pageNumber;

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
