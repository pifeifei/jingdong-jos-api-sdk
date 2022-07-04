<?php

namespace ACES\Request;

class AreaCountyGetRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.area.county.get';
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
