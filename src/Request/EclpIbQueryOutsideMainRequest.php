<?php

namespace ACES\Request;

class EclpIbQueryOutsideMainRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.eclp.ib.queryOutsideMain';
    }

    public function check()
    {
    }

    public function getOutsideMainNo()
    {
        return $this->apiParas['outsideMainNo'];
    }

    public function setOutsideMainNo($outsideMainNo)
    {
        $this->apiParas['outsideMainNo'] = $outsideMainNo;

        return $this;
    }
}
