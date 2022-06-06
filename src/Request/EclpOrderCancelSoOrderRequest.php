<?php

namespace ACES\Request;


class EclpOrderCancelSoOrderRequest
{
    private $apiParas = array();
    private $version;
    private $orderNo;
    private $sellerNo;
    private $deptNo;
    private $isvOrderNo;

    public function getApiMethodName()
    {
        return "jingdong.eclp.order.cancelSoOrder";
    }

    public function getApiParas()
    {
        if (empty($this->apiParas)) {
            return "{}";
        }
        return json_encode($this->apiParas);
    }

    public function check()
    {
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }

    public function getVersion()
    {
        return $this->version;
    }

    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function getOrderNo()
    {
        return $this->orderNo;
    }

    public function setOrderNo($orderNo)
    {
        $this->orderNo = $orderNo;
        $this->apiParas["orderNo"] = $orderNo;
    }

    public function getSellerNo()
    {
        return $this->sellerNo;
    }

    public function setSellerNo($sellerNo)
    {
        $this->sellerNo = $sellerNo;
        $this->apiParas["sellerNo"] = $sellerNo;
    }

    public function getDeptNo()
    {
        return $this->deptNo;
    }

    public function setDeptNo($deptNo)
    {
        $this->deptNo = $deptNo;
        $this->apiParas["deptNo"] = $deptNo;
    }

    public function getIsvOrderNo()
    {
        return $this->isvOrderNo;
    }

    public function setIsvOrderNo($isvOrderNo)
    {
        $this->isvOrderNo = $isvOrderNo;
        $this->apiParas["isvOrderNo"] = $isvOrderNo;
    }
}
