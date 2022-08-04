<?php

namespace ACES\Request;

class EclpMasterQueryDeptRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.eclp.master.queryDept';
    }

    public function check()
    {
    }

    public function getDeptNos()
    {
        return $this->apiParas['deptNos'];
    }

    public function setDeptNos($deptNos)
    {
        $this->apiParas['deptNos'] = $deptNos;

        return $this;
    }
}
