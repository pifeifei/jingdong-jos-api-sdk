<?php

namespace ACES\Request;

class EclpPoClosePoRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.eclp.po.closePo';
    }

    public function check()
    {
    }

    public function getPoOrderNo()
    {
        return $this->apiParas['poOrderNo'];
    }

    public function setPoOrderNo($poOrderNo)
    {
        $this->apiParas['poOrderNo'] = $poOrderNo;

        return $this;
    }
}
