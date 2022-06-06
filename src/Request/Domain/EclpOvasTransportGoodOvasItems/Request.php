<?php

namespace ACES\Request\Domain\EclpOvasTransportGoodOvasItems;




class Request
{
    private $params = array();
    private $deptName;
    private $goodsNoVasRequestList;
    private $sellerName;
    private $deptId;
    private $sellerNo;
    private $deptNo;

    function __construct()
    {
        $this->params["@type"] = "com.jd.eclp.ovas.request.JosGoodsOvasRequest";
    }

    public function getDeptName()
    {
        return $this->deptName;
    }

    public function setDeptName($deptName)
    {
        $this->params['deptName'] = $deptName;
    }

    public function setGoodsNoVasRequestList($goodsNoVasRequestList)
    {
        $size = count($goodsNoVasRequestList);
        for ($i = 0; $i < $size; $i++) {
            $goodsNoVasRequestList [$i] = $goodsNoVasRequestList [$i]->getInstance();
        }
        $this->params['goodsNoVasRequestList'] = $goodsNoVasRequestList;
    }

    public function getSellerName()
    {
        return $this->sellerName;
    }

    public function setSellerName($sellerName)
    {
        $this->params['sellerName'] = $sellerName;
    }

    public function getDeptId()
    {
        return $this->deptId;
    }

    public function setDeptId($deptId)
    {
        $this->params['deptId'] = $deptId;
    }

    public function getSellerNo()
    {
        return $this->sellerNo;
    }

    public function setSellerNo($sellerNo)
    {
        $this->params['sellerNo'] = $sellerNo;
    }

    public function getDeptNo()
    {
        return $this->deptNo;
    }

    public function setDeptNo($deptNo)
    {
        $this->params['deptNo'] = $deptNo;
    }

    function getInstance()
    {
        return $this->params;
    }
}
