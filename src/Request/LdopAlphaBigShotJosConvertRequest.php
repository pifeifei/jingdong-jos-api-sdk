<?php

namespace ACES\Request;

class LdopAlphaBigShotJosConvertRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.ldop.alpha.bigShot.jos.Convert';
    }

    public function check()
    {
    }

    public function getBigShotListXml()
    {
        return $this->apiParas['bigShotListXml'];
    }

    public function setBigShotListXml($bigShotListXml)
    {
        $this->apiParas['bigShotListXml'] = $bigShotListXml;

        return $this;
    }
}
