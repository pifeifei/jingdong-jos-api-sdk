<?php

namespace ACES\Request;

class AreasOverseasCityGetRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.areas.overseasCity.get';
    }

    public function check()
    {
    }

    public function getParentId()
    {
        return $this->apiParas['parent_id'];
    }

    public function setParentId($parentId)
    {
        $this->apiParas['parent_id'] = $parentId;
    }
}
