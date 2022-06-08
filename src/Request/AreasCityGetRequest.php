<?php

namespace ACES\Request;

class AreasCityGetRequest extends AbstractRequest
{
    private $version;
    private $parentId;

    public function getApiMethodName()
    {
        return 'jingdong.areas.city.get';
    }

    public function check()
    {
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
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
