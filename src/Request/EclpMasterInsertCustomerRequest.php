<?php

namespace ACES\Request;

class EclpMasterInsertCustomerRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.eclp.master.insertCustomer';
    }

    public function check()
    {
    }

    public function getSellerNo()
    {
        return $this->apiParas['sellerNo'];
    }

    public function setSellerNo($sellerNo)
    {
        $this->apiParas['sellerNo'] = $sellerNo;

        return $this;
    }

    public function getDeptNo()
    {
        return $this->apiParas['deptNo'];
    }

    public function setDeptNo($deptNo)
    {
        $this->apiParas['deptNo'] = $deptNo;

        return $this;
    }

    public function getCustomerNo()
    {
        return $this->apiParas['customerNo'];
    }

    public function setCustomerNo($customerNo)
    {
        $this->apiParas['customerNo'] = $customerNo;

        return $this;
    }

    public function getCustomerName()
    {
        return $this->apiParas['customerName'];
    }

    public function setCustomerName($customerName)
    {
        $this->apiParas['customerName'] = $customerName;

        return $this;
    }

    public function getContacts()
    {
        return $this->apiParas['contacts'];
    }

    public function setContacts($contacts)
    {
        $this->apiParas['contacts'] = $contacts;

        return $this;
    }

    public function getPhone()
    {
        return $this->apiParas['phone'];
    }

    public function setPhone($phone)
    {
        $this->apiParas['phone'] = $phone;

        return $this;
    }

    public function getCustomerEmail()
    {
        return $this->apiParas['customerEmail'];
    }

    public function setCustomerEmail($customerEmail)
    {
        $this->apiParas['customerEmail'] = $customerEmail;

        return $this;
    }

    public function getCustomerAddress()
    {
        return $this->apiParas['customerAddress'];
    }

    public function setCustomerAddress($customerAddress)
    {
        $this->apiParas['customerAddress'] = $customerAddress;

        return $this;
    }

    public function getCustomerType()
    {
        return $this->apiParas['customerType'];
    }

    public function setCustomerType($customerType)
    {
        $this->apiParas['customerType'] = $customerType;

        return $this;
    }

    public function getTransitType()
    {
        return $this->apiParas['transitType'];
    }

    public function setTransitType($transitType)
    {
        $this->apiParas['transitType'] = $transitType;

        return $this;
    }

    public function getWarehouseName()
    {
        return $this->apiParas['warehouseName'];
    }

    public function setWarehouseName($warehouseName)
    {
        $this->apiParas['warehouseName'] = $warehouseName;

        return $this;
    }

    public function getProvinceName()
    {
        return $this->apiParas['provinceName'];
    }

    public function setProvinceName($provinceName)
    {
        $this->apiParas['provinceName'] = $provinceName;

        return $this;
    }

    public function getCityName()
    {
        return $this->apiParas['cityName'];
    }

    public function setCityName($cityName)
    {
        $this->apiParas['cityName'] = $cityName;

        return $this;
    }

    public function getCountyName()
    {
        return $this->apiParas['countyName'];
    }

    public function setCountyName($countyName)
    {
        $this->apiParas['countyName'] = $countyName;

        return $this;
    }

    public function getTownName()
    {
        return $this->apiParas['townName'];
    }

    public function setTownName($townName)
    {
        $this->apiParas['townName'] = $townName;

        return $this;
    }

    public function getRection()
    {
        return $this->apiParas['rection'];
    }

    public function setRection($rection)
    {
        $this->apiParas['rection'] = $rection;

        return $this;
    }

    public function getCustomerRemark()
    {
        return $this->apiParas['customerRemark'];
    }

    public function setCustomerRemark($customerRemark)
    {
        $this->apiParas['customerRemark'] = $customerRemark;

        return $this;
    }

    public function getLicenseAddr()
    {
        return $this->apiParas['licenseAddr'];
    }

    public function setLicenseAddr($licenseAddr)
    {
        $this->apiParas['licenseAddr'] = $licenseAddr;

        return $this;
    }

    public function getLicenseUnit()
    {
        return $this->apiParas['licenseUnit'];
    }

    public function setLicenseUnit($licenseUnit)
    {
        $this->apiParas['licenseUnit'] = $licenseUnit;

        return $this;
    }

    public function getLicenseUnitNo()
    {
        return $this->apiParas['licenseUnitNo'];
    }

    public function setLicenseUnitNo($licenseUnitNo)
    {
        $this->apiParas['licenseUnitNo'] = $licenseUnitNo;

        return $this;
    }

    public function getWarehouseNo()
    {
        return $this->apiParas['warehouseNo'];
    }

    public function setWarehouseNo($warehouseNo)
    {
        $this->apiParas['warehouseNo'] = $warehouseNo;

        return $this;
    }

    public function getSellerName()
    {
        return $this->apiParas['sellerName'];
    }

    public function setSellerName($sellerName)
    {
        $this->apiParas['sellerName'] = $sellerName;

        return $this;
    }
}
