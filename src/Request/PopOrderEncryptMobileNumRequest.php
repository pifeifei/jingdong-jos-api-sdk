<?php

namespace ACES\Request;


class PopOrderEncryptMobileNumRequest
{
    private $apiParas = array();
    private $version;
    private $mobile;

    public function getApiMethodName()
    {
        return "jingdong.pop.order.encryptMobileNum";
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

    public function getMobile()
    {
        return $this->mobile;
    }

    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
        $this->apiParas["mobile"] = $mobile;
    }
}
