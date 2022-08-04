<?php

namespace ACES\Request;

class EclpMasterQuerySpSourceRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.eclp.master.querySpSource';
    }

    public function check()
    {
    }
}
