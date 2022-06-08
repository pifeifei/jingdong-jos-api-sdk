<?php

namespace ACES\Request;

class EclpInsideCancelUlOrderRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.eclp.inside.cancelUlOrder';
    }

    public function check()
    {
    }

    public function getUlNo()
    {
        return $this->apiParas['ulNo'];
    }

    public function setUlNo($ulNo)
    {
        $this->apiParas['ulNo'] = $ulNo;

        return $this;
    }

    public function getOutUlNo()
    {
        return $this->apiParas['outUlNo'];
    }

    public function setOutUlNo($outUlNo)
    {
        $this->apiParas['outUlNo'] = $outUlNo;

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

    public function getWareHouseNo()
    {
        return $this->apiParas['wareHouseNo'];
    }

    public function setWareHouseNo($wareHouseNo)
    {
        $this->apiParas['wareHouseNo'] = $wareHouseNo;

        return $this;
    }
}
