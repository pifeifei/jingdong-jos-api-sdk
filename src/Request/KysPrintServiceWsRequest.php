<?php

namespace ACES\Request;


class KysPrintServiceWsRequest
{
    private $apiParas = array();
    private $version;
    private $noList;
    private $noType;
    private $deptId;
    private $deptNo;

    public function getApiMethodName()
    {
        return "jingdong.kys.PrintServiceWs";
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

    public function getNoList()
    {
        return $this->noList;
    }

    public function setNoList($noList)
    {
        $this->noList = $noList;
        $this->apiParas["noList"] = $noList;
    }

    public function getNoType()
    {
        return $this->noType;
    }

    public function setNoType($noType)
    {
        $this->noType = $noType;
        $this->apiParas["noType"] = $noType;
    }

    public function getDeptId()
    {
        return $this->deptId;
    }

    public function setDeptId($deptId)
    {
        $this->deptId = $deptId;
        $this->apiParas["deptId"] = $deptId;
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
