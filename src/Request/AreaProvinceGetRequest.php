<?php

namespace ACES\Request;

class AreaProvinceGetRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.area.province.get';
    }

    public function check()
    {
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
    }

    /**
     * {@inheritDoc}
     */
    public function isRequireAccessToken(): bool
    {
        return false;
    }
}
