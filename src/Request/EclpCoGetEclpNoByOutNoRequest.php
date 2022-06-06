<?php

namespace ACES\Request;


class EclpCoGetEclpNoByOutNoRequest
{
    private $apiParas = array();
    private $version;
    private $deptNo;
    private $outNo;
    private $recepitType;

    public function getApiMethodName()
    {
        return "jingdong.eclp.co.getEclpNoByOutNo";
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

    public function getOutNo()
    {
        return $this->outNo;
    }

    public function setOutNo($outNo)
    {
        $this->outNo = $outNo;
        $this->apiParas["outNo"] = $outNo;
    }

    public function getRecepitType()
    {
        return $this->recepitType;
    }

    public function setRecepitType($recepitType)
    {
        $this->recepitType = $recepitType;
        $this->apiParas["recepitType"] = $recepitType;
    }
}
