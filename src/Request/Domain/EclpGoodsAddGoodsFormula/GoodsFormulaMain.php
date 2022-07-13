<?php

namespace ACES\Request\Domain\EclpGoodsAddGoodsFormula;

class GoodsFormulaMain
{
    private array $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.eclp.isv.domain.goods.formula.GoodsFormulaMain';
    }

    public function getIsvSku()
    {
        return $this->params['isvSku'];
    }

    public function setIsvSku($isvSku)
    {
        $this->params['isvSku'] = $isvSku;
    }

    public function getDeptNo()
    {
        return $this->params['deptNo'];
    }

    public function setDeptNo($deptNo)
    {
        $this->params['deptNo'] = $deptNo;
    }

    public function getFormulaName()
    {
        return $this->params['formulaName'];
    }

    public function setFormulaName($formulaName)
    {
        $this->params['formulaName'] = $formulaName;
    }

    public function setFormulaDetailList($formulaDetailList)
    {
        $size = count($formulaDetailList);
        for ($i = 0; $i < $size; ++$i) {
            $formulaDetailList[$i] = $formulaDetailList[$i]->getInstance();
        }
        $this->params['formulaDetailList'] = $formulaDetailList;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
