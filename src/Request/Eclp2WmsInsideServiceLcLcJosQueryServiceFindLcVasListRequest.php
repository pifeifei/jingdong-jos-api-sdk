<?php

namespace ACES\Request;


class Eclp2WmsInsideServiceLcLcJosQueryServiceFindLcVasListRequest
{
    private $apiParas = array();
    private $version;
    private $lcNo;

    public function getApiMethodName()
    {
        return "jingdong.eclp2.wms.inside.service.lc.LcJosQueryService.findLcVasList";
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

    public function getLcNo()
    {
        return $this->lcNo;
    }

    public function setLcNo($lcNo)
    {
        $this->lcNo = $lcNo;
        $this->apiParas["lcNo"] = $lcNo;
    }
}
