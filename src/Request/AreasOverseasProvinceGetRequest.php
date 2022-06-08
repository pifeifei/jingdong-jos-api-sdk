<?php

namespace ACES\Request;

class AreasOverseasProvinceGetRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.areas.overseasProvince.get';
    }

    public function check()
    {
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
    }
}
