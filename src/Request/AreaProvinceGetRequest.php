<?php

namespace ACES\Request;

class AreaProvinceGetRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.area.province.get';
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
