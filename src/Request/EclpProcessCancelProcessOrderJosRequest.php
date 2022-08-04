<?php

namespace ACES\Request;

class EclpProcessCancelProcessOrderJosRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.eclp.process.cancelProcessOrderJos';
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

    public function getParentProcessedNo()
    {
        return $this->apiParas['parentProcessedNo'];
    }

    public function setParentProcessedNo($parentProcessedNo)
    {
        $this->apiParas['parentProcessedNo'] = $parentProcessedNo;

        return $this;
    }

    public function getSellerProcessedNo()
    {
        return $this->apiParas['sellerProcessedNo'];
    }

    public function setSellerProcessedNo($sellerProcessedNo)
    {
        $this->apiParas['sellerProcessedNo'] = $sellerProcessedNo;

        return $this;
    }

    public function getSellerNo()
    {
        return $this->apiParas['sellerNo'];
    }

    public function setSellerNo($sellerNo)
    {
        $this->apiParas['sellerNo'] = $sellerNo;

        return $this;
    }
}
