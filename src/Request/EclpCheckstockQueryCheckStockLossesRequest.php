<?php

namespace ACES\Request;

class EclpCheckstockQueryCheckStockLossesRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.eclp.checkstock.queryCheckStockLosses';
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

    public function getCheckStockNos()
    {
        return $this->apiParas['checkStockNos'];
    }

    public function setCheckStockNos($checkStockNos)
    {
        $this->apiParas['checkStockNos'] = $checkStockNos;

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

    public function getReturnIsvLotattrs()
    {
        return $this->apiParas['returnIsvLotattrs'];
    }

    public function setReturnIsvLotattrs($returnIsvLotattrs)
    {
        $this->apiParas['returnIsvLotattrs'] = $returnIsvLotattrs;

        return $this;
    }
}
