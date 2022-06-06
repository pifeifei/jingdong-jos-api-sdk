<?php

class LdopOmsPickupAttachmentQueryRequest
{
    private $apiParas = array();

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

    private $version;

    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function getVersion()
    {
        return $this->version;
    }
                                                                                                                                    private $opeCode;

    public function setOpeCode($opeCode)
    {
        $this->opeCode = $opeCode;
         $this->apiParas["opeCode"] = $opeCode;
    }

    public function getOpeCode()
    {
        return $this->opeCode;
    }

                                                        private $attachmentType;

    public function setAttachmentType($attachmentType)
    {
        $this->attachmentType = $attachmentType;
         $this->apiParas["attachmentType"] = $attachmentType;
    }

    public function getAttachmentType()
    {
        return $this->attachmentType;
    }

                                                        private $busiId;

    public function setBusiId($busiId)
    {
        $this->busiId = $busiId;
         $this->apiParas["busiId"] = $busiId;
    }

    public function getBusiId()
    {
        return $this->busiId;
    }

                                                        private $customerCode;

    public function setCustomerCode($customerCode)
    {
        $this->customerCode = $customerCode;
         $this->apiParas["customerCode"] = $customerCode;
    }

    public function getCustomerCode()
    {
        return $this->customerCode;
    }
}
