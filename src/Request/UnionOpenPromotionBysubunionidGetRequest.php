<?php

namespace ACES\Request;

use ACES\Request\Domain\UnionOpenPromotionBysubunionidGet\PromotionCodeReq;

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

    public function setPromotionCodeReq(PromotionCodeReq $promotionCodeReq)
    {
        $this->apiParas['promotionCodeReq'] = $promotionCodeReq;
    }

    public function getPromotionCodeReq()
    {
        return $this->apiParas['promotionCodeReq'];
    }
}
