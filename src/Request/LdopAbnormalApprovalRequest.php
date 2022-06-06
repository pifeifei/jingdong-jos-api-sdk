<?php

namespace ACES\Request;


class LdopAbnormalApprovalRequest
{
    private $apiParas = array();
    private $version;
    private $customerCode;
    private $deliveryId;
    private $responseComment;
    private $type;

    public function getApiMethodName()
    {
        return "jingdong.ldop.abnormal.approval";
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

    public function getCustomerCode()
    {
        return $this->customerCode;
    }

    public function setCustomerCode($customerCode)
    {
        $this->customerCode = $customerCode;
        $this->apiParas["customerCode"] = $customerCode;
    }

    public function getDeliveryId()
    {
        return $this->deliveryId;
    }

    public function setDeliveryId($deliveryId)
    {
        $this->deliveryId = $deliveryId;
        $this->apiParas["deliveryId"] = $deliveryId;
    }

    public function getResponseComment()
    {
        return $this->responseComment;
    }

    public function setResponseComment($responseComment)
    {
        $this->responseComment = $responseComment;
        $this->apiParas["responseComment"] = $responseComment;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
        $this->apiParas["type"] = $type;
    }
}
