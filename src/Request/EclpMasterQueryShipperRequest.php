<?php

namespace ACES\Request;


class EclpMasterQueryShipperRequest
{
    private $apiParas = array();
    private $version;
    private $shipperNos;

    public function getApiMethodName()
    {
        return "jingdong.eclp.master.queryShipper";
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

    public function getShipperNos()
    {
        return $this->shipperNos;
    }

    public function setShipperNos($shipperNos)
    {
        $this->shipperNos = $shipperNos;
        $this->apiParas["shipperNos"] = $shipperNos;
    }
}
