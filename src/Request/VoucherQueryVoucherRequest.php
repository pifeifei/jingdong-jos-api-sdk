<?php

namespace ACES\Request;


class VoucherQueryVoucherRequest
{
    private $apiParas = array();
    private $version;
    private $orderType;
    private $businessNo;
    private $sellerNo;
    private $systemSource;

    public function getApiMethodName()
    {
        return "jingdong.voucher.queryVoucher";
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

    public function getOrderType()
    {
        return $this->orderType;
    }

    public function setOrderType($orderType)
    {
        $this->orderType = $orderType;
        $this->apiParas["orderType"] = $orderType;
    }

    public function getBusinessNo()
    {
        return $this->businessNo;
    }

    public function setBusinessNo($businessNo)
    {
        $this->businessNo = $businessNo;
        $this->apiParas["businessNo"] = $businessNo;
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

    public function getSystemSource()
    {
        return $this->systemSource;
    }

    public function setSystemSource($systemSource)
    {
        $this->systemSource = $systemSource;
        $this->apiParas["systemSource"] = $systemSource;
    }
}
