<?php

namespace ACES\Request;

class OpenInsideJosQueryInsideOrderRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.open.inside.jos.queryInsideOrder';
    }

    public function check()
    {
    }

    public function getInsideNo()
    {
        return $this->apiParas['insideNo'];
    }

    public function setInsideNo($insideNo)
    {
        $this->apiParas['insideNo'] = $insideNo;

        return $this;
    }

    public function getSourceDeptNo()
    {
        return $this->apiParas['sourceDeptNo'];
    }

    public function setSourceDeptNo($sourceDeptNo)
    {
        $this->apiParas['sourceDeptNo'] = $sourceDeptNo;

        return $this;
    }

    public function getCreateTimeEnd()
    {
        return $this->apiParas['createTimeEnd'];
    }

    public function setCreateTimeEnd($createTimeEnd)
    {
        $this->apiParas['createTimeEnd'] = $createTimeEnd;

        return $this;
    }

    public function getCreateTimeStart()
    {
        return $this->apiParas['createTimeStart'];
    }

    public function setCreateTimeStart($createTimeStart)
    {
        $this->apiParas['createTimeStart'] = $createTimeStart;

        return $this;
    }

    public function getIsvNo()
    {
        return $this->apiParas['isvNo'];
    }

    public function setIsvNo($isvNo)
    {
        $this->apiParas['isvNo'] = $isvNo;

        return $this;
    }

    public function getStatus()
    {
        return $this->apiParas['status'];
    }

    public function setStatus($status)
    {
        $this->apiParas['status'] = $status;

        return $this;
    }

    public function getBizType()
    {
        return $this->apiParas['bizType'];
    }

    public function setBizType($bizType)
    {
        $this->apiParas['bizType'] = $bizType;

        return $this;
    }
}
