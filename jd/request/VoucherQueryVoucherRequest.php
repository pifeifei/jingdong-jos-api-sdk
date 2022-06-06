<?php

class VoucherQueryVoucherRequest
{
    private $apiParas = array();

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

    private $version;

    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function getVersion()
    {
        return $this->version;
    }
                                                                                                                                    private $orderType;

    public function setOrderType($orderType)
    {
        $this->orderType = $orderType;
         $this->apiParas["orderType"] = $orderType;
    }

    public function getOrderType()
    {
        return $this->orderType;
    }

                                                        private $businessNo;

    public function setBusinessNo($businessNo)
    {
        $this->businessNo = $businessNo;
         $this->apiParas["businessNo"] = $businessNo;
    }

    public function getBusinessNo()
    {
        return $this->businessNo;
    }

                                                        private $sellerNo;

    public function setSellerNo($sellerNo)
    {
        $this->sellerNo = $sellerNo;
         $this->apiParas["sellerNo"] = $sellerNo;
    }

    public function getSellerNo()
    {
        return $this->sellerNo;
    }

                                                        private $systemSource;

    public function setSystemSource($systemSource)
    {
        $this->systemSource = $systemSource;
         $this->apiParas["systemSource"] = $systemSource;
    }

    public function getSystemSource()
    {
        return $this->systemSource;
    }
}
