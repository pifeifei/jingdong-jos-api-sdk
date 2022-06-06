<?php

namespace ACES\Request;


class EclpCollectorUnqualifiedGoodsAuditRequest
{
    private $apiParas = array();
    private $version;
    private $deptNo;
    private $identityNo;
    private $goodsLevel;

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

    public function getIdentityNo()
    {
        return $this->identityNo;
    }

    public function setIdentityNo($identityNo)
    {
        $this->identityNo = $identityNo;
        $this->apiParas["identityNo"] = $identityNo;
    }

    public function getGoodsLevel()
    {
        return $this->goodsLevel;
    }

    public function setGoodsLevel($goodsLevel)
    {
        $this->goodsLevel = $goodsLevel;
        $this->apiParas["goodsLevel"] = $goodsLevel;
    }
}
