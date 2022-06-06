<?php

namespace ACES\Request;


class FceAlphaGetVenderCarrierRequest
{
    private $apiParas = array();
    private $version;

    public function getApiMethodName()
    {
        return "jingdong.fce.alpha.getVenderCarrier";
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
}
