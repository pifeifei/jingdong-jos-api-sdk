<?php

namespace ACES\Request;


class EclpSpareQueryTransOrderRequest
{
    private $apiParas = array();
    private $version;
    private $deptName;
    private $orderType;
    private $destWarehouseNo;
    private $sellerName;
    private $sellerNo;
    private $pageSize;
    private $startTime;
    private $startWarehouseNo;
    private $endTime;
    private $type;
    private $pageNum;
    private $deptNo;

    public function getApiMethodName()
    {
        return "jingdong.eclp.spare.queryTransOrder";
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

    public function getDeptName()
    {
        return $this->deptName;
    }

    public function setDeptName($deptName)
    {
        $this->deptName = $deptName;
        $this->apiParas["deptName"] = $deptName;
    }

    public function getOrderType()
    {
        return $this->orderType;
    }

    public function setOrderType($orderType)
    {
        $this->orderType = $orderType;
        $this->apiParas["orderType"] = $orderType;
    }

    public function getDestWarehouseNo()
    {
        return $this->destWarehouseNo;
    }

    public function setDestWarehouseNo($destWarehouseNo)
    {
        $this->destWarehouseNo = $destWarehouseNo;
        $this->apiParas["destWarehouseNo"] = $destWarehouseNo;
    }

    public function getSellerName()
    {
        return $this->sellerName;
    }

    public function setSellerName($sellerName)
    {
        $this->sellerName = $sellerName;
        $this->apiParas["sellerName"] = $sellerName;
    }

    public function getSellerNo()
    {
        return $this->sellerNo;
    }

    public function setSellerNo($sellerNo)
    {
        $this->sellerNo = $sellerNo;
        $this->apiParas["sellerNo"] = $sellerNo;
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

    public function getStartWarehouseNo()
    {
        return $this->startWarehouseNo;
    }

    public function setStartWarehouseNo($startWarehouseNo)
    {
        $this->startWarehouseNo = $startWarehouseNo;
        $this->apiParas["startWarehouseNo"] = $startWarehouseNo;
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

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
        $this->apiParas["type"] = $type;
    }

    public function getPageNum()
    {
        return $this->pageNum;
    }

    public function setPageNum($pageNum)
    {
        $this->pageNum = $pageNum;
        $this->apiParas["pageNum"] = $pageNum;
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
}
