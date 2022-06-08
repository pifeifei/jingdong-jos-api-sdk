<?php

namespace ACES\Request;

class EclpCoCancelLwbMainRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.eclp.co.cancelLwbMain';
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

    public function getLwbNo()
    {
        return $this->apiParas['lwbNo'];
    }

    public function setLwbNo($lwbNo)
    {
        $this->apiParas['lwbNo'] = $lwbNo;

        return $this;
    }
}
