<?php

namespace ACES\Request;


class EclpRtwQueryRtwRequest
{
    private $apiParas = array();
    private $version;
    private $eclpSoNo;
    private $eclpRtwNo;
    private $isvRtwNum;
    private $warehouseNo;
    private $reson;
    private $orderInType;
    private $queryBatAttrFlag;
    private $startCreateTime;
    private $endCreateTime;
    private $outStoreNo;

    public function getApiMethodName()
    {
        return "jingdong.eclp.rtw.queryRtw";
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

    public function getEclpSoNo()
    {
        return $this->eclpSoNo;
    }

    public function setEclpSoNo($eclpSoNo)
    {
        $this->eclpSoNo = $eclpSoNo;
        $this->apiParas["eclpSoNo"] = $eclpSoNo;
    }

    public function getEclpRtwNo()
    {
        return $this->eclpRtwNo;
    }

    public function setEclpRtwNo($eclpRtwNo)
    {
        $this->eclpRtwNo = $eclpRtwNo;
        $this->apiParas["eclpRtwNo"] = $eclpRtwNo;
    }

    public function getIsvRtwNum()
    {
        return $this->isvRtwNum;
    }

    public function setIsvRtwNum($isvRtwNum)
    {
        $this->isvRtwNum = $isvRtwNum;
        $this->apiParas["isvRtwNum"] = $isvRtwNum;
    }

    public function getWarehouseNo()
    {
        return $this->warehouseNo;
    }

    public function setWarehouseNo($warehouseNo)
    {
        $this->warehouseNo = $warehouseNo;
        $this->apiParas["warehouseNo"] = $warehouseNo;
    }

    public function getReson()
    {
        return $this->reson;
    }

    public function setReson($reson)
    {
        $this->reson = $reson;
        $this->apiParas["reson"] = $reson;
    }

    public function getOrderInType()
    {
        return $this->orderInType;
    }

    public function setOrderInType($orderInType)
    {
        $this->orderInType = $orderInType;
        $this->apiParas["orderInType"] = $orderInType;
    }

    public function getQueryBatAttrFlag()
    {
        return $this->queryBatAttrFlag;
    }

    public function setQueryBatAttrFlag($queryBatAttrFlag)
    {
        $this->queryBatAttrFlag = $queryBatAttrFlag;
        $this->apiParas["queryBatAttrFlag"] = $queryBatAttrFlag;
    }

    public function getStartCreateTime()
    {
        return $this->startCreateTime;
    }

    public function setStartCreateTime($startCreateTime)
    {
        $this->startCreateTime = $startCreateTime;
        $this->apiParas["startCreateTime"] = $startCreateTime;
    }

    public function getEndCreateTime()
    {
        return $this->endCreateTime;
    }

    public function setEndCreateTime($endCreateTime)
    {
        $this->endCreateTime = $endCreateTime;
        $this->apiParas["endCreateTime"] = $endCreateTime;
    }

    public function getOutStoreNo()
    {
        return $this->outStoreNo;
    }

    public function setOutStoreNo($outStoreNo)
    {
        $this->outStoreNo = $outStoreNo;
        $this->apiParas["outStoreNo"] = $outStoreNo;
    }
}
