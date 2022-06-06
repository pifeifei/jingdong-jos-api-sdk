<?php

namespace ACES\Request\Domain\EclpGoodsAddGoodsFormula;




class GoodsFormulaMain
{
    private $params = array();
    private $isvSku;
    private $deptNo;
    private $formulaName;
    private $formulaDetailList;

    function __construct()
    {
        $this->params["@type"] = "com.jd.eclp.isv.domain.goods.formula.GoodsFormulaMain";
    }

    public function getIsvSku()
    {
        return $this->isvSku;
    }

    public function setIsvSku($isvSku)
    {
        $this->params['isvSku'] = $isvSku;
    }

    public function getDeptNo()
    {
        return $this->deptNo;
    }

    public function setDeptNo($deptNo)
    {
        $this->params['deptNo'] = $deptNo;
    }

    public function getFormulaName()
    {
        return $this->formulaName;
    }

    public function setFormulaName($formulaName)
    {
        $this->params['formulaName'] = $formulaName;
    }

    public function setFormulaDetailList($formulaDetailList)
    {
        $size = count($formulaDetailList);
        for ($i = 0; $i < $size; $i++) {
            $formulaDetailList [$i] = $formulaDetailList [$i]->getInstance();
        }
        $this->params['formulaDetailList'] = $formulaDetailList;
    }


    function getInstance()
    {
        return $this->params;
    }
}
