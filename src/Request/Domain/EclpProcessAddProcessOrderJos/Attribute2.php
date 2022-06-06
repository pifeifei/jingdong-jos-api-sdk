<?php

namespace ACES\Request\Domain\EclpProcessAddProcessOrderJos;




class Attribute2
{
    private $params = array();
    private $materialGoodsNo;
    private $materialGoodsLevel;
    private $materialIsvGoodsNo;
    private $materialPlanQty;

    function __construct()
    {
        $this->params["@type"] = "com.jd.open.sp.process.domain.request.MaterialJosRequest";
    }

    public function getMaterialGoodsNo()
    {
        return $this->materialGoodsNo;
    }

    public function setMaterialGoodsNo($materialGoodsNo)
    {
        $this->params['materialGoodsNo'] = $materialGoodsNo;
    }

    public function getMaterialGoodsLevel()
    {
        return $this->materialGoodsLevel;
    }

    public function setMaterialGoodsLevel($materialGoodsLevel)
    {
        $this->params['materialGoodsLevel'] = $materialGoodsLevel;
    }

    public function getMaterialIsvGoodsNo()
    {
        return $this->materialIsvGoodsNo;
    }

    public function setMaterialIsvGoodsNo($materialIsvGoodsNo)
    {
        $this->params['materialIsvGoodsNo'] = $materialIsvGoodsNo;
    }

    public function getMaterialPlanQty()
    {
        return $this->materialPlanQty;
    }

    public function setMaterialPlanQty($materialPlanQty)
    {
        $this->params['materialPlanQty'] = $materialPlanQty;
    }

    function getInstance()
    {
        return $this->params;
    }
}
