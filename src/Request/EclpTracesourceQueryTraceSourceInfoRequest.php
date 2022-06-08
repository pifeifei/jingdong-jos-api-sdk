<?php

namespace ACES\Request;

class EclpTracesourceQueryTraceSourceInfoRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.eclp.tracesource.queryTraceSourceInfo';
    }

    public function check()
    {
    }

    public function getSoNo()
    {
        return $this->apiParas['soNo'];
    }

    public function setSoNo($soNo)
    {
        $this->apiParas['soNo'] = $soNo;

        return $this;
    }

    public function getIsvSoNo()
    {
        return $this->apiParas['isvSoNo'];
    }

    public function setIsvSoNo($isvSoNo)
    {
        $this->apiParas['isvSoNo'] = $isvSoNo;

        return $this;
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

    public function getPin()
    {
        return $this->apiParas['pin'];
    }

    public function setPin($pin)
    {
        $this->apiParas['pin'] = $pin;

        return $this;
    }
}
