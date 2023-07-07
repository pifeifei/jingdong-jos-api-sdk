<?php

namespace ACES\Request;

class UnionOpenPromotionBysubunionidGetRequest extends AbstractRequest
{
    protected string $version = '1.0';

    public function getApiMethodName()
    {
        return 'jd.union.open.promotion.bysubunionid.get';
    }

    public function isRequireAccessToken(): bool
    {
        return false;
    }
}
