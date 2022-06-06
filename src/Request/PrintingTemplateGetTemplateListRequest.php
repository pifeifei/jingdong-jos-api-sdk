<?php

namespace ACES\Request;


class PrintingTemplateGetTemplateListRequest
{
    private $apiParas = array();
    private $version;
    private $param1;

    public function getApiMethodName()
    {
        return "jingdong.printing.template.getTemplateList";
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

    public function getParam1()
    {
        return $this->apiParas['param1'];
    }

    public function setParam1($param1)
    {
        $this->apiParas['param1'] = $param1;
    }
}
