<?php

namespace ACES\Request;

class AreasCountyGetRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.areas.county.get';
    }

    public function check()
    {
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->{$key} = $value;
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
