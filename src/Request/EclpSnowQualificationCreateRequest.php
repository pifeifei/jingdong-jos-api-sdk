<?php

namespace ACES\Request;

class EclpSnowQualificationCreateRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.eclp.snow.qualificationCreate';
    }

    public function check()
    {
    }

    public function getRequest()
    {
        return $this->apiParas['request'];
    }

    public function setRequest($request)
    {
        $this->apiParas['request'] = $request;

        return $this;
    }
}
