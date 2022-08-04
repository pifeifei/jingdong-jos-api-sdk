<?php

namespace ACES\Request;

class EclpCoGotoB2BSWbMainAllTrackRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.eclp.co.gotoB2BSWbMainAllTrack';
    }

    public function check(): void
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
