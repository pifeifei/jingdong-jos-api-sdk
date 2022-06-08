<?php

namespace ACES\Request\Domain\OpenInsideJosTransportInsideOrder;

class Attribute1
{
    private $params = [];
    private $sourceLogicStock;
    private $targetLogicStock;
    private $sourceEclpGoodsNo;
    private $planNum;
    private $sourceGoodsLevel;
    private $targetEclpGoodsNo;
    private $sourceBatchMap;
    private $orderLine;
    private $targetBatchMap;
    private $isvGoodsNo;
    private $targetIsvGoodsNo;
    private $targetGoodsLevel;

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.open.sp.inside.request.InsideItemRequest';
    }

    public function getSourceLogicStock()
    {
        return $this->sourceLogicStock;
    }

    public function setSourceLogicStock($sourceLogicStock)
    {
        $this->params['sourceLogicStock'] = $sourceLogicStock;
    }

    public function getTargetLogicStock()
    {
        return $this->targetLogicStock;
    }

    public function setTargetLogicStock($targetLogicStock)
    {
        $this->params['targetLogicStock'] = $targetLogicStock;
    }

    public function getSourceEclpGoodsNo()
    {
        return $this->sourceEclpGoodsNo;
    }

    public function setSourceEclpGoodsNo($sourceEclpGoodsNo)
    {
        $this->params['sourceEclpGoodsNo'] = $sourceEclpGoodsNo;
    }

    public function getPlanNum()
    {
        return $this->planNum;
    }

    public function setPlanNum($planNum)
    {
        $this->params['planNum'] = $planNum;
    }

    public function getSourceGoodsLevel()
    {
        return $this->sourceGoodsLevel;
    }

    public function setSourceGoodsLevel($sourceGoodsLevel)
    {
        $this->params['sourceGoodsLevel'] = $sourceGoodsLevel;
    }

    public function getTargetEclpGoodsNo()
    {
        return $this->targetEclpGoodsNo;
    }

    public function setTargetEclpGoodsNo($targetEclpGoodsNo)
    {
        $this->params['targetEclpGoodsNo'] = $targetEclpGoodsNo;
    }

    public function setSourceBatchMap($sourceBatchMap)
    {
        $this->params['sourceBatchMap'] = $sourceBatchMap;
    }

    public function getOrderLine()
    {
        return $this->orderLine;
    }

    public function setOrderLine($orderLine)
    {
        $this->params['orderLine'] = $orderLine;
    }

    public function setTargetBatchMap($targetBatchMap)
    {
        $this->params['targetBatchMap'] = $targetBatchMap;
    }

    public function getIsvGoodsNo()
    {
        return $this->isvGoodsNo;
    }

    public function setIsvGoodsNo($isvGoodsNo)
    {
        $this->params['isvGoodsNo'] = $isvGoodsNo;
    }

    public function getTargetIsvGoodsNo()
    {
        return $this->targetIsvGoodsNo;
    }

    public function setTargetIsvGoodsNo($targetIsvGoodsNo)
    {
        $this->params['targetIsvGoodsNo'] = $targetIsvGoodsNo;
    }

    public function getTargetGoodsLevel()
    {
        return $this->targetGoodsLevel;
    }

    public function setTargetGoodsLevel($targetGoodsLevel)
    {
        $this->params['targetGoodsLevel'] = $targetGoodsLevel;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
