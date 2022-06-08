<?php

namespace ACES\Request;

class EclpStockQueryBatchChangeRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.eclp.stock.queryBatchChange';
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

    public function getAllocativeCenterNo()
    {
        return $this->apiParas['allocativeCenterNo'];
    }

    public function setAllocativeCenterNo($allocativeCenterNo)
    {
        $this->apiParas['allocativeCenterNo'] = $allocativeCenterNo;

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

    public function getBatchAttrChangeNo()
    {
        return $this->apiParas['batchAttrChangeNo'];
    }

    public function setBatchAttrChangeNo($batchAttrChangeNo)
    {
        $this->apiParas['batchAttrChangeNo'] = $batchAttrChangeNo;

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

    public function getStartPage()
    {
        return $this->apiParas['startPage'];
    }

    public function setStartPage($startPage)
    {
        $this->apiParas['startPage'] = $startPage;

        return $this;
    }

    public function getOnePageNum()
    {
        return $this->apiParas['onePageNum'];
    }

    public function setOnePageNum($onePageNum)
    {
        $this->apiParas['onePageNum'] = $onePageNum;

        return $this;
    }
}
