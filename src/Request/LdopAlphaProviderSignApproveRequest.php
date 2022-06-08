<?php

namespace ACES\Request;

class LdopAlphaProviderSignApproveRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.ldop.alpha.provider.sign.approve';
    }

    public function check()
    {
    }

    public function getRequestId()
    {
        return $this->apiParas['requestId'];
    }

    public function setRequestId($requestId)
    {
        $this->apiParas['requestId'] = $requestId;

        return $this;
    }

    public function getApproveResult()
    {
        return $this->apiParas['approveResult'];
    }

    public function setApproveResult($approveResult)
    {
        $this->apiParas['approveResult'] = $approveResult;

        return $this;
    }

    public function getApproveMessage()
    {
        return $this->apiParas['approveMessage'];
    }

    public function setApproveMessage($approveMessage)
    {
        $this->apiParas['approveMessage'] = $approveMessage;

        return $this;
    }
}
