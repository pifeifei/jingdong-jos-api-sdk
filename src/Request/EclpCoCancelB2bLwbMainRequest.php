<?php

namespace ACES\Request;

class EclpCoCancelB2bLwbMainRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.eclp.co.cancelB2bLwbMain';
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

    public function getOrderNo()
    {
        return $this->apiParas['orderNo'];
    }

    public function setOrderNo($orderNo)
    {
        $this->apiParas['orderNo'] = $orderNo;

        return $this;
    }

    public function getWbNo()
    {
        return $this->apiParas['wbNo'];
    }

    public function setWbNo($wbNo)
    {
        $this->apiParas['wbNo'] = $wbNo;

        return $this;
    }
}
