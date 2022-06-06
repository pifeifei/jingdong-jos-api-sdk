<?php

namespace ACES\Request;


class SellerVenderInfoGetRequest
{
    private $apiParas = array();
    private $version;
    private $extJsonParam;

    public function getApiMethodName()
    {
        return "jingdong.seller.vender.info.get";
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

    public function getExtJsonParam()
    {
        return $this->extJsonParam;
    }

    public function setExtJsonParam($extJsonParam)
    {
        $this->extJsonParam = $extJsonParam;
        $this->apiParas["ext_json_param"] = $extJsonParam;
    }
}
