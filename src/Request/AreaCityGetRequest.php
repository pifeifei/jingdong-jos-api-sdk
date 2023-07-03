<?php

namespace ACES\Request;

class AreaCityGetRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.area.city.get';
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
