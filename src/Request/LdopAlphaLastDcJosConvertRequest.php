<?php

namespace ACES\Request;

class LdopAlphaLastDcJosConvertRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.ldop.alpha.lastDc.jos.Convert';
    }

    public function check()
    {
    }

    public function getLastDcListXml()
    {
        return $this->apiParas['lastDcListXml'];
    }

    public function setLastDcListXml($lastDcListXml)
    {
        $this->apiParas['lastDcListXml'] = $lastDcListXml;

        return $this;
    }
}
