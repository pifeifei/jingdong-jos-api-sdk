<?php

namespace ACES\Request;


class EclpPoQueryPoOrderRequest
{
    private $apiParas = array();
    private $version;
    private $poOrderNo;

    public function getApiMethodName()
    {
        return "jingdong.eclp.po.queryPoOrder";
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

    public function getPoOrderNo()
    {
        return $this->poOrderNo;
    }

    public function setPoOrderNo($poOrderNo)
    {
        $this->poOrderNo = $poOrderNo;
        $this->apiParas["poOrderNo"] = $poOrderNo;
    }
}
