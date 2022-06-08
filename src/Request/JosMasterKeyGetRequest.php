<?php

namespace ACES\Request;

class JosMasterKeyGetRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.jos.master.key.get';
    }

    public function check()
    {
    }

    public function setSig($sig)
    {
        $this->apiParas['sig'] = $sig;

        return $this;
    }

    public function getSig()
    {
        return $this->apiParas['sig'];
    }

    public function setSdkVer($sdkVer)
    {
        $this->apiParas['sdkVer'] = $sdkVer;

        return $this;
    }

    public function getSdkVer()
    {
        return $this->apiParas['sdkVer'];
    }

    public function setTs($ts)
    {
        $this->apiParas['ts'] = $ts;

        return $this;
    }

    public function getTs()
    {
        return $this->apiParas['ts'];
    }

    public function setTid($tid)
    {
        $this->apiParas['tid'] = $tid;

        return $this;
    }

    public function getTid()
    {
        return $this->apiParas['tid'];
    }
}
