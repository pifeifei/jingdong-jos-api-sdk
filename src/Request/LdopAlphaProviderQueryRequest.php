<?php

namespace ACES\Request;

class LdopAlphaProviderQueryRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.ldop.alpha.provider.query';
    }

    public function check()
    {
    }

    public function getProviderState()
    {
        return $this->apiParas['providerState'];
    }

    public function setProviderState($providerState)
    {
        $this->apiParas['providerState'] = $providerState;

        return $this;
    }
}
