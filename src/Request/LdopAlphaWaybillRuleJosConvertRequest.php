<?php

namespace ACES\Request;


class LdopAlphaWaybillRuleJosConvertRequest
{
    private $apiParas = array();
    private $version;
    private $waybillCodeRuleListXml;

    public function getApiMethodName()
    {
        return "jingdong.ldop.alpha.waybillRule.jos.Convert";
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

    public function getWaybillCodeRuleListXml()
    {
        return $this->waybillCodeRuleListXml;
    }

    public function setWaybillCodeRuleListXml($waybillCodeRuleListXml)
    {
        $this->waybillCodeRuleListXml = $waybillCodeRuleListXml;
        $this->apiParas["waybillCodeRuleListXml"] = $waybillCodeRuleListXml;
    }
}
