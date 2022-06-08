<?php

namespace ACES\Request;

class EclpOrderQueryOrderCartonBySoNoRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.eclp.order.queryOrderCartonBySoNo';
    }

    public function check()
    {
    }

    public function getSoNo()
    {
        return $this->apiParas['soNo'];
    }

    public function setSoNo($soNo)
    {
        $this->apiParas['soNo'] = $soNo;

        return $this;
    }
}
