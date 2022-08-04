<?php

namespace ACES\Request;

class EclpOvasTransportGoodOvasItemsRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.eclp.ovas.transportGoodOvasItems';
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
