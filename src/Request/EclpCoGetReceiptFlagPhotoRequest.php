<?php

namespace ACES\Request;

class EclpCoGetReceiptFlagPhotoRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.eclp.co.getReceiptFlagPhoto';
    }

    public function check()
    {
    }

    public function getLwbNo()
    {
        return $this->apiParas['lwbNo'];
    }

    public function setLwbNo($lwbNo)
    {
        $this->apiParas['lwbNo'] = $lwbNo;

        return $this;
    }
}
