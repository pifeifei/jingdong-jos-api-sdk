<?php

namespace ACES\Request;


class AreasTownGetRequest
{
    private $apiParas = array();
    private $version;
    private $baseAreaServiceRequest;

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

    public function getVersion()
    {
        return $this->version;
    }

    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function getBaseAreaServiceRequest()
    {
        return $this->apiParas['baseAreaServiceRequest'];
    }

    public function setBaseAreaServiceRequest($baseAreaServiceRequest)
    {
        $this->apiParas['baseAreaServiceRequest'] = $baseAreaServiceRequest;
    }
}
