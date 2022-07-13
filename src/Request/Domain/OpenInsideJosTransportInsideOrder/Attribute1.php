<?php

namespace ACES\Request\Domain\OpenInsideJosTransportInsideOrder;

class Attribute1
{
    private array $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.open.sp.inside.request.InsideItemRequest';
    }

    public function getSourceLogicStock()
    {
        return $this->params['sourceLogicStock'];
    }

    public function setSourceLogicStock($sourceLogicStock)
    {
        $this->params['sourceLogicStock'] = $sourceLogicStock;
    }

    public function getTargetLogicStock()
    {
        return $this->params['targetLogicStock'];
    }

    public function setTargetLogicStock($targetLogicStock)
    {
        $this->params['targetLogicStock'] = $targetLogicStock;
    }

    public function getSourceEclpGoodsNo()
    {
        return $this->params['sourceEclpGoodsNo'];
    }

    public function setSourceEclpGoodsNo($sourceEclpGoodsNo)
    {
        $this->params['sourceEclpGoodsNo'] = $sourceEclpGoodsNo;
    }

    public function getPlanNum()
    {
        return $this->params['planNum'];
    }

    public function setPlanNum($planNum)
    {
        $this->params['planNum'] = $planNum;
    }

    public function getSourceGoodsLevel()
    {
        return $this->params['sourceGoodsLevel'];
    }

    public function setSourceGoodsLevel($sourceGoodsLevel)
    {
        $this->params['sourceGoodsLevel'] = $sourceGoodsLevel;
    }

    public function getTargetEclpGoodsNo()
    {
        return $this->params['targetEclpGoodsNo'];
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
        return $this->params['orderLine'];
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
        return $this->params['isvGoodsNo'];
    }

    public function setIsvGoodsNo($isvGoodsNo)
    {
        $this->params['isvGoodsNo'] = $isvGoodsNo;
    }

    public function getTargetIsvGoodsNo()
    {
        return $this->params['targetIsvGoodsNo'];
    }

    public function setTargetIsvGoodsNo($targetIsvGoodsNo)
    {
        $this->params['targetIsvGoodsNo'] = $targetIsvGoodsNo;
    }

    public function getTargetGoodsLevel()
    {
        return $this->params['targetGoodsLevel'];
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
