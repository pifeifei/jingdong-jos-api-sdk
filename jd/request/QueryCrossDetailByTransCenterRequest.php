<?php

class QueryCrossDetailByTransCenterRequest
{
    private $apiParas = array();

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

    private $version;

    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function getVersion()
    {
        return $this->version;
    }
                                                                                                                                    private $uniqueIdentiNo;

    public function setUniqueIdentiNo($uniqueIdentiNo)
    {
        $this->uniqueIdentiNo = $uniqueIdentiNo;
         $this->apiParas["uniqueIdentiNo"] = $uniqueIdentiNo;
    }

    public function getUniqueIdentiNo()
    {
        return $this->uniqueIdentiNo;
    }

                                                        private $source;

    public function setSource($source)
    {
        $this->source = $source;
         $this->apiParas["source"] = $source;
    }

    public function getSource()
    {
        return $this->source;
    }

                                                        private $targetTransCenterName;

    public function setTargetTransCenterName($targetTransCenterName)
    {
        $this->targetTransCenterName = $targetTransCenterName;
         $this->apiParas["targetTransCenterName"] = $targetTransCenterName;
    }

    public function getTargetTransCenterName()
    {
        return $this->targetTransCenterName;
    }

                                                        private $originTransCenterName;

    public function setOriginTransCenterName($originTransCenterName)
    {
        $this->originTransCenterName = $originTransCenterName;
         $this->apiParas["originTransCenterName"] = $originTransCenterName;
    }

    public function getOriginTransCenterName()
    {
        return $this->originTransCenterName;
    }
}
