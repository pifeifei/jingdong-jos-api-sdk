<?php

namespace EclpGoodsAddGoodsFormula;

class GoodsFormulaMain
{
    private $params = array();

    function __construct()
    {
        $this->params["@type"] = "com.jd.eclp.isv.domain.goods.formula.GoodsFormulaMain";
    }

    private $isvSku;

    public function setIsvSku($isvSku)
    {
        $this->params['isvSku'] = $isvSku;
    }

    public function getIsvSku()
    {
        return $this->isvSku;
    }

    private $deptNo;

    public function setDeptNo($deptNo)
    {
        $this->params['deptNo'] = $deptNo;
    }

    public function getDeptNo()
    {
        return $this->deptNo;
    }

    private $formulaName;

    public function setFormulaName($formulaName)
    {
        $this->params['formulaName'] = $formulaName;
    }

    public function getFormulaName()
    {
        return $this->formulaName;
    }

    private $formulaDetailList;

    public function setFormulaDetailList($formulaDetailList)
    {
        $size = count($formulaDetailList);
        for ($i = 0; $i < $size; $i++) {
            $formulaDetailList [$i] = $formulaDetailList [$i] ->getInstance();
        }
        $this->params['formulaDetailList'] = $formulaDetailList;
    }


    function getInstance()
    {
        return $this->params;
    }
}
