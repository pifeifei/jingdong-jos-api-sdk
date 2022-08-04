<?php

namespace ACES\Request;

class EclpProcessAddProcessOrderJosRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.eclp.process.addProcessOrderJos';
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
