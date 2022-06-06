<?php

namespace ACES\Request;


class EclpOrderQueryOrderCartonBySoNoRequest
{
    private $apiParas = array();
    private $version;
    private $soNo;

    public function getApiMethodName()
    {
        return "jingdong.eclp.order.queryOrderCartonBySoNo";
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

    public function getSoNo()
    {
        return $this->soNo;
    }

    public function setSoNo($soNo)
    {
        $this->soNo = $soNo;
        $this->apiParas["soNo"] = $soNo;
    }
}
