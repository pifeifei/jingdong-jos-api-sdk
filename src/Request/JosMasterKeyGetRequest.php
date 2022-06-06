<?php

namespace ACES\Request;


class JosMasterKeyGetRequest
{
    private $apiParas = [];
    private $version;

    public function getApiMethodName()
    {
        return "jingdong.jos.master.key.get";
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
    }

    public function getVersion()
    {
        return $this->version;
    }

    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function setSig($sig)
    {
        $this->apiParas["sig"] = $sig;
    }

    public function getSig()
    {
        return $this->apiParas['sig'];
    }

    public function setSdkVer($sdkVer)
    {
        $this->apiParas["sdk_ver"] = $sdkVer;
    }

    public function getSdkVer()
    {
        return $this->apiParas["sdk_ver"];
    }

    public function setTs($ts)
    {
        $this->apiParas["ts"] = $ts;
    }

    public function getTs()
    {
        return $this->apiParas['ts'];
    }

    public function setTid($tid)
    {
        $this->apiParas["tid"] = $tid;
    }

    public function getTid()
    {
        return $this->apiParas['tid'];
    }
}
