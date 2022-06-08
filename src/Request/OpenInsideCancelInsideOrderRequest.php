<?php

namespace ACES\Request;

class OpenInsideCancelInsideOrderRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.open.inside.cancelInsideOrder';
    }

    public function check()
    {
    }

    public function getEclpNo()
    {
        return $this->apiParas['eclpNo'];
    }

    public function setEclpNo($eclpNo)
    {
        $this->apiParas['eclpNo'] = $eclpNo;

        return $this;
    }

    public function getIsvNo()
    {
        return $this->apiParas['isvNo'];
    }

    public function setIsvNo($isvNo)
    {
        $this->apiParas['isvNo'] = $isvNo;

        return $this;
    }

    public function getBizType()
    {
        return $this->apiParas['bizType'];
    }

    public function setBizType($bizType)
    {
        $this->apiParas['bizType'] = $bizType;

        return $this;
    }

    public function getSellerNo()
    {
        return $this->apiParas['sellerNo'];
    }

    public function setSellerNo($sellerNo)
    {
        $this->apiParas['sellerNo'] = $sellerNo;

        return $this;
    }
}
