<?php

namespace ACES\Request;


class EclpGoodsAddGoodsFormulaRequest
{
    private $apiParas = array();
    private $version;
    private $goodsFormulaMain;

    public function getApiMethodName()
    {
        return "jingdong.eclp.goods.addGoodsFormula";
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

    public function getGoodsFormulaMain()
    {
        return $this->apiParas['goodsFormulaMain'];
    }

    public function setGoodsFormulaMain($goodsFormulaMain)
    {
        $this->apiParas['goodsFormulaMain'] = $goodsFormulaMain;
    }
}