<?php

namespace ACES\Request;


class EclpPoQueryPoNoRequest
{
    private $apiParas = array();
    private $version;
    private $deptNo;
    private $poStatus;
    private $dateType;
    private $startDate;
    private $endDate;
    private $poNo;
    private $outPoNo;

    public function getApiMethodName()
    {
        return "jingdong.eclp.po.queryPoNo";
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

    public function getPoStatus()
    {
        return $this->poStatus;
    }

    public function setPoStatus($poStatus)
    {
        $this->poStatus = $poStatus;
        $this->apiParas["poStatus"] = $poStatus;
    }

    public function getDateType()
    {
        return $this->dateType;
    }

    public function setDateType($dateType)
    {
        $this->dateType = $dateType;
        $this->apiParas["dateType"] = $dateType;
    }

    public function getStartDate()
    {
        return $this->startDate;
    }

    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        $this->apiParas["startDate"] = $startDate;
    }

    public function getEndDate()
    {
        return $this->endDate;
    }

    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        $this->apiParas["endDate"] = $endDate;
    }

    public function getPoNo()
    {
        return $this->poNo;
    }

    public function setPoNo($poNo)
    {
        $this->poNo = $poNo;
        $this->apiParas["poNo"] = $poNo;
    }

    public function getOutPoNo()
    {
        return $this->outPoNo;
    }

    public function setOutPoNo($outPoNo)
    {
        $this->outPoNo = $outPoNo;
        $this->apiParas["outPoNo"] = $outPoNo;
    }
}
