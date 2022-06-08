<?php

namespace ACES\Request;

class PopOrderEncryptMobileNumRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.pop.order.encryptMobileNum';
    }

    public function check()
    {
    }

    public function getMobile()
    {
        return $this->apiParas['mobile'];
    }

    public function setMobile($mobile)
    {
        $this->apiParas['mobile'] = $mobile;

        return $this;
    }
}
