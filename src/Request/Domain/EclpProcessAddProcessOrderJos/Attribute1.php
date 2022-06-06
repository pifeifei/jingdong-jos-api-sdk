<?php

namespace ACES\Request\Domain\EclpProcessAddProcessOrderJos;




class Attribute1
{
    private $params = array();
    private $productGoodsNo;
    private $materialRequestList;
    private $productIsvGoodsNo;
    private $productPlanQty;
    private $formulaId;
    private $productGoodsLevel;

    function __construct()
    {
        $this->params["@type"] = "com.jd.open.sp.process.domain.request.ProductJosRequest";
    }

    public function getProductGoodsNo()
    {
        return $this->productGoodsNo;
    }

    public function setProductGoodsNo($productGoodsNo)
    {
        $this->params['productGoodsNo'] = $productGoodsNo;
    }

    public function setMaterialRequestList($materialRequestList)
    {
        $size = count($materialRequestList);
        for ($i = 0; $i < $size; $i++) {
            $materialRequestList [$i] = $materialRequestList [$i]->getInstance();
        }
        $this->params['materialRequestList'] = $materialRequestList;
    }

    public function getProductIsvGoodsNo()
    {
        return $this->productIsvGoodsNo;
    }

    public function setProductIsvGoodsNo($productIsvGoodsNo)
    {
        $this->params['productIsvGoodsNo'] = $productIsvGoodsNo;
    }

    public function getProductPlanQty()
    {
        return $this->productPlanQty;
    }

    public function setProductPlanQty($productPlanQty)
    {
        $this->params['productPlanQty'] = $productPlanQty;
    }

    public function getFormulaId()
    {
        return $this->formulaId;
    }

    public function setFormulaId($formulaId)
    {
        $this->params['formulaId'] = $formulaId;
    }

    public function getProductGoodsLevel()
    {
        return $this->productGoodsLevel;
    }

    public function setProductGoodsLevel($productGoodsLevel)
    {
        $this->params['productGoodsLevel'] = $productGoodsLevel;
    }

    function getInstance()
    {
        return $this->params;
    }
}
