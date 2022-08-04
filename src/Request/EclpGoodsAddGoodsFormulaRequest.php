<?php

namespace ACES\Request;

class EclpGoodsAddGoodsFormulaRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.eclp.goods.addGoodsFormula';
    }

    public function check()
    {
    }

    public function getGoodsFormulaMain()
    {
        return $this->apiParas['goodsFormulaMain'];
    }

    public function setGoodsFormulaMain($goodsFormulaMain)
    {
        $this->apiParas['goodsFormulaMain'] = $goodsFormulaMain;

        return $this;
    }
}
