<?php

namespace ACES\Request;

class AreasTownGetRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.areas.town.get';
    }

    public function check()
    {
    }

    public function setParentId($parentId)
    {
        $this->apiParas['parent_id'] = $parentId;
    }
}
