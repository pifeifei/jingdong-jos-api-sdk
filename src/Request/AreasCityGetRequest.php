<?php

namespace ACES\Request;

class AreasCityGetRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.areas.city.get';
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
