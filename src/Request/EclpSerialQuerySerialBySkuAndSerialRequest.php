<?php

namespace ACES\Request;


class EclpSerialQuerySerialBySkuAndSerialRequest
{
    private $apiParas = array();
    private $version;
    private $goodsNo;
    private $goodsSID;
    private $queryType;

    public function getApiMethodName()
    {
        return "jingdong.eclp.serial.querySerialBySkuAndSerial";
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

    public function getGoodsNo()
    {
        return $this->goodsNo;
    }

    public function setGoodsNo($goodsNo)
    {
        $this->goodsNo = $goodsNo;
        $this->apiParas["goodsNo"] = $goodsNo;
    }

    public function getGoodsSID()
    {
        return $this->goodsSID;
    }

    public function setGoodsSID($goodsSID)
    {
        $this->goodsSID = $goodsSID;
        $this->apiParas["goodsSID"] = $goodsSID;
    }

    public function getQueryType()
    {
        return $this->queryType;
    }

    public function setQueryType($queryType)
    {
        $this->queryType = $queryType;
        $this->apiParas["queryType"] = $queryType;
    }
}
