<?php

namespace ACES\Request;

class EclpMasterModifySupplierRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.eclp.master.modifySupplier';
    }

    public function check()
    {
    }

    public function getEclpSupplierNo()
    {
        return $this->apiParas['eclpSupplierNo'];
    }

    public function setEclpSupplierNo($eclpSupplierNo)
    {
        $this->apiParas['eclpSupplierNo'] = $eclpSupplierNo;

        return $this;
    }

    public function getSupplierName()
    {
        return $this->apiParas['supplierName'];
    }

    public function setSupplierName($supplierName)
    {
        $this->apiParas['supplierName'] = $supplierName;

        return $this;
    }

    public function getStatus()
    {
        return $this->apiParas['status'];
    }

    public function setStatus($status)
    {
        $this->apiParas['status'] = $status;

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

    public function getFax()
    {
        return $this->apiParas['fax'];
    }

    public function setFax($fax)
    {
        $this->apiParas['fax'] = $fax;

        return $this;
    }

    public function getEmail()
    {
        return $this->apiParas['email'];
    }

    public function setEmail($email)
    {
        $this->apiParas['email'] = $email;

        return $this;
    }

    public function getProvince()
    {
        return $this->apiParas['province'];
    }

    public function setProvince($province)
    {
        $this->apiParas['province'] = $province;

        return $this;
    }

    public function getCity()
    {
        return $this->apiParas['city'];
    }

    public function setCity($city)
    {
        $this->apiParas['city'] = $city;

        return $this;
    }

    public function getCounty()
    {
        return $this->apiParas['county'];
    }

    public function setCounty($county)
    {
        $this->apiParas['county'] = $county;

        return $this;
    }

    public function getTown()
    {
        return $this->apiParas['town'];
    }

    public function setTown($town)
    {
        $this->apiParas['town'] = $town;

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

    public function getExt1()
    {
        return $this->apiParas['ext1'];
    }

    public function setExt1($ext1)
    {
        $this->apiParas['ext1'] = $ext1;

        return $this;
    }

    public function getExt2()
    {
        return $this->apiParas['ext2'];
    }

    public function setExt2($ext2)
    {
        $this->apiParas['ext2'] = $ext2;

        return $this;
    }

    public function getExt3()
    {
        return $this->apiParas['ext3'];
    }

    public function setExt3($ext3)
    {
        $this->apiParas['ext3'] = $ext3;

        return $this;
    }

    public function getExt4()
    {
        return $this->apiParas['ext4'];
    }

    public function setExt4($ext4)
    {
        $this->apiParas['ext4'] = $ext4;

        return $this;
    }

    public function getExt5()
    {
        return $this->apiParas['ext5'];
    }

    public function setExt5($ext5)
    {
        $this->apiParas['ext5'] = $ext5;

        return $this;
    }

    public function getPictureUrls()
    {
        return $this->apiParas['pictureUrls'];
    }

    public function setPictureUrls($pictureUrls)
    {
        $this->apiParas['pictureUrls'] = $pictureUrls;

        return $this;
    }
}
