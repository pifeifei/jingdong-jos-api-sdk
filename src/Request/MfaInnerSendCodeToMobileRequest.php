<?php

namespace ACES\Request;


class MfaInnerSendCodeToMobileRequest
{
    private $apiParas = array();
    private $version;
    private $rKey;
    private $validateType;

    public function getApiMethodName()
    {
        return "jingdong.mfa.inner.sendCodeToMobile";
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

    public function getRKey()
    {
        return $this->apiParas['rKey'];
    }

    public function setRKey($rKey)
    {
        $this->apiParas['rKey'] = $rKey;
    }

    public function getValidateType()
    {
        return $this->apiParas['validateType'];
    }

    public function setValidateType($validateType)
    {
        $this->apiParas['validateType'] = $validateType;
    }
}