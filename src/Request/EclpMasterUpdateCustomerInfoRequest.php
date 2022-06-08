<?php

namespace ACES\Request;

class EclpMasterUpdateCustomerInfoRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.eclp.master.updateCustomerInfo';
    }

    public function check()
    {
    }

    public function getCustomerOut()
    {
        return $this->apiParas['customerOut'];
    }

    public function setCustomerOut($CustomerOut)
    {
        $this->apiParas['CustomerOut'] = $CustomerOut;

        return $this;
    }
}
