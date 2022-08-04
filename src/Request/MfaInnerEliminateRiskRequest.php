<?php

namespace ACES\Request;

class MfaInnerEliminateRiskRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.mfa.inner.eliminateRisk';
    }

    public function check()
    {
    }

    public function getRKey()
    {
        return $this->apiParas['rKey'];
    }

    public function setRKey($rKey)
    {
        $this->apiParas['rKey'] = $rKey;

        return $this;
    }

    public function getValidateType()
    {
        return $this->apiParas['validateType'];
    }

    public function setValidateType($validateType)
    {
        $this->apiParas['validateType'] = $validateType;

        return $this;
    }
}
