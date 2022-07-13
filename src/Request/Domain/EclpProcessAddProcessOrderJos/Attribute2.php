<?php

namespace ACES\Request\Domain\EclpProcessAddProcessOrderJos;

class Attribute2
{
    private array $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.open.sp.process.domain.request.MaterialJosRequest';
    }

    public function getMaterialGoodsNo()
    {
        return $this->params['materialGoodsNo'];
    }

    public function setMaterialGoodsNo($materialGoodsNo)
    {
        $this->params['materialGoodsNo'] = $materialGoodsNo;
    }

    public function getMaterialGoodsLevel()
    {
        return $this->params['materialGoodsLevel'];
    }

    public function setMaterialGoodsLevel($materialGoodsLevel)
    {
        $this->params['materialGoodsLevel'] = $materialGoodsLevel;
    }

    public function getMaterialIsvGoodsNo()
    {
        return $this->params['materialIsvGoodsNo'];
    }

    public function setMaterialIsvGoodsNo($materialIsvGoodsNo)
    {
        $this->params['materialIsvGoodsNo'] = $materialIsvGoodsNo;
    }

    public function getMaterialPlanQty()
    {
        return $this->params['materialPlanQty'];
    }

    public function setMaterialPlanQty($materialPlanQty)
    {
        $this->params['materialPlanQty'] = $materialPlanQty;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
