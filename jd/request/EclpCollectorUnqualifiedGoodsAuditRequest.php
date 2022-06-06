<?php

class EclpCollectorUnqualifiedGoodsAuditRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.collector.unqualifiedGoodsAudit";
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

                                                        private $identityNo;

    public function setIdentityNo($identityNo)
    {
        $this->identityNo = $identityNo;
         $this->apiParas["identityNo"] = $identityNo;
    }

    public function getIdentityNo()
    {
        return $this->identityNo;
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
