<?php

namespace ACES\Request;

class EclpCollectorGoodsRecallUnlockRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.eclp.collector.goodsRecallUnlock';
    }

    public function check()
    {
    }

    public function getBusinessLockNo()
    {
        return $this->apiParas['businessLockNo'];
    }

    public function setBusinessLockNo($businessLockNo)
    {
        $this->apiParas['businessLockNo'] = $businessLockNo;

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
