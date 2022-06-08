<?php

namespace ACES\Request;

class EclpCoQueryB2BSWbMainRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.eclp.co.queryB2BSWbMain';
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

    public function getNewWBType()
    {
        return $this->apiParas['newWBType'];
    }

    public function setNewWBType($newWBType)
    {
        $this->apiParas['newWBType'] = $newWBType;

        return $this;
    }

    public function getNo()
    {
        return $this->apiParas['no'];
    }

    public function setNo($no)
    {
        $this->apiParas['no'] = $no;

        return $this;
    }
}
