<?php

namespace ACES\Request;

class OpenInsideJosTransportInsideOrderRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.open.inside.jos.transportInsideOrder';
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
