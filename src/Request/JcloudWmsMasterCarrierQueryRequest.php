<?php

namespace ACES\Request;

class JcloudWmsMasterCarrierQueryRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.jcloud.wms.master.carrier.query';
    }

    public function check()
    {
    }

    public function getTenantId()
    {
        return $this->apiParas['tenantId'];
    }

    public function setTenantId($tenantId)
    {
        $this->apiParas['tenantId'] = $tenantId;

        return $this;
    }

    public function getCarrierNo()
    {
        return $this->apiParas['carrierNo'];
    }

    public function setCarrierNo($carrierNo)
    {
        $this->apiParas['carrierNo'] = $carrierNo;

        return $this;
    }

    public function getCarrierName()
    {
        return $this->apiParas['carrierName'];
    }

    public function setCarrierName($carrierName)
    {
        $this->apiParas['carrierName'] = $carrierName;

        return $this;
    }

    public function getCarrierType()
    {
        return $this->apiParas['carrierType'];
    }

    public function setCarrierType($carrierType)
    {
        $this->apiParas['carrierType'] = $carrierType;

        return $this;
    }

    public function getEnglishName()
    {
        return $this->apiParas['englishName'];
    }

    public function setEnglishName($englishName)
    {
        $this->apiParas['englishName'] = $englishName;

        return $this;
    }

    public function getAddress()
    {
        return $this->apiParas['address'];
    }

    public function setAddress($address)
    {
        $this->apiParas['address'] = $address;

        return $this;
    }

    public function getTel()
    {
        return $this->apiParas['tel'];
    }

    public function setTel($tel)
    {
        $this->apiParas['tel'] = $tel;

        return $this;
    }

    public function getContact()
    {
        return $this->apiParas['contact'];
    }

    public function setContact($contact)
    {
        $this->apiParas['contact'] = $contact;

        return $this;
    }

    public function getPostCode()
    {
        return $this->apiParas['postCode'];
    }

    public function setPostCode($postCode)
    {
        $this->apiParas['postCode'] = $postCode;

        return $this;
    }

    public function getUseFlag()
    {
        return $this->apiParas['useFlag'];
    }

    public function setUseFlag($useFlag)
    {
        $this->apiParas['useFlag'] = $useFlag;

        return $this;
    }
}
