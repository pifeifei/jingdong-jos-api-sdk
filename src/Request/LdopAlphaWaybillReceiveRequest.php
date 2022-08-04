<?php

namespace ACES\Request;

class LdopAlphaWaybillReceiveRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.ldop.alpha.waybill.receive';
    }

    public function check()
    {
    }

    public function getContent()
    {
        return $this->apiParas['content'];
    }

    public function setContent($content)
    {
        $this->apiParas['content'] = $content;

        return $this;
    }
}
