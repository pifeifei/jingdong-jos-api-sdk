<?php

namespace ACES\Request;


class EclpStockQueryGoodsLevelChangeRequest
{
    private $apiParas = array();
    private $version;
    private $deptNo;
    private $orderNo;
    private $outLevel;
    private $intoLevel;
    private $pageNo;
    private $pageSize;
    private $startTime;
    private $endTime;

    public function getApiMethodName()
    {
        return "jingdong.eclp.stock.queryGoodsLevelChange";
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

    public function getOrderNo()
    {
        return $this->orderNo;
    }

    public function setOrderNo($orderNo)
    {
        $this->orderNo = $orderNo;
        $this->apiParas["orderNo"] = $orderNo;
    }

    public function getOutLevel()
    {
        return $this->outLevel;
    }

    public function setOutLevel($outLevel)
    {
        $this->outLevel = $outLevel;
        $this->apiParas["outLevel"] = $outLevel;
    }

    public function getIntoLevel()
    {
        return $this->intoLevel;
    }

    public function setIntoLevel($intoLevel)
    {
        $this->intoLevel = $intoLevel;
        $this->apiParas["intoLevel"] = $intoLevel;
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
}
