<?php

namespace ACES\Request;


class MfaInnerValidateMsgCodeRequest
{
    private $apiParas = array();
    private $version;
    private $msgCode;
    private $rKey;
    private $validateType;

    public function getApiMethodName()
    {
        return "jingdong.mfa.inner.validateMsgCode";
    }

    public function getApiParas()
    {
        if (empty($this->apiParas)) {
            return "{}";
        }
        return json_encode($this->apiParas);
    }

    public function check()
    {
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }

    public function getVersion()
    {
        return $this->version;
    }

    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function getMsgCode()
    {
        return $this->msgCode;
    }

    public function setMsgCode($msgCode)
    {
        $this->msgCode = $msgCode;
        $this->apiParas["msgCode"] = $msgCode;
    }

    public function getRKey()
    {
        return $this->rKey;
    }

    public function setRKey($rKey)
    {
        $this->rKey = $rKey;
        $this->apiParas["rKey"] = $rKey;
    }

    public function getValidateType()
    {
        return $this->validateType;
    }

    public function setValidateType($validateType)
    {
        $this->validateType = $validateType;
        $this->apiParas["validateType"] = $validateType;
    }
}
