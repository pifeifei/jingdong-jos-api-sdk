<?php

namespace ACES\Request;


class EclpStockQueryBatchChangeRequest
{
    private $apiParas = array();
    private $version;
    private $deptNo;
    private $allocativeCenterNo;
    private $warehouseNo;
    private $batchAttrChangeNo;
    private $startTime;
    private $endTime;
    private $startPage;
    private $onePageNum;

    public function getApiMethodName()
    {
        return "jingdong.eclp.stock.queryBatchChange";
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

    public function getDeptNo()
    {
        return $this->deptNo;
    }

    public function setDeptNo($deptNo)
    {
        $this->deptNo = $deptNo;
        $this->apiParas["deptNo"] = $deptNo;
    }

    public function getAllocativeCenterNo()
    {
        return $this->allocativeCenterNo;
    }

    public function setAllocativeCenterNo($allocativeCenterNo)
    {
        $this->allocativeCenterNo = $allocativeCenterNo;
        $this->apiParas["allocativeCenterNo"] = $allocativeCenterNo;
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

    public function getBatchAttrChangeNo()
    {
        return $this->batchAttrChangeNo;
    }

    public function setBatchAttrChangeNo($batchAttrChangeNo)
    {
        $this->batchAttrChangeNo = $batchAttrChangeNo;
        $this->apiParas["batchAttrChangeNo"] = $batchAttrChangeNo;
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

    public function getStartPage()
    {
        return $this->startPage;
    }

    public function setStartPage($startPage)
    {
        $this->startPage = $startPage;
        $this->apiParas["startPage"] = $startPage;
    }

    public function getOnePageNum()
    {
        return $this->onePageNum;
    }

    public function setOnePageNum($onePageNum)
    {
        $this->onePageNum = $onePageNum;
        $this->apiParas["onePageNum"] = $onePageNum;
    }
}
