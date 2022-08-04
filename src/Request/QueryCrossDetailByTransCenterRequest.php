<?php

namespace ACES\Request;

class QueryCrossDetailByTransCenterRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.queryCrossDetailByTransCenter';
    }

    public function check()
    {
    }

    public function getUniqueIdentiNo()
    {
        return $this->apiParas['uniqueIdentiNo'];
    }

    public function setUniqueIdentiNo($uniqueIdentiNo)
    {
        $this->apiParas['uniqueIdentiNo'] = $uniqueIdentiNo;

        return $this;
    }

    public function getSource()
    {
        return $this->apiParas['source'];
    }

    public function setSource($source)
    {
        $this->apiParas['source'] = $source;

        return $this;
    }

    public function getTargetTransCenterName()
    {
        return $this->apiParas['targetTransCenterName'];
    }

    public function setTargetTransCenterName($targetTransCenterName)
    {
        $this->apiParas['targetTransCenterName'] = $targetTransCenterName;

        return $this;
    }

    public function getOriginTransCenterName()
    {
        return $this->apiParas['originTransCenterName'];
    }

    public function setOriginTransCenterName($originTransCenterName)
    {
        $this->apiParas['originTransCenterName'] = $originTransCenterName;

        return $this;
    }
}
