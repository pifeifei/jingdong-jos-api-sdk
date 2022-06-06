<?php

namespace ACES\Request;


class EclpTracesourceQueryTraceSourceInfoRequest
{
    private $apiParas = array();
    private $version;
    private $soNo;
    private $isvSoNo;
    private $deptNo;
    private $pin;

    public function getApiMethodName()
    {
        return "jingdong.eclp.tracesource.queryTraceSourceInfo";
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

    public function getSoNo()
    {
        return $this->soNo;
    }

    public function setSoNo($soNo)
    {
        $this->soNo = $soNo;
        $this->apiParas["soNo"] = $soNo;
    }

    public function getIsvSoNo()
    {
        return $this->isvSoNo;
    }

    public function setIsvSoNo($isvSoNo)
    {
        $this->isvSoNo = $isvSoNo;
        $this->apiParas["isvSoNo"] = $isvSoNo;
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

    public function getPin()
    {
        return $this->pin;
    }

    public function setPin($pin)
    {
        $this->pin = $pin;
        $this->apiParas["pin"] = $pin;
    }
}
