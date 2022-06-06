<?php

class LdopAlphaLastDcJosConvertRequest
{
    private $apiParas = array();

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

    private $version;

    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function getVersion()
    {
        return $this->version;
    }
                                                                    private $lastDcListXml;

    public function setLastDcListXml($lastDcListXml)
    {
        $this->lastDcListXml = $lastDcListXml;
         $this->apiParas["lastDcListXml"] = $lastDcListXml;
    }

    public function getLastDcListXml()
    {
        return $this->lastDcListXml;
    }
}
