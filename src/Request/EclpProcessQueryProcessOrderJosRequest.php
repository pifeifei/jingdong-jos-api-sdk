<?php

namespace ACES\Request;

class EclpProcessQueryProcessOrderJosRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.eclp.process.queryProcessOrderJos';
    }

    public function check()
    {
    }

    public function getProcessedNo()
    {
        return $this->apiParas['processedNo'];
    }

    public function setProcessedNo($processedNo)
    {
        $this->apiParas['processedNo'] = $processedNo;

        return $this;
    }

    public function getSellerProcessedNo()
    {
        return $this->apiParas['sellerProcessedNo'];
    }

    public function setSellerProcessedNo($sellerProcessedNo)
    {
        $this->apiParas['sellerProcessedNo'] = $sellerProcessedNo;

        return $this;
    }
}
