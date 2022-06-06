<?php

class EclpCollectorQueryUnqualifiedGoodsAuditRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.collector.queryUnqualifiedGoodsAudit";
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
                                                                                                                                                                private $beginTime;

    public function setBeginTime($beginTime)
    {
        $this->beginTime = $beginTime;
         $this->apiParas["beginTime"] = $beginTime;
    }

    public function getBeginTime()
    {
        return $this->beginTime;
    }

                                                        private $endTime;

    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
         $this->apiParas["endTime"] = $endTime;
    }

    public function getEndTime()
    {
        return $this->endTime;
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

                                                        private $goodsLevel;

    public function setGoodsLevel($goodsLevel)
    {
        $this->goodsLevel = $goodsLevel;
         $this->apiParas["goodsLevel"] = $goodsLevel;
    }

    public function getGoodsLevel()
    {
        return $this->goodsLevel;
    }
}
