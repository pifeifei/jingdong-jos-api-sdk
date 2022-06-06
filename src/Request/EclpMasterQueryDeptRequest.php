<?php

namespace ACES\Request;


class EclpMasterQueryDeptRequest
{
    private $apiParas = array();
    private $version;
    private $deptNos;

    public function getApiMethodName()
    {
        return "jingdong.eclp.master.queryDept";
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

    public function getDeptNos()
    {
        return $this->deptNos;
    }

    public function setDeptNos($deptNos)
    {
        $this->deptNos = $deptNos;
        $this->apiParas["deptNos"] = $deptNos;
    }
}
