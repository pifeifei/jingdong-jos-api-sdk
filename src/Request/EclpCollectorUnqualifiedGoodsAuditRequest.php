<?php

namespace ACES\Request;

class EclpCollectorUnqualifiedGoodsAuditRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.eclp.collector.unqualifiedGoodsAudit';
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

    public function getIdentityNo()
    {
        return $this->apiParas['identityNo'];
    }

    public function setIdentityNo($identityNo)
    {
        $this->apiParas['identityNo'] = $identityNo;

        return $this;
    }

    public function getGoodsLevel()
    {
        return $this->apiParas['goodsLevel'];
    }

    public function setGoodsLevel($goodsLevel)
    {
        $this->apiParas['goodsLevel'] = $goodsLevel;

        return $this;
    }
}
