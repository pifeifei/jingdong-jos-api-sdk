<?php

namespace ACES\Request;

class EclpMasterGetSellerInfoRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.eclp.master.getSellerInfo';
    }

    public function check()
    {
    }
}
