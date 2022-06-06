<?php

namespace EclpProcessAddProcessOrderJos;

class Attribute1
{
    private $params = array();

    function __construct()
    {
        $this->params["@type"] = "com.jd.open.sp.process.domain.request.ProductJosRequest";
    }

    private $productGoodsNo;

    public function setProductGoodsNo($productGoodsNo)
    {
        $this->params['productGoodsNo'] = $productGoodsNo;
    }

    public function getProductGoodsNo()
    {
        return $this->productGoodsNo;
    }

    private $materialRequestList;

    public function setMaterialRequestList($materialRequestList)
    {
        $size = count($materialRequestList);
        for ($i = 0; $i < $size; $i++) {
            $materialRequestList [$i] = $materialRequestList [$i] ->getInstance();
        }
        $this->params['materialRequestList'] = $materialRequestList;
    }


    private $productIsvGoodsNo;

    public function setProductIsvGoodsNo($productIsvGoodsNo)
    {
        $this->params['productIsvGoodsNo'] = $productIsvGoodsNo;
    }

    public function getProductIsvGoodsNo()
    {
        return $this->productIsvGoodsNo;
    }

    private $productPlanQty;

    public function setProductPlanQty($productPlanQty)
    {
        $this->params['productPlanQty'] = $productPlanQty;
    }

    public function getProductPlanQty()
    {
        return $this->productPlanQty;
    }

    private $formulaId;

    public function setFormulaId($formulaId)
    {
        $this->params['formulaId'] = $formulaId;
    }

    public function getFormulaId()
    {
        return $this->formulaId;
    }

    private $productGoodsLevel;

    public function setProductGoodsLevel($productGoodsLevel)
    {
        $this->params['productGoodsLevel'] = $productGoodsLevel;
    }

    public function getProductGoodsLevel()
    {
        return $this->productGoodsLevel;
    }

    function getInstance()
    {
        return $this->params;
    }
}
