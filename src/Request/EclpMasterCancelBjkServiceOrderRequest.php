<?php

namespace ACES\Request;

class EclpMasterCancelBjkServiceOrderRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.eclp.master.cancelBjkServiceOrder';
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

    public function getServiceNo()
    {
        return $this->apiParas['serviceNo'];
    }

    public function setServiceNo($serviceNo)
    {
        $this->apiParas['serviceNo'] = $serviceNo;

        return $this;
    }
}
