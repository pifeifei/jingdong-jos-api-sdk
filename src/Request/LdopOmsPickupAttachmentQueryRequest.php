<?php

namespace ACES\Request;


class LdopOmsPickupAttachmentQueryRequest
{
    private $apiParas = array();
    private $version;
    private $opeCode;
    private $attachmentType;
    private $busiId;
    private $customerCode;

    public function getApiMethodName()
    {
        return "jingdong.ldop.oms.pickup.attachment.query";
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

    public function getOpeCode()
    {
        return $this->opeCode;
    }

    public function setOpeCode($opeCode)
    {
        $this->opeCode = $opeCode;
        $this->apiParas["opeCode"] = $opeCode;
    }

    public function getAttachmentType()
    {
        return $this->attachmentType;
    }

    public function setAttachmentType($attachmentType)
    {
        $this->attachmentType = $attachmentType;
        $this->apiParas["attachmentType"] = $attachmentType;
    }

    public function getBusiId()
    {
        return $this->busiId;
    }

    public function setBusiId($busiId)
    {
        $this->busiId = $busiId;
        $this->apiParas["busiId"] = $busiId;
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
}
