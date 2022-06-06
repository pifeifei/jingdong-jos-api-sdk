<?php

class OpenInsideCancelInsideOrderRequest
{
    private $apiParas = array();

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

    private $version;

    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function getVersion()
    {
        return $this->version;
    }
                                                                                                                                                                private $eclpNo;

    public function setEclpNo($eclpNo)
    {
        $this->eclpNo = $eclpNo;
         $this->apiParas["eclpNo"] = $eclpNo;
    }

    public function getEclpNo()
    {
        return $this->eclpNo;
    }

                                                        private $isvNo;

    public function setIsvNo($isvNo)
    {
        $this->isvNo = $isvNo;
         $this->apiParas["isvNo"] = $isvNo;
    }

    public function getIsvNo()
    {
        return $this->isvNo;
    }

                                                        private $bizType;

    public function setBizType($bizType)
    {
        $this->bizType = $bizType;
         $this->apiParas["bizType"] = $bizType;
    }

    public function getBizType()
    {
        return $this->bizType;
    }

                                                        private $sellerNo;

    public function setSellerNo($sellerNo)
    {
        $this->sellerNo = $sellerNo;
         $this->apiParas["sellerNo"] = $sellerNo;
    }

    public function getSellerNo()
    {
        return $this->sellerNo;
    }
}
