<?php

namespace ACES\Request;


class QueryCrossDetailByTransCenterRequest
{
    private $apiParas = array();
    private $version;
    private $uniqueIdentiNo;
    private $source;
    private $targetTransCenterName;
    private $originTransCenterName;

    public function getApiMethodName()
    {
        return "jingdong.queryCrossDetailByTransCenter";
    }

    public function getApiParas()
    {
        if (empty($this->apiParas)) {
            return "{}";
        }
        return json_encode($this->apiParas);
    }

    public function check()
    {
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }

    public function getVersion()
    {
        return $this->version;
    }

    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function getUniqueIdentiNo()
    {
        return $this->uniqueIdentiNo;
    }

    public function setUniqueIdentiNo($uniqueIdentiNo)
    {
        $this->uniqueIdentiNo = $uniqueIdentiNo;
        $this->apiParas["uniqueIdentiNo"] = $uniqueIdentiNo;
    }

    public function getSource()
    {
        return $this->source;
    }

    public function setSource($source)
    {
        $this->source = $source;
        $this->apiParas["source"] = $source;
    }

    public function getTargetTransCenterName()
    {
        return $this->targetTransCenterName;
    }

    public function setTargetTransCenterName($targetTransCenterName)
    {
        $this->targetTransCenterName = $targetTransCenterName;
        $this->apiParas["targetTransCenterName"] = $targetTransCenterName;
    }

    public function getOriginTransCenterName()
    {
        return $this->originTransCenterName;
    }

    public function setOriginTransCenterName($originTransCenterName)
    {
        $this->originTransCenterName = $originTransCenterName;
        $this->apiParas["originTransCenterName"] = $originTransCenterName;
    }
}
