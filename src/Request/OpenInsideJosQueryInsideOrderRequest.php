<?php

namespace ACES\Request;


class OpenInsideJosQueryInsideOrderRequest
{
    private $apiParas = array();
    private $version;
    private $insideNo;
    private $sourceDeptNo;
    private $createTimeEnd;
    private $createTimeStart;
    private $isvNo;
    private $status;
    private $bizType;

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

    public function getVersion()
    {
        return $this->version;
    }

    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function getInsideNo()
    {
        return $this->insideNo;
    }

    public function setInsideNo($insideNo)
    {
        $this->insideNo = $insideNo;
        $this->apiParas["insideNo"] = $insideNo;
    }

    public function getSourceDeptNo()
    {
        return $this->sourceDeptNo;
    }

    public function setSourceDeptNo($sourceDeptNo)
    {
        $this->sourceDeptNo = $sourceDeptNo;
        $this->apiParas["sourceDeptNo"] = $sourceDeptNo;
    }

    public function getCreateTimeEnd()
    {
        return $this->createTimeEnd;
    }

    public function setCreateTimeEnd($createTimeEnd)
    {
        $this->createTimeEnd = $createTimeEnd;
        $this->apiParas["createTimeEnd"] = $createTimeEnd;
    }

    public function getCreateTimeStart()
    {
        return $this->createTimeStart;
    }

    public function setCreateTimeStart($createTimeStart)
    {
        $this->createTimeStart = $createTimeStart;
        $this->apiParas["createTimeStart"] = $createTimeStart;
    }

    public function getIsvNo()
    {
        return $this->isvNo;
    }

    public function setIsvNo($isvNo)
    {
        $this->isvNo = $isvNo;
        $this->apiParas["isvNo"] = $isvNo;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
        $this->apiParas["status"] = $status;
    }

    public function getBizType()
    {
        return $this->bizType;
    }

    public function setBizType($bizType)
    {
        $this->bizType = $bizType;
        $this->apiParas["bizType"] = $bizType;
    }
}
