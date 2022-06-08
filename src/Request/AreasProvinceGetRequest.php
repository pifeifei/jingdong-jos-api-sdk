<?php

namespace ACES\Request;

class AreasProvinceGetRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.areas.province.get';
    }

    public function check()
    {
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
    }
}
