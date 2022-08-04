<?php

namespace ACES\Request;

class LdopAlphaProviderSignSuccessInfoGetRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.ldop.alpha.provider.sign.success.info.get';
    }

    public function check()
    {
    }

    public function getVenderCode()
    {
        return $this->apiParas['venderCode'];
    }

    public function setVenderCode($venderCode)
    {
        $this->apiParas['venderCode'] = $venderCode;

        return $this;
    }
}
