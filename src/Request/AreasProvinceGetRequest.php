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

    /**
     * {@inheritDoc}
     */
    public function isRequireAccessToken(): bool
    {
        return false;
    }
}
