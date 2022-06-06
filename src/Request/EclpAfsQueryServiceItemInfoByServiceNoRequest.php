<?php

namespace ACES\Request;


class EclpAfsQueryServiceItemInfoByServiceNoRequest
{
    private $apiParas = array();
    private $version;
    private $servicesNo;

    public function getApiMethodName()
    {
        return "jingdong.eclp.afs.queryServiceItemInfoByServiceNo";
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

    public function getServicesNo()
    {
        return $this->servicesNo;
    }

    public function setServicesNo($servicesNo)
    {
        $this->servicesNo = $servicesNo;
        $this->apiParas["servicesNo"] = $servicesNo;
    }
}
