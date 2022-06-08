<?php

namespace ACES\Request;

class EclpCoQueryPackageTagByWaybillNosRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.eclp.co.queryPackageTagByWaybillNos';
    }

    public function check()
    {
    }

    public function getLwbNos()
    {
        return $this->apiParas['lwbNos'];
    }

    public function setLwbNos($lwbNos)
    {
        $this->apiParas['lwbNos'] = $lwbNos;

        return $this;
    }
}
