<?php

namespace ACES\Request;


class EclpCollectorGoodsRecallUnlockRequest
{
    private $apiParas = array();
    private $version;
    private $businessLockNo;
    private $deptNo;

    public function getApiMethodName()
    {
        return "jingdong.eclp.collector.goodsRecallUnlock";
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

    public function getBusinessLockNo()
    {
        return $this->businessLockNo;
    }

    public function setBusinessLockNo($businessLockNo)
    {
        $this->businessLockNo = $businessLockNo;
        $this->apiParas["businessLockNo"] = $businessLockNo;
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
}
