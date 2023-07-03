<?php

namespace ACES\Request\Domain\EclpOvasTransportGoodOvasItems;

use function count;

class Request
{
    private array $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.eclp.ovas.request.JosGoodsOvasRequest';
    }

    public function getDeptName()
    {
        return $this->params['deptName'];
    }

    public function setDeptName($deptName)
    {
        $this->params['deptName'] = $deptName;
    }

    public function setGoodsNoVasRequestList($goodsNoVasRequestList)
    {
        $size = count($goodsNoVasRequestList);
        for ($i = 0; $i < $size; ++$i) {
            $goodsNoVasRequestList[$i] = $goodsNoVasRequestList[$i]->getInstance();
        }
        $this->params['goodsNoVasRequestList'] = $goodsNoVasRequestList;
    }

    public function getSellerName()
    {
        return $this->params['sellerName'];
    }

    public function setSellerName($sellerName)
    {
        $this->params['sellerName'] = $sellerName;
    }

    public function getDeptId()
    {
        return $this->params['deptId'];
    }

    public function setDeptId($deptId)
    {
        $this->params['deptId'] = $deptId;
    }

    public function getSellerNo()
    {
        return $this->params['sellerNo'];
    }

    public function setSellerNo($sellerNo)
    {
        $this->params['sellerNo'] = $sellerNo;
    }

    public function getDeptNo()
    {
        return $this->params['deptNo'];
    }

    public function setDeptNo($deptNo)
    {
        $this->params['deptNo'] = $deptNo;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
