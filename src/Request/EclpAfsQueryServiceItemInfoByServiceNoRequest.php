<?php

namespace ACES\Request;

class EclpAfsQueryServiceItemInfoByServiceNoRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.eclp.afs.queryServiceItemInfoByServiceNo';
    }

    public function check()
    {
    }

    public function getServicesNo()
    {
        return $this->apiParas['servicesNo'];
    }

    public function setServicesNo($servicesNo)
    {
        $this->apiParas['servicesNo'] = $servicesNo;

        return $this;
    }
}
