<?php

namespace ACES\Request;

class EclpSerialQueryPageSerialByOwnerNoAndConditionRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.eclp.serial.queryPageSerialByOwnerNoAndCondition';
    }

    public function check()
    {
    }

    public function getBillType()
    {
        return $this->apiParas['billType'];
    }

    public function setBillType($billType)
    {
        $this->apiParas['billType'] = $billType;

        return $this;
    }

    public function getOwnerNo()
    {
        return $this->apiParas['ownerNo'];
    }

    public function setOwnerNo($ownerNo)
    {
        $this->apiParas['ownerNo'] = $ownerNo;

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

    public function getEndTime()
    {
        return $this->apiParas['endTime'];
    }

    public function setEndTime($endTime)
    {
        $this->apiParas['endTime'] = $endTime;

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

    public function getQueryType()
    {
        return $this->apiParas['queryType'];
    }

    public function setQueryType($queryType)
    {
        $this->apiParas['queryType'] = $queryType;

        return $this;
    }
}
