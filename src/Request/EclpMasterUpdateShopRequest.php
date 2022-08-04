<?php

namespace ACES\Request;

class EclpMasterUpdateShopRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.eclp.master.updateShop';
    }

    public function check()
    {
    }

    public function getShopNo()
    {
        return $this->apiParas['shopNo'];
    }

    public function setShopNo($shopNo)
    {
        $this->apiParas['shopNo'] = $shopNo;

        return $this;
    }

    public function getSpSourceNo()
    {
        return $this->apiParas['spSourceNo'];
    }

    public function setSpSourceNo($spSourceNo)
    {
        $this->apiParas['spSourceNo'] = $spSourceNo;

        return $this;
    }

    public function getSpShopNo()
    {
        return $this->apiParas['spShopNo'];
    }

    public function setSpShopNo($spShopNo)
    {
        $this->apiParas['spShopNo'] = $spShopNo;

        return $this;
    }

    public function getShopName()
    {
        return $this->apiParas['shopName'];
    }

    public function setShopName($shopName)
    {
        $this->apiParas['shopName'] = $shopName;

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

    public function getAddress()
    {
        return $this->apiParas['address'];
    }

    public function setAddress($address)
    {
        $this->apiParas['address'] = $address;

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

    public function getFax()
    {
        return $this->apiParas['fax'];
    }

    public function setFax($fax)
    {
        $this->apiParas['fax'] = $fax;

        return $this;
    }

    public function getAfterSaleContacts()
    {
        return $this->apiParas['afterSaleContacts'];
    }

    public function setAfterSaleContacts($afterSaleContacts)
    {
        $this->apiParas['afterSaleContacts'] = $afterSaleContacts;

        return $this;
    }

    public function getAfterSaleAddress()
    {
        return $this->apiParas['afterSaleAddress'];
    }

    public function setAfterSaleAddress($afterSaleAddress)
    {
        $this->apiParas['afterSaleAddress'] = $afterSaleAddress;

        return $this;
    }

    public function getAfterSalePhone()
    {
        return $this->apiParas['afterSalePhone'];
    }

    public function setAfterSalePhone($afterSalePhone)
    {
        $this->apiParas['afterSalePhone'] = $afterSalePhone;

        return $this;
    }

    public function getBdOwnerNo()
    {
        return $this->apiParas['bdOwnerNo'];
    }

    public function setBdOwnerNo($bdOwnerNo)
    {
        $this->apiParas['bdOwnerNo'] = $bdOwnerNo;

        return $this;
    }

    public function getReserve1()
    {
        return $this->apiParas['reserve1'];
    }

    public function setReserve1($reserve1)
    {
        $this->apiParas['reserve1'] = $reserve1;

        return $this;
    }

    public function getReserve2()
    {
        return $this->apiParas['reserve2'];
    }

    public function setReserve2($reserve2)
    {
        $this->apiParas['reserve2'] = $reserve2;

        return $this;
    }

    public function getReserve3()
    {
        return $this->apiParas['reserve3'];
    }

    public function setReserve3($reserve3)
    {
        $this->apiParas['reserve3'] = $reserve3;

        return $this;
    }

    public function getReserve4()
    {
        return $this->apiParas['reserve4'];
    }

    public function setReserve4($reserve4)
    {
        $this->apiParas['reserve4'] = $reserve4;

        return $this;
    }

    public function getReserve5()
    {
        return $this->apiParas['reserve5'];
    }

    public function setReserve5($reserve5)
    {
        $this->apiParas['reserve5'] = $reserve5;

        return $this;
    }

    public function getReserve6()
    {
        return $this->apiParas['reserve6'];
    }

    public function setReserve6($reserve6)
    {
        $this->apiParas['reserve6'] = $reserve6;

        return $this;
    }

    public function getReserve7()
    {
        return $this->apiParas['reserve7'];
    }

    public function setReserve7($reserve7)
    {
        $this->apiParas['reserve7'] = $reserve7;

        return $this;
    }

    public function getReserve8()
    {
        return $this->apiParas['reserve8'];
    }

    public function setReserve8($reserve8)
    {
        $this->apiParas['reserve8'] = $reserve8;

        return $this;
    }

    public function getReserve9()
    {
        return $this->apiParas['reserve9'];
    }

    public function setReserve9($reserve9)
    {
        $this->apiParas['reserve9'] = $reserve9;

        return $this;
    }

    public function getReserve10()
    {
        return $this->apiParas['reserve10'];
    }

    public function setReserve10($reserve10)
    {
        $this->apiParas['reserve10'] = $reserve10;

        return $this;
    }
}
