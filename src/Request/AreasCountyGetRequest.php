<?php

namespace ACES\Request;

class AreasCountyGetRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.areas.county.get';
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
