<?php

class OpenInsideJosQueryInsideOrderRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.open.inside.jos.queryInsideOrder";
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
                                                                                                                                                                                                                                                                                                                                                                                                                                                                           private $insideNo;
    public function setInsideNo($insideNo)
    {
        $this->insideNo = $insideNo;
        $this->apiParas["insideNo"] = $insideNo;
    }

    public function getInsideNo()
    {
        return $this->insideNo;
    }
                                                                                                                                                                        private $sourceDeptNo;

    public function setSourceDeptNo($sourceDeptNo)
    {
        $this->sourceDeptNo = $sourceDeptNo;
         $this->apiParas["sourceDeptNo"] = $sourceDeptNo;
    }

    public function getSourceDeptNo()
    {
        return $this->sourceDeptNo;
    }

                                                        private $createTimeEnd;

    public function setCreateTimeEnd($createTimeEnd)
    {
        $this->createTimeEnd = $createTimeEnd;
         $this->apiParas["createTimeEnd"] = $createTimeEnd;
    }

    public function getCreateTimeEnd()
    {
        return $this->createTimeEnd;
    }

                                                        private $createTimeStart;

    public function setCreateTimeStart($createTimeStart)
    {
        $this->createTimeStart = $createTimeStart;
         $this->apiParas["createTimeStart"] = $createTimeStart;
    }

    public function getCreateTimeStart()
    {
        return $this->createTimeStart;
    }

                                                                                                                                                                                                                                                                                                                                                                                               private $isvNo;
    public function setIsvNo($isvNo)
    {
        $this->isvNo = $isvNo;
        $this->apiParas["isvNo"] = $isvNo;
    }

    public function getIsvNo()
    {
        return $this->isvNo;
    }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               private $status;
    public function setStatus($status)
    {
        $this->status = $status;
        $this->apiParas["status"] = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               private $bizType;
    public function setBizType($bizType)
    {
        $this->bizType = $bizType;
        $this->apiParas["bizType"] = $bizType;
    }

    public function getBizType()
    {
        return $this->bizType;
    }
}
