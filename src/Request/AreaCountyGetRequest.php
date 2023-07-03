<?php

namespace ACES\Request;

class AreaCountyGetRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.area.county.get';
    }

    public function check()
    {
    }

    public function setParentId($parentId)
    {
        $this->apiParas['parent_id'] = $parentId;
    }

    public function isRequireAccessToken(): bool
    {
        return false;
    }
}
