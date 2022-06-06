<?php

namespace ACES\Request;


class EclpMasterInsertCustomerRequest
{
    private $apiParas = array();
    private $version;
    private $sellerNo;
    private $deptNo;
    private $customerNo;
    private $customerName;
    private $contacts;
    private $phone;
    private $customerEmail;
    private $customerAddress;
    private $customerType;
    private $transitType;
    private $warehouseName;
    private $provinceName;
    private $cityName;
    private $countyName;
    private $townName;
    private $rection;
    private $customerRemark;
    private $licenseAddr;
    private $licenseUnit;
    private $licenseUnitNo;
    private $warehouseNo;
    private $sellerName;

    public function getApiMethodName()
    {
        return "jingdong.eclp.master.insertCustomer";
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

    public function getSellerNo()
    {
        return $this->sellerNo;
    }

    public function setSellerNo($sellerNo)
    {
        $this->sellerNo = $sellerNo;
        $this->apiParas["sellerNo"] = $sellerNo;
    }

    public function getDeptNo()
    {
        return $this->deptNo;
    }

    public function setDeptNo($deptNo)
    {
        $this->deptNo = $deptNo;
        $this->apiParas["deptNo"] = $deptNo;
    }

    public function getCustomerNo()
    {
        return $this->customerNo;
    }

    public function setCustomerNo($customerNo)
    {
        $this->customerNo = $customerNo;
        $this->apiParas["customerNo"] = $customerNo;
    }

    public function getCustomerName()
    {
        return $this->customerName;
    }

    public function setCustomerName($customerName)
    {
        $this->customerName = $customerName;
        $this->apiParas["customerName"] = $customerName;
    }

    public function getContacts()
    {
        return $this->contacts;
    }

    public function setContacts($contacts)
    {
        $this->contacts = $contacts;
        $this->apiParas["contacts"] = $contacts;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
        $this->apiParas["phone"] = $phone;
    }

    public function getCustomerEmail()
    {
        return $this->customerEmail;
    }

    public function setCustomerEmail($customerEmail)
    {
        $this->customerEmail = $customerEmail;
        $this->apiParas["customerEmail"] = $customerEmail;
    }

    public function getCustomerAddress()
    {
        return $this->customerAddress;
    }

    public function setCustomerAddress($customerAddress)
    {
        $this->customerAddress = $customerAddress;
        $this->apiParas["customerAddress"] = $customerAddress;
    }

    public function getCustomerType()
    {
        return $this->customerType;
    }

    public function setCustomerType($customerType)
    {
        $this->customerType = $customerType;
        $this->apiParas["customerType"] = $customerType;
    }

    public function getTransitType()
    {
        return $this->transitType;
    }

    public function setTransitType($transitType)
    {
        $this->transitType = $transitType;
        $this->apiParas["transitType"] = $transitType;
    }

    public function getWarehouseName()
    {
        return $this->warehouseName;
    }

    public function setWarehouseName($warehouseName)
    {
        $this->warehouseName = $warehouseName;
        $this->apiParas["warehouseName"] = $warehouseName;
    }

    public function getProvinceName()
    {
        return $this->provinceName;
    }

    public function setProvinceName($provinceName)
    {
        $this->provinceName = $provinceName;
        $this->apiParas["provinceName"] = $provinceName;
    }

    public function getCityName()
    {
        return $this->cityName;
    }

    public function setCityName($cityName)
    {
        $this->cityName = $cityName;
        $this->apiParas["cityName"] = $cityName;
    }

    public function getCountyName()
    {
        return $this->countyName;
    }

    public function setCountyName($countyName)
    {
        $this->countyName = $countyName;
        $this->apiParas["countyName"] = $countyName;
    }

    public function getTownName()
    {
        return $this->townName;
    }

    public function setTownName($townName)
    {
        $this->townName = $townName;
        $this->apiParas["townName"] = $townName;
    }

    public function getRection()
    {
        return $this->rection;
    }

    public function setRection($rection)
    {
        $this->rection = $rection;
        $this->apiParas["rection"] = $rection;
    }

    public function getCustomerRemark()
    {
        return $this->customerRemark;
    }

    public function setCustomerRemark($customerRemark)
    {
        $this->customerRemark = $customerRemark;
        $this->apiParas["customerRemark"] = $customerRemark;
    }

    public function getLicenseAddr()
    {
        return $this->licenseAddr;
    }

    public function setLicenseAddr($licenseAddr)
    {
        $this->licenseAddr = $licenseAddr;
        $this->apiParas["licenseAddr"] = $licenseAddr;
    }

    public function getLicenseUnit()
    {
        return $this->licenseUnit;
    }

    public function setLicenseUnit($licenseUnit)
    {
        $this->licenseUnit = $licenseUnit;
        $this->apiParas["licenseUnit"] = $licenseUnit;
    }

    public function getLicenseUnitNo()
    {
        return $this->licenseUnitNo;
    }

    public function setLicenseUnitNo($licenseUnitNo)
    {
        $this->licenseUnitNo = $licenseUnitNo;
        $this->apiParas["licenseUnitNo"] = $licenseUnitNo;
    }

    public function getWarehouseNo()
    {
        return $this->warehouseNo;
    }

    public function setWarehouseNo($warehouseNo)
    {
        $this->warehouseNo = $warehouseNo;
        $this->apiParas["warehouseNo"] = $warehouseNo;
    }

    public function getSellerName()
    {
        return $this->sellerName;
    }

    public function setSellerName($sellerName)
    {
        $this->sellerName = $sellerName;
        $this->apiParas["sellerName"] = $sellerName;
    }
}
