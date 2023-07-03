<?php

namespace ACES\Request;

class AreasProvinceGetRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.areas.province.get';
    }

    public function check()
    {
    }

    public function isRequireAccessToken(): bool
    {
        return false;
    }
}
