<?php

namespace ACES\Request;


class AreasOverseasCityGetRequest
{
    private $apiParas = array();
    private $version;
    private $parentId;

    public function getApiMethodName()
    {
        return "jingdong.areas.overseasCity.get";
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

    public function getParentId()
    {
        return $this->parentId;
    }

    public function setParentId($parentId)
    {
        $this->parentId = $parentId;
        $this->apiParas["parentId"] = $parentId;
    }
}
