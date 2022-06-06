<?php

class AreasOverseasCityGetRequest
{
    private $apiParas = array();

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

    private $version;

    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function getVersion()
    {
        return $this->version;
    }
                                                                                                                                    private $parentId;

    public function setParentId($parentId)
    {
        $this->parentId = $parentId;
         $this->apiParas["parentId"] = $parentId;
    }

    public function getParentId()
    {
        return $this->parentId;
    }
}
