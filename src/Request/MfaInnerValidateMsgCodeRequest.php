<?php

namespace ACES\Request;

class MfaInnerValidateMsgCodeRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.mfa.inner.validateMsgCode';
    }

    public function check()
    {
    }

    public function getMsgCode()
    {
        return $this->apiParas['msgCode'];
    }

    public function setMsgCode($msgCode)
    {
        $this->apiParas['msgCode'] = $msgCode;

        return $this;
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
