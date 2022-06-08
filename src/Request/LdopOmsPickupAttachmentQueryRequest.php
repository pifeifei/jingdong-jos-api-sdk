<?php

namespace ACES\Request;

class LdopOmsPickupAttachmentQueryRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.ldop.oms.pickup.attachment.query';
    }

    public function check()
    {
    }

    public function getOpeCode()
    {
        return $this->apiParas['opeCode'];
    }

    public function setOpeCode($opeCode)
    {
        $this->apiParas['opeCode'] = $opeCode;

        return $this;
    }

    public function getAttachmentType()
    {
        return $this->apiParas['attachmentType'];
    }

    public function setAttachmentType($attachmentType)
    {
        $this->apiParas['attachmentType'] = $attachmentType;

        return $this;
    }

    public function getBusiId()
    {
        return $this->apiParas['busiId'];
    }

    public function setBusiId($busiId)
    {
        $this->apiParas['busiId'] = $busiId;

        return $this;
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
}
