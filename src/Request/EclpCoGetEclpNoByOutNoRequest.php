<?php

namespace ACES\Request;

class EclpCoGetEclpNoByOutNoRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.eclp.co.getEclpNoByOutNo';
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

    public function getOutNo()
    {
        return $this->apiParas['outNo'];
    }

    public function setOutNo($outNo)
    {
        $this->apiParas['outNo'] = $outNo;

        return $this;
    }

    public function getRecepitType()
    {
        return $this->apiParas['recepitType'];
    }

    public function setRecepitType($recepitType)
    {
        $this->apiParas['recepitType'] = $recepitType;

        return $this;
    }
}
