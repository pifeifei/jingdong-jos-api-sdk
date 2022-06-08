<?php

namespace ACES\Request;

class EclpCollectorQueryDrugTestingReportRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.eclp.collector.queryDrugTestingReport';
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

    public function getStatus()
    {
        return $this->apiParas['status'];
    }

    public function setStatus($status)
    {
        $this->apiParas['status'] = $status;

        return $this;
    }

    public function getDrugBatchNo()
    {
        return $this->apiParas['drugBatchNo'];
    }

    public function setDrugBatchNo($drugBatchNo)
    {
        $this->apiParas['drugBatchNo'] = $drugBatchNo;

        return $this;
    }

    public function getGoodsNo()
    {
        return $this->apiParas['goodsNo'];
    }

    public function setGoodsNo($goodsNo)
    {
        $this->apiParas['goodsNo'] = $goodsNo;

        return $this;
    }

    public function getIsvGoodsNo()
    {
        return $this->apiParas['isvGoodsNo'];
    }

    public function setIsvGoodsNo($isvGoodsNo)
    {
        $this->apiParas['isvGoodsNo'] = $isvGoodsNo;

        return $this;
    }
}
