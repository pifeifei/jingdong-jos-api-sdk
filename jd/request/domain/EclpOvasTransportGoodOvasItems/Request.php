<?php

namespace EclpOvasTransportGoodOvasItems;

class Request
{
    private $params = array();

    function __construct()
    {
        $this->params["@type"] = "com.jd.eclp.ovas.request.JosGoodsOvasRequest";
    }

    private $deptName;

    public function setDeptName($deptName)
    {
        $this->params['deptName'] = $deptName;
    }

    public function getDeptName()
    {
        return $this->deptName;
    }

    private $goodsNoVasRequestList;

    public function setGoodsNoVasRequestList($goodsNoVasRequestList)
    {
        $size = count($goodsNoVasRequestList);
        for ($i = 0; $i < $size; $i++) {
            $goodsNoVasRequestList [$i] = $goodsNoVasRequestList [$i] ->getInstance();
        }
        $this->params['goodsNoVasRequestList'] = $goodsNoVasRequestList;
    }


    private $sellerName;

    public function setSellerName($sellerName)
    {
        $this->params['sellerName'] = $sellerName;
    }

    public function getSellerName()
    {
        return $this->sellerName;
    }

    private $deptId;

    public function setDeptId($deptId)
    {
        $this->params['deptId'] = $deptId;
    }

    public function getDeptId()
    {
        return $this->deptId;
    }

    private $sellerNo;

    public function setSellerNo($sellerNo)
    {
        $this->params['sellerNo'] = $sellerNo;
    }

    public function getSellerNo()
    {
        return $this->sellerNo;
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

    function getInstance()
    {
        return $this->params;
    }
}
