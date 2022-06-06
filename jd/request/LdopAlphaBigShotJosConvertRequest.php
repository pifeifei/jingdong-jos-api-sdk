<?php

class LdopAlphaBigShotJosConvertRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ldop.alpha.bigShot.jos.Convert";
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
                                                                    private $bigShotListXml;

    public function setBigShotListXml($bigShotListXml)
    {
        $this->bigShotListXml = $bigShotListXml;
         $this->apiParas["bigShotListXml"] = $bigShotListXml;
    }

    public function getBigShotListXml()
    {
        return $this->bigShotListXml;
    }
}
