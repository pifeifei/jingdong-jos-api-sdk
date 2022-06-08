<?php

namespace ACES\Request;

class KysPrintServiceWsRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.kys.PrintServiceWs';
    }

    public function check()
    {
    }

    public function getNoList()
    {
        return $this->apiParas['noList'];
    }

    public function setNoList($noList)
    {
        $this->apiParas['noList'] = $noList;

        return $this;
    }

    public function getNoType()
    {
        return $this->apiParas['noType'];
    }

    public function setNoType($noType)
    {
        $this->apiParas['noType'] = $noType;

        return $this;
    }

    public function getDeptId()
    {
        return $this->apiParas['deptId'];
    }

    public function setDeptId($deptId)
    {
        $this->apiParas['deptId'] = $deptId;

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
}
