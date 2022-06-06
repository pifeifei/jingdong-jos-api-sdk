<?php

namespace ACES\Request;


class EclpGoodsQueryGoodsSerialRequest
{
    private $apiParas = array();
    private $version;
    private $bizNo;

    public function getApiMethodName()
    {
        return "jingdong.eclp.goods.queryGoodsSerial";
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

    public function getBizNo()
    {
        return $this->bizNo;
    }

    public function setBizNo($bizNo)
    {
        $this->bizNo = $bizNo;
        $this->apiParas["bizNo"] = $bizNo;
    }
}
