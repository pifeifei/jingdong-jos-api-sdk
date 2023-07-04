<?php

namespace ACES\Request;

class UnionOpenPromotionCommonGetRequest extends AbstractRequest
{
    protected string $version = '1.0';
    
    public function getApiMethodName()
    {
        return 'jd.union.open.promotion.common.get';
    }

    public function isRequireAccessToken(): bool
    {
        return false;
    }

    public function setPromotionCodeReq($promotionCodeReq)
    {
        $this->apiParas['promotionCodeReq'] = $promotionCodeReq;
    }

    public function getPromotionCodeReq()
    {
        return $this->apiParas['promotionCodeReq'];
    }
}
