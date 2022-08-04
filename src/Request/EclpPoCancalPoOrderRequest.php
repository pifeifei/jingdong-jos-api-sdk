<?php

namespace ACES\Request;

class EclpPoCancalPoOrderRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.eclp.po.cancalPoOrder';
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
