<?php

namespace ACES\Request;


class OpenInsideCancelInsideOrderRequest
{
    private $apiParas = array();
    private $version;
    private $eclpNo;
    private $isvNo;
    private $bizType;
    private $sellerNo;

    public function getApiMethodName()
    {
        return "jingdong.open.inside.cancelInsideOrder";
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

    public function getEclpNo()
    {
        return $this->eclpNo;
    }

    public function setEclpNo($eclpNo)
    {
        $this->eclpNo = $eclpNo;
        $this->apiParas["eclpNo"] = $eclpNo;
    }

    public function getIsvNo()
    {
        return $this->isvNo;
    }

    public function setIsvNo($isvNo)
    {
        $this->isvNo = $isvNo;
        $this->apiParas["isvNo"] = $isvNo;
    }

    public function getBizType()
    {
        return $this->bizType;
    }

    public function setBizType($bizType)
    {
        $this->bizType = $bizType;
        $this->apiParas["bizType"] = $bizType;
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
}
