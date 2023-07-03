<?php

namespace ACES\Request\Domain\EclpProcessAddProcessOrderJos;

use function count;

class Attribute1
{
    private array $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.open.sp.process.domain.request.ProductJosRequest';
    }

    public function getProductGoodsNo()
    {
        return $this->params['productGoodsNo'];
    }

    public function setProductGoodsNo($productGoodsNo)
    {
        $this->params['productGoodsNo'] = $productGoodsNo;
    }

    public function setMaterialRequestList($materialRequestList)
    {
        $size = count($materialRequestList);
        for ($i = 0; $i < $size; ++$i) {
            $materialRequestList[$i] = $materialRequestList[$i]->getInstance();
        }
        $this->params['materialRequestList'] = $materialRequestList;
    }

    public function getProductIsvGoodsNo()
    {
        return $this->params['productIsvGoodsNo'];
    }

    public function setProductIsvGoodsNo($productIsvGoodsNo)
    {
        $this->params['productIsvGoodsNo'] = $productIsvGoodsNo;
    }

    public function getProductPlanQty()
    {
        return $this->params['productPlanQty'];
    }

    public function setProductPlanQty($productPlanQty)
    {
        $this->params['productPlanQty'] = $productPlanQty;
    }

    public function getFormulaId()
    {
        return $this->params['formulaId'];
    }

    public function setFormulaId($formulaId)
    {
        $this->params['formulaId'] = $formulaId;
    }

    public function getProductGoodsLevel()
    {
        return $this->params['productGoodsLevel'];
    }

    public function setProductGoodsLevel($productGoodsLevel)
    {
        $this->params['productGoodsLevel'] = $productGoodsLevel;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
