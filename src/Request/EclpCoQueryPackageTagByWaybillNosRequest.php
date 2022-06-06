<?php

namespace ACES\Request;


class EclpCoQueryPackageTagByWaybillNosRequest
{
    private $apiParas = array();
    private $version;
    private $lwbNos;

    public function getApiMethodName()
    {
        return "jingdong.eclp.co.queryPackageTagByWaybillNos";
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

    public function getLwbNos()
    {
        return $this->lwbNos;
    }

    public function setLwbNos($lwbNos)
    {
        $this->lwbNos = $lwbNos;
        $this->apiParas["lwbNos"] = $lwbNos;
    }
}
