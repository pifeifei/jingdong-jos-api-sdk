<?php

namespace ACES\Request;

class EclpStockQueryGoodsLevelChangeRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.eclp.stock.queryGoodsLevelChange';
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

    public function getOrderNo()
    {
        return $this->apiParas['orderNo'];
    }

    public function setOrderNo($orderNo)
    {
        $this->apiParas['orderNo'] = $orderNo;

        return $this;
    }

    public function getOutLevel()
    {
        return $this->apiParas['outLevel'];
    }

    public function setOutLevel($outLevel)
    {
        $this->apiParas['outLevel'] = $outLevel;

        return $this;
    }

    public function getIntoLevel()
    {
        return $this->apiParas['intoLevel'];
    }

    public function setIntoLevel($intoLevel)
    {
        $this->apiParas['intoLevel'] = $intoLevel;

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
}
