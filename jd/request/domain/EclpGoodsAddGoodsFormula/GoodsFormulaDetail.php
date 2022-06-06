<?php

namespace EclpGoodsAddGoodsFormula;

class GoodsFormulaDetail
{
    private $params = array();

    function __construct()
    {
        $this->params["@type"] = "com.jd.eclp.isv.domain.goods.formula.GoodsFormulaDetail";
    }

    private $detailIsvSku;

    public function setDetailIsvSku($detailIsvSku)
    {
        $this->params['detailIsvSku'] = $detailIsvSku;
    }

    public function getDetailIsvSku()
    {
        return $this->detailIsvSku;
    }

    private $goodsProcessedUnit;

    public function setGoodsProcessedUnit($goodsProcessedUnit)
    {
        $this->params['goodsProcessedUnit'] = $goodsProcessedUnit;
    }

    public function getGoodsProcessedUnit()
    {
        return $this->goodsProcessedUnit;
    }

    private $processedRatio;

    public function setProcessedRatio($processedRatio)
    {
        $this->params['processedRatio'] = $processedRatio;
    }

    public function getProcessedRatio()
    {
        return $this->processedRatio;
    }

    function getInstance()
    {
        return $this->params;
    }
}
