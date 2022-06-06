<?php

namespace ACES\Request;


class LdopAlphaWaybillReceiveRequest
{
    private $apiParas = array();
    private $version;
    private $content;

    public function getApiMethodName()
    {
        return "jingdong.ldop.alpha.waybill.receive";
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

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;
        $this->apiParas["content"] = $content;
    }
}
