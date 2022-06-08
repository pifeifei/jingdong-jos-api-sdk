<?php

namespace ACES\Request;

class LdopAlphaDistributeCenterJosConvertRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.ldop.alpha.distributeCenter.jos.Convert';
    }

    public function check()
    {
    }

    public function getDistributeCenterListXml()
    {
        return $this->apiParas['distributeCenterListXml'];
    }

    public function setDistributeCenterListXml($distributeCenterListXml)
    {
        $this->apiParas['distributeCenterListXml'] = $distributeCenterListXml;

        return $this;
    }
}
