<?php

namespace ACES\Request;


class LdopAlphaLastDcJosConvertRequest
{
    private $apiParas = array();
    private $version;
    private $lastDcListXml;

    public function getApiMethodName()
    {
        return "jingdong.ldop.alpha.lastDc.jos.Convert";
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

    public function getLastDcListXml()
    {
        return $this->lastDcListXml;
    }

    public function setLastDcListXml($lastDcListXml)
    {
        $this->lastDcListXml = $lastDcListXml;
        $this->apiParas["lastDcListXml"] = $lastDcListXml;
    }
}
