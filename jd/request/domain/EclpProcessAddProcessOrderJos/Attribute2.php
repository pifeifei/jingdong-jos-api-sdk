<?php

namespace EclpProcessAddProcessOrderJos;

class Attribute2
{
    private $params = array();

    function __construct()
    {
        $this->params["@type"] = "com.jd.open.sp.process.domain.request.MaterialJosRequest";
    }

    private $materialGoodsNo;

    public function setMaterialGoodsNo($materialGoodsNo)
    {
        $this->params['materialGoodsNo'] = $materialGoodsNo;
    }

    public function getMaterialGoodsNo()
    {
        return $this->materialGoodsNo;
    }

    private $materialGoodsLevel;

    public function setMaterialGoodsLevel($materialGoodsLevel)
    {
        $this->params['materialGoodsLevel'] = $materialGoodsLevel;
    }

    public function getMaterialGoodsLevel()
    {
        return $this->materialGoodsLevel;
    }

    private $materialIsvGoodsNo;

    public function setMaterialIsvGoodsNo($materialIsvGoodsNo)
    {
        $this->params['materialIsvGoodsNo'] = $materialIsvGoodsNo;
    }

    public function getMaterialIsvGoodsNo()
    {
        return $this->materialIsvGoodsNo;
    }

    private $materialPlanQty;

    public function setMaterialPlanQty($materialPlanQty)
    {
        $this->params['materialPlanQty'] = $materialPlanQty;
    }

    public function getMaterialPlanQty()
    {
        return $this->materialPlanQty;
    }

    function getInstance()
    {
        return $this->params;
    }
}
