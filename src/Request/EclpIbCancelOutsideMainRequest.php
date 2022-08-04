<?php

namespace ACES\Request;

class EclpIbCancelOutsideMainRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.eclp.ib.cancelOutsideMain';
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
