<?php

namespace ACES\Request;

class EclpOrderQueryOrderListRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.eclp.order.queryOrderList';
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

    public function getPageNo()
    {
        return $this->apiParas['pageNo'];
    }

    public function setPageNo($pageNo)
    {
        $this->apiParas['pageNo'] = $pageNo;

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

    public function getSalePlatformOrderNo()
    {
        return $this->apiParas['salePlatformOrderNo'];
    }

    public function setSalePlatformOrderNo($salePlatformOrderNo)
    {
        $this->apiParas['salePlatformOrderNo'] = $salePlatformOrderNo;

        return $this;
    }

    public function getOrderStatus()
    {
        return $this->apiParas['orderStatus'];
    }

    public function setOrderStatus($orderStatus)
    {
        $this->apiParas['orderStatus'] = $orderStatus;

        return $this;
    }
}
