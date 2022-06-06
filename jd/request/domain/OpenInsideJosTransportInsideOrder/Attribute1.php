<?php

namespace OpenInsideJosTransportInsideOrder;

class Attribute1
{
    private $params = array();

    function __construct()
    {
        $this->params["@type"] = "com.jd.open.sp.inside.request.InsideItemRequest";
    }

    private $sourceLogicStock;

    public function setSourceLogicStock($sourceLogicStock)
    {
        $this->params['sourceLogicStock'] = $sourceLogicStock;
    }

    public function getSourceLogicStock()
    {
        return $this->sourceLogicStock;
    }

    private $targetLogicStock;

    public function setTargetLogicStock($targetLogicStock)
    {
        $this->params['targetLogicStock'] = $targetLogicStock;
    }

    public function getTargetLogicStock()
    {
        return $this->targetLogicStock;
    }

    private $sourceEclpGoodsNo;

    public function setSourceEclpGoodsNo($sourceEclpGoodsNo)
    {
        $this->params['sourceEclpGoodsNo'] = $sourceEclpGoodsNo;
    }

    public function getSourceEclpGoodsNo()
    {
        return $this->sourceEclpGoodsNo;
    }

    private $planNum;

    public function setPlanNum($planNum)
    {
        $this->params['planNum'] = $planNum;
    }

    public function getPlanNum()
    {
        return $this->planNum;
    }

    private $sourceGoodsLevel;

    public function setSourceGoodsLevel($sourceGoodsLevel)
    {
        $this->params['sourceGoodsLevel'] = $sourceGoodsLevel;
    }

    public function getSourceGoodsLevel()
    {
        return $this->sourceGoodsLevel;
    }

    private $targetEclpGoodsNo;

    public function setTargetEclpGoodsNo($targetEclpGoodsNo)
    {
        $this->params['targetEclpGoodsNo'] = $targetEclpGoodsNo;
    }

    public function getTargetEclpGoodsNo()
    {
        return $this->targetEclpGoodsNo;
    }

    private $sourceBatchMap;

    public function setSourceBatchMap($sourceBatchMap)
    {
        $this->params['sourceBatchMap'] = $sourceBatchMap;
    }


    private $orderLine;

    public function setOrderLine($orderLine)
    {
        $this->params['orderLine'] = $orderLine;
    }

    public function getOrderLine()
    {
        return $this->orderLine;
    }

    private $targetBatchMap;

    public function setTargetBatchMap($targetBatchMap)
    {
        $this->params['targetBatchMap'] = $targetBatchMap;
    }


    private $isvGoodsNo;

    public function setIsvGoodsNo($isvGoodsNo)
    {
        $this->params['isvGoodsNo'] = $isvGoodsNo;
    }

    public function getIsvGoodsNo()
    {
        return $this->isvGoodsNo;
    }

    private $targetIsvGoodsNo;

    public function setTargetIsvGoodsNo($targetIsvGoodsNo)
    {
        $this->params['targetIsvGoodsNo'] = $targetIsvGoodsNo;
    }

    public function getTargetIsvGoodsNo()
    {
        return $this->targetIsvGoodsNo;
    }

    private $targetGoodsLevel;

    public function setTargetGoodsLevel($targetGoodsLevel)
    {
        $this->params['targetGoodsLevel'] = $targetGoodsLevel;
    }

    public function getTargetGoodsLevel()
    {
        return $this->targetGoodsLevel;
    }

    function getInstance()
    {
        return $this->params;
    }
}
