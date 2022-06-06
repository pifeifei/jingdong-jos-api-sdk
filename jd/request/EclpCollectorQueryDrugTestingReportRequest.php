<?php

class EclpCollectorQueryDrugTestingReportRequest
{
    private $apiParas = array();

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

    private $version;

    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function getVersion()
    {
        return $this->version;
    }
                                                                                                                                                                private $deptNo;

    public function setDeptNo($deptNo)
    {
        $this->deptNo = $deptNo;
         $this->apiParas["deptNo"] = $deptNo;
    }

    public function getDeptNo()
    {
        return $this->deptNo;
    }

                                                        private $status;

    public function setStatus($status)
    {
        $this->status = $status;
         $this->apiParas["status"] = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }

                                                        private $drugBatchNo;

    public function setDrugBatchNo($drugBatchNo)
    {
        $this->drugBatchNo = $drugBatchNo;
         $this->apiParas["drugBatchNo"] = $drugBatchNo;
    }

    public function getDrugBatchNo()
    {
        return $this->drugBatchNo;
    }

                                                        private $goodsNo;

    public function setGoodsNo($goodsNo)
    {
        $this->goodsNo = $goodsNo;
         $this->apiParas["goodsNo"] = $goodsNo;
    }

    public function getGoodsNo()
    {
        return $this->goodsNo;
    }

                                                        private $isvGoodsNo;

    public function setIsvGoodsNo($isvGoodsNo)
    {
        $this->isvGoodsNo = $isvGoodsNo;
         $this->apiParas["isvGoodsNo"] = $isvGoodsNo;
    }

    public function getIsvGoodsNo()
    {
        return $this->isvGoodsNo;
    }
}
