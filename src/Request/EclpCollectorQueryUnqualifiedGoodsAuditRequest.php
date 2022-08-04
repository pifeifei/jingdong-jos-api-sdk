<?php

namespace ACES\Request;

class EclpCollectorQueryUnqualifiedGoodsAuditRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.eclp.collector.queryUnqualifiedGoodsAudit';
    }

    public function check()
    {
    }

    public function getBeginTime()
    {
        return $this->apiParas['beginTime'];
    }

    public function setBeginTime($beginTime)
    {
        $this->apiParas['beginTime'] = $beginTime;

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

    public function getDeptNo()
    {
        return $this->apiParas['deptNo'];
    }

    public function setDeptNo($deptNo)
    {
        $this->apiParas['deptNo'] = $deptNo;

        return $this;
    }

    public function getGoodsLevel()
    {
        return $this->apiParas['goodsLevel'];
    }

    public function setGoodsLevel($goodsLevel)
    {
        $this->apiParas['goodsLevel'] = $goodsLevel;

        return $this;
    }
}
