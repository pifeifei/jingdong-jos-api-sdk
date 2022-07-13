<?php

namespace ACES\Request\Domain\EclpGoodsAddGoodsFormula;

class GoodsFormulaDetail
{
    private array $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.eclp.isv.domain.goods.formula.GoodsFormulaDetail';
    }

    public function getDetailIsvSku()
    {
        return $this->params['detailIsvSku'];
    }

    public function setDetailIsvSku($detailIsvSku)
    {
        $this->params['detailIsvSku'] = $detailIsvSku;
    }

    public function getGoodsProcessedUnit()
    {
        return $this->params['goodsProcessedUnit'];
    }

    public function setGoodsProcessedUnit($goodsProcessedUnit)
    {
        $this->params['goodsProcessedUnit'] = $goodsProcessedUnit;
    }

    public function getProcessedRatio()
    {
        return $this->params['processedRatio'];
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
