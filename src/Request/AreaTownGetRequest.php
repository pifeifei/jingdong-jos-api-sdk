<?php

namespace ACES\Request;

class AreaTownGetRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.area.town.get';
    }

    public function check()
    {
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
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
