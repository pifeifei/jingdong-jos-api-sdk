<?php

namespace ACES\Request\Domain\EclpGoodsAddGoodsFormula;

class GoodsFormulaDetail
{
    private $params = [];
    private $detailIsvSku;
    private $goodsProcessedUnit;
    private $processedRatio;

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.eclp.isv.domain.goods.formula.GoodsFormulaDetail';
    }

    public function getDetailIsvSku()
    {
        return $this->detailIsvSku;
    }

    public function setDetailIsvSku($detailIsvSku)
    {
        $this->params['detailIsvSku'] = $detailIsvSku;
    }

    public function getGoodsProcessedUnit()
    {
        return $this->goodsProcessedUnit;
    }

    public function setGoodsProcessedUnit($goodsProcessedUnit)
    {
        $this->params['goodsProcessedUnit'] = $goodsProcessedUnit;
    }

    public function getProcessedRatio()
    {
        return $this->processedRatio;
    }

    public function setProcessedRatio($processedRatio)
    {
        $this->params['processedRatio'] = $processedRatio;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
