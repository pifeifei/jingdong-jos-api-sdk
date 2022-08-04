<?php

namespace ACES\Request;

class EclpCoGenerateBdWayBillFileRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.eclp.co.generateBdWayBillFile';
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
