<?php

namespace ACES\Request;

class SellerVenderInfoGetRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.seller.vender.info.get';
    }

    public function check()
    {
    }

    public function getExtJsonParam()
    {
        return $this->apiParas['extJsonParam'];
    }

    public function setExtJsonParam($extJsonParam)
    {
        $this->apiParas['extJsonParam'] = $extJsonParam;

        return $this;
    }
}
