<?php

class AreasTownGetRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.areas.town.get";
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
    private $baseAreaServiceRequest;

    public function setBaseAreaServiceRequest($baseAreaServiceRequest)
    {
        $this->apiParas['baseAreaServiceRequest'] = $baseAreaServiceRequest;
    }
    public function getBaseAreaServiceRequest()
    {
        return $this->apiParas['baseAreaServiceRequest'];
    }
}
