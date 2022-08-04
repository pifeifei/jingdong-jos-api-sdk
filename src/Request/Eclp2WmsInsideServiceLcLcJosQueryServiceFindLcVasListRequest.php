<?php

namespace ACES\Request;

class Eclp2WmsInsideServiceLcLcJosQueryServiceFindLcVasListRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.eclp2.wms.inside.service.lc.LcJosQueryService.findLcVasList';
    }

    public function check()
    {
    }

    public function getLcNo()
    {
        return $this->apiParas['lcNo'];
    }

    public function setLcNo($lcNo)
    {
        $this->apiParas['lcNo'] = $lcNo;
    }
}
