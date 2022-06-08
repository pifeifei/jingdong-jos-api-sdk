<?php

namespace ACES\Request;

class VoucherQueryVoucherRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.voucher.queryVoucher';
    }

    public function check()
    {
    }

    public function getOrderType()
    {
        return $this->apiParas['orderType'];
    }

    public function setOrderType($orderType)
    {
        $this->apiParas['orderType'] = $orderType;

        return $this;
    }

    public function getBusinessNo()
    {
        return $this->apiParas['businessNo'];
    }

    public function setBusinessNo($businessNo)
    {
        $this->apiParas['businessNo'] = $businessNo;

        return $this;
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

    public function getSystemSource()
    {
        return $this->apiParas['systemSource'];
    }

    public function setSystemSource($systemSource)
    {
        $this->apiParas['systemSource'] = $systemSource;

        return $this;
    }
}
