<?php

namespace ACES\Request;


class EclpIbQueryOutsideMainRequest
{
    private $apiParas = array();
    private $version;
    private $outsideMainNo;

    public function getApiMethodName()
    {
        return "jingdong.eclp.ib.queryOutsideMain";
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

    public function getOutsideMainNo()
    {
        return $this->outsideMainNo;
    }

    public function setOutsideMainNo($outsideMainNo)
    {
        $this->outsideMainNo = $outsideMainNo;
        $this->apiParas["outsideMainNo"] = $outsideMainNo;
    }
}
