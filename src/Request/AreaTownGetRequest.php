<?php

namespace ACES\Request;

class AreaTownGetRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.area.town.get';
    }

    public function check()
    {
    }

    public function setParentId($parentId)
    {
        $this->apiParas['parent_id'] = $parentId;
    }

    /**
     * {@inheritDoc}
     */
    public function isRequireAccessToken(): bool
    {
        return false;
    }
}
