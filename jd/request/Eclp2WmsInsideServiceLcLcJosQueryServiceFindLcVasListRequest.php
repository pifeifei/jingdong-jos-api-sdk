<?php

class Eclp2WmsInsideServiceLcLcJosQueryServiceFindLcVasListRequest
{
    private $apiParas = array();

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

    private $version;

    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function getVersion()
    {
        return $this->version;
    }
                                                                    private $lcNo;

    public function setLcNo($lcNo)
    {
        $this->lcNo = $lcNo;
         $this->apiParas["lcNo"] = $lcNo;
    }

    public function getLcNo()
    {
        return $this->lcNo;
    }
}
