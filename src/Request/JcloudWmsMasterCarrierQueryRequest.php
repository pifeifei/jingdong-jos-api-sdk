<?php

namespace ACES\Request;


class JcloudWmsMasterCarrierQueryRequest
{
    private $apiParas = array();
    private $version;
    private $tenantId;
    private $carrierNo;
    private $carrierName;
    private $carrierType;
    private $englishName;
    private $address;
    private $tel;
    private $contact;
    private $postCode;
    private $useFlag;

    public function getApiMethodName()
    {
        return "jingdong.jcloud.wms.master.carrier.query";
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

    public function getTenantId()
    {
        return $this->tenantId;
    }

    public function setTenantId($tenantId)
    {
        $this->tenantId = $tenantId;
        $this->apiParas["tenantId"] = $tenantId;
    }

    public function getCarrierNo()
    {
        return $this->carrierNo;
    }

    public function setCarrierNo($carrierNo)
    {
        $this->carrierNo = $carrierNo;
        $this->apiParas["carrierNo"] = $carrierNo;
    }

    public function getCarrierName()
    {
        return $this->carrierName;
    }

    public function setCarrierName($carrierName)
    {
        $this->carrierName = $carrierName;
        $this->apiParas["carrierName"] = $carrierName;
    }

    public function getCarrierType()
    {
        return $this->carrierType;
    }

    public function setCarrierType($carrierType)
    {
        $this->carrierType = $carrierType;
        $this->apiParas["carrierType"] = $carrierType;
    }

    public function getEnglishName()
    {
        return $this->englishName;
    }

    public function setEnglishName($englishName)
    {
        $this->englishName = $englishName;
        $this->apiParas["englishName"] = $englishName;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
        $this->apiParas["address"] = $address;
    }

    public function getTel()
    {
        return $this->tel;
    }

    public function setTel($tel)
    {
        $this->tel = $tel;
        $this->apiParas["tel"] = $tel;
    }

    public function getContact()
    {
        return $this->contact;
    }

    public function setContact($contact)
    {
        $this->contact = $contact;
        $this->apiParas["contact"] = $contact;
    }

    public function getPostCode()
    {
        return $this->postCode;
    }

    public function setPostCode($postCode)
    {
        $this->postCode = $postCode;
        $this->apiParas["postCode"] = $postCode;
    }

    public function getUseFlag()
    {
        return $this->useFlag;
    }

    public function setUseFlag($useFlag)
    {
        $this->useFlag = $useFlag;
        $this->apiParas["useFlag"] = $useFlag;
    }
}
