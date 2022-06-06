<?php

namespace ACES\Request;


class EclpCollectorQueryDrugTestingReportRequest
{
    private $apiParas = array();
    private $version;
    private $deptNo;
    private $status;
    private $drugBatchNo;
    private $goodsNo;
    private $isvGoodsNo;

    public function getApiMethodName()
    {
        return "jingdong.eclp.collector.queryDrugTestingReport";
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

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
        $this->apiParas["status"] = $status;
    }

    public function getDrugBatchNo()
    {
        return $this->drugBatchNo;
    }

    public function setDrugBatchNo($drugBatchNo)
    {
        $this->drugBatchNo = $drugBatchNo;
        $this->apiParas["drugBatchNo"] = $drugBatchNo;
    }

    public function getGoodsNo()
    {
        return $this->goodsNo;
    }

    public function setGoodsNo($goodsNo)
    {
        $this->goodsNo = $goodsNo;
        $this->apiParas["goodsNo"] = $goodsNo;
    }

    public function getIsvGoodsNo()
    {
        return $this->isvGoodsNo;
    }

    public function setIsvGoodsNo($isvGoodsNo)
    {
        $this->isvGoodsNo = $isvGoodsNo;
        $this->apiParas["isvGoodsNo"] = $isvGoodsNo;
    }
}
