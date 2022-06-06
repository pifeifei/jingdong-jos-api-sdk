<?php

namespace ACES\Request;


class LdopAlphaProviderSignApproveRequest
{
    private $apiParas = array();
    private $version;
    private $requestId;
    private $approveResult;
    private $approveMessage;

    public function getApiMethodName()
    {
        return "jingdong.ldop.alpha.provider.sign.approve";
    }

    public function getApiParas()
    {
        if (empty($this->apiParas)) {
            return "{}";
        }
        return json_encode($this->apiParas);
    }

    public function check()
    {
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }

    public function getVersion()
    {
        return $this->version;
    }

    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function getRequestId()
    {
        return $this->requestId;
    }

    public function setRequestId($requestId)
    {
        $this->requestId = $requestId;
        $this->apiParas["requestId"] = $requestId;
    }

    public function getApproveResult()
    {
        return $this->approveResult;
    }

    public function setApproveResult($approveResult)
    {
        $this->approveResult = $approveResult;
        $this->apiParas["approveResult"] = $approveResult;
    }

    public function getApproveMessage()
    {
        return $this->approveMessage;
    }

    public function setApproveMessage($approveMessage)
    {
        $this->approveMessage = $approveMessage;
        $this->apiParas["approveMessage"] = $approveMessage;
    }
}
