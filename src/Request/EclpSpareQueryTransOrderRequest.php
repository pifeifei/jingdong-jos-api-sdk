<?php

namespace ACES\Request;

class EclpSpareQueryTransOrderRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.eclp.spare.queryTransOrder';
    }

    public function check()
    {
    }

    public function getDeptName()
    {
        return $this->apiParas['deptName'];
    }

    public function setDeptName($deptName)
    {
        $this->apiParas['deptName'] = $deptName;

        return $this;
    }

    public function getOrderType()
    {
        return $this->apiParas['orderType'];
    }

    public function setOrderType($orderType)
    {
        $this->apiParas['orderType'] = $orderType;

        return $this;
    }

    public function getDestWarehouseNo()
    {
        return $this->apiParas['destWarehouseNo'];
    }

    public function setDestWarehouseNo($destWarehouseNo)
    {
        $this->apiParas['destWarehouseNo'] = $destWarehouseNo;

        return $this;
    }

    public function getSellerName()
    {
        return $this->apiParas['sellerName'];
    }

    public function setSellerName($sellerName)
    {
        $this->apiParas['sellerName'] = $sellerName;

        return $this;
    }

    public function getSellerNo()
    {
        return $this->apiParas['sellerNo'];
    }

    public function setSellerNo($sellerNo)
    {
        $this->apiParas['sellerNo'] = $sellerNo;

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

    public function getStartWarehouseNo()
    {
        return $this->apiParas['startWarehouseNo'];
    }

    public function setStartWarehouseNo($startWarehouseNo)
    {
        $this->apiParas['startWarehouseNo'] = $startWarehouseNo;

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

    public function getType()
    {
        return $this->apiParas['type'];
    }

    public function setType($type)
    {
        $this->apiParas['type'] = $type;

        return $this;
    }

    public function getPageNum()
    {
        return $this->apiParas['pageNum'];
    }

    public function setPageNum($pageNum)
    {
        $this->apiParas['pageNum'] = $pageNum;

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
}
