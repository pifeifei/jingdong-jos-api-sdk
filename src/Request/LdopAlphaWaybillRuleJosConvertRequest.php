<?php

namespace ACES\Request;

class LdopAlphaWaybillRuleJosConvertRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.ldop.alpha.waybillRule.jos.Convert';
    }

    public function check()
    {
    }

    public function getWaybillCodeRuleListXml()
    {
        return $this->apiParas['waybillCodeRuleListXml'];
    }

    public function setWaybillCodeRuleListXml($waybillCodeRuleListXml)
    {
        $this->apiParas['waybillCodeRuleListXml'] = $waybillCodeRuleListXml;

        return $this;
    }
}
