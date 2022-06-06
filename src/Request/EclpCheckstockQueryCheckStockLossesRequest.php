<?php

namespace ACES\Request;


class EclpCheckstockQueryCheckStockLossesRequest
{
    private $apiParas = array();
    private $version;
    private $deptNo;
    private $checkStockNos;
    private $pageNo;
    private $pageSize;
    private $startTime;
    private $endTime;
    private $returnIsvLotattrs;

    public function getApiMethodName()
    {
        return "jingdong.eclp.checkstock.queryCheckStockLosses";
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

    public function getCheckStockNos()
    {
        return $this->checkStockNos;
    }

    public function setCheckStockNos($checkStockNos)
    {
        $this->checkStockNos = $checkStockNos;
        $this->apiParas["checkStockNos"] = $checkStockNos;
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

    public function getReturnIsvLotattrs()
    {
        return $this->returnIsvLotattrs;
    }

    public function setReturnIsvLotattrs($returnIsvLotattrs)
    {
        $this->returnIsvLotattrs = $returnIsvLotattrs;
        $this->apiParas["returnIsvLotattrs"] = $returnIsvLotattrs;
    }
}
