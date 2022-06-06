<?php

namespace ACES\Request;


class LdopAlphaProviderSignSuccessInfoGetRequest
{
    private $apiParas = array();
    private $version;
    private $venderCode;

    public function getApiMethodName()
    {
        return "jingdong.ldop.alpha.provider.sign.success.info.get";
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

    public function getVenderCode()
    {
        return $this->venderCode;
    }

    public function setVenderCode($venderCode)
    {
        $this->venderCode = $venderCode;
        $this->apiParas["venderCode"] = $venderCode;
    }
}
