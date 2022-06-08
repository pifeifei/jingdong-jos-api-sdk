<?php

namespace ACES\Request;

class EclpPoQueryPoNoRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.eclp.po.queryPoNo';
    }

    public function check()
    {
    }

    public function getDeptNo()
    {
        return $this->apiParas['deptNo'];
    }

    public function setDeptNo($deptNo)
    {
        $this->apiParas['deptNo'] = $deptNo;

        return $this;
    }

    public function getPoStatus()
    {
        return $this->apiParas['poStatus'];
    }

    public function setPoStatus($poStatus)
    {
        $this->apiParas['poStatus'] = $poStatus;

        return $this;
    }

    public function getDateType()
    {
        return $this->apiParas['dateType'];
    }

    public function setDateType($dateType)
    {
        $this->apiParas['dateType'] = $dateType;

        return $this;
    }

    public function getStartDate()
    {
        return $this->apiParas['startDate'];
    }

    public function setStartDate($startDate)
    {
        $this->apiParas['startDate'] = $startDate;

        return $this;
    }

    public function getEndDate()
    {
        return $this->apiParas['endDate'];
    }

    public function setEndDate($endDate)
    {
        $this->apiParas['endDate'] = $endDate;

        return $this;
    }

    public function getPoNo()
    {
        return $this->apiParas['poNo'];
    }

    public function setPoNo($poNo)
    {
        $this->apiParas['poNo'] = $poNo;

        return $this;
    }

    public function getOutPoNo()
    {
        return $this->apiParas['outPoNo'];
    }

    public function setOutPoNo($outPoNo)
    {
        $this->apiParas['outPoNo'] = $outPoNo;

        return $this;
    }
}
