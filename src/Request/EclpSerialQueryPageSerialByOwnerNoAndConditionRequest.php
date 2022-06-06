<?php

namespace ACES\Request;


class EclpSerialQueryPageSerialByOwnerNoAndConditionRequest
{
    private $apiParas = array();
    private $version;
    private $billType;
    private $ownerNo;
    private $startTime;
    private $endTime;
    private $warehouseNo;
    private $pageNo;
    private $pageSize;
    private $queryType;

    public function getApiMethodName()
    {
        return "jingdong.eclp.serial.queryPageSerialByOwnerNoAndCondition";
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

    public function getBillType()
    {
        return $this->billType;
    }

    public function setBillType($billType)
    {
        $this->billType = $billType;
        $this->apiParas["billType"] = $billType;
    }

    public function getOwnerNo()
    {
        return $this->ownerNo;
    }

    public function setOwnerNo($ownerNo)
    {
        $this->ownerNo = $ownerNo;
        $this->apiParas["ownerNo"] = $ownerNo;
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

    public function getEndTime()
    {
        return $this->endTime;
    }

    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
        $this->apiParas["endTime"] = $endTime;
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

    public function getPageNo()
    {
        return $this->pageNo;
    }

    public function setPageNo($pageNo)
    {
        $this->pageNo = $pageNo;
        $this->apiParas["pageNo"] = $pageNo;
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

    public function getQueryType()
    {
        return $this->queryType;
    }

    public function setQueryType($queryType)
    {
        $this->queryType = $queryType;
        $this->apiParas["queryType"] = $queryType;
    }
}
