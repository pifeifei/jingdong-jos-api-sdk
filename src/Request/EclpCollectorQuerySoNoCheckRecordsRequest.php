<?php

namespace ACES\Request;


class EclpCollectorQuerySoNoCheckRecordsRequest
{
    private $apiParas = array();
    private $version;
    private $bizType;
    private $eclpSoNo;

    public function getApiMethodName()
    {
        return "jingdong.eclp.collector.querySoNoCheckRecords";
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

    public function getBizType()
    {
        return $this->bizType;
    }

    public function setBizType($bizType)
    {
        $this->bizType = $bizType;
        $this->apiParas["bizType"] = $bizType;
    }

    public function getEclpSoNo()
    {
        return $this->eclpSoNo;
    }

    public function setEclpSoNo($eclpSoNo)
    {
        $this->eclpSoNo = $eclpSoNo;
        $this->apiParas["eclpSoNo"] = $eclpSoNo;
    }
}
