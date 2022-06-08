<?php

namespace ACES\Request;

class LdopAbnormalApprovalRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.ldop.abnormal.approval';
    }

    public function check()
    {
    }

    public function getCustomerCode()
    {
        return $this->apiParas['customerCode'];
    }

    public function setCustomerCode($customerCode)
    {
        $this->apiParas['customerCode'] = $customerCode;

        return $this;
    }

    public function getDeliveryId()
    {
        return $this->apiParas['deliveryId'];
    }

    public function setDeliveryId($deliveryId)
    {
        $this->apiParas['deliveryId'] = $deliveryId;

        return $this;
    }

    public function getResponseComment()
    {
        return $this->apiParas['responseComment'];
    }

    public function setResponseComment($responseComment)
    {
        $this->apiParas['responseComment'] = $responseComment;

        return $this;
    }

    public function getType()
    {
        return $this->apiParas['type'];
    }

    public function setType($type)
    {
        $this->apiParas['type'] = $type;

        return $this;
    }
}
