<?php

class LbsProductInquiryApiUnifiedStandardProductPriceServiceRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.lbs.product.inquiry.api.UnifiedStandardProductPriceService";
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
                                                                                                                                    private $startProvinceCode;

    public function setStartProvinceCode($startProvinceCode)
    {
        $this->startProvinceCode = $startProvinceCode;
         $this->apiParas["startProvinceCode"] = $startProvinceCode;
    }

    public function getStartProvinceCode()
    {
        return $this->startProvinceCode;
    }

                                                        private $weight;

    public function setWeight($weight)
    {
        $this->weight = $weight;
         $this->apiParas["weight"] = $weight;
    }

    public function getWeight()
    {
        return $this->weight;
    }

                                                        private $productCode;

    public function setProductCode($productCode)
    {
        $this->productCode = $productCode;
         $this->apiParas["productCode"] = $productCode;
    }

    public function getProductCode()
    {
        return $this->productCode;
    }

                                                        private $insuredValue;

    public function setInsuredValue($insuredValue)
    {
        $this->insuredValue = $insuredValue;
         $this->apiParas["insuredValue"] = $insuredValue;
    }

    public function getInsuredValue()
    {
        return $this->insuredValue;
    }

                                                        private $expDate;

    public function setExpDate($expDate)
    {
        $this->expDate = $expDate;
         $this->apiParas["expDate"] = $expDate;
    }

    public function getExpDate()
    {
        return $this->expDate;
    }

                                                        private $qty;

    public function setQty($qty)
    {
        $this->qty = $qty;
         $this->apiParas["qty"] = $qty;
    }

    public function getQty()
    {
        return $this->qty;
    }

                                                        private $isCodService;

    public function setIsCodService($isCodService)
    {
        $this->isCodService = $isCodService;
         $this->apiParas["isCodService"] = $isCodService;
    }

    public function getIsCodService()
    {
        return $this->isCodService;
    }

                                                        private $tVolume;

    public function setTVolume($tVolume)
    {
        $this->tVolume = $tVolume;
         $this->apiParas["tVolume"] = $tVolume;
    }

    public function getTVolume()
    {
        return $this->tVolume;
    }

                                                        private $startCityCode;

    public function setStartCityCode($startCityCode)
    {
        $this->startCityCode = $startCityCode;
         $this->apiParas["startCityCode"] = $startCityCode;
    }

    public function getStartCityCode()
    {
        return $this->startCityCode;
    }

                                                        private $destCityCode;

    public function setDestCityCode($destCityCode)
    {
        $this->destCityCode = $destCityCode;
         $this->apiParas["destCityCode"] = $destCityCode;
    }

    public function getDestCityCode()
    {
        return $this->destCityCode;
    }

                                                        private $isReceiptCollectService;

    public function setIsReceiptCollectService($isReceiptCollectService)
    {
        $this->isReceiptCollectService = $isReceiptCollectService;
         $this->apiParas["isReceiptCollectService"] = $isReceiptCollectService;
    }

    public function getIsReceiptCollectService()
    {
        return $this->isReceiptCollectService;
    }

                                                        private $pin;

    public function setPin($pin)
    {
        $this->pin = $pin;
         $this->apiParas["pin"] = $pin;
    }

    public function getPin()
    {
        return $this->pin;
    }

                                                        private $warmLayerType;

    public function setWarmLayerType($warmLayerType)
    {
        $this->warmLayerType = $warmLayerType;
         $this->apiParas["warmLayerType"] = $warmLayerType;
    }

    public function getWarmLayerType()
    {
        return $this->warmLayerType;
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

                                                        private $startCountyCode;

    public function setStartCountyCode($startCountyCode)
    {
        $this->startCountyCode = $startCountyCode;
         $this->apiParas["startCountyCode"] = $startCountyCode;
    }

    public function getStartCountyCode()
    {
        return $this->startCountyCode;
    }

                                                        private $volume;

    public function setVolume($volume)
    {
        $this->volume = $volume;
         $this->apiParas["volume"] = $volume;
    }

    public function getVolume()
    {
        return $this->volume;
    }

                                                        private $isInsured;

    public function setIsInsured($isInsured)
    {
        $this->isInsured = $isInsured;
         $this->apiParas["isInsured"] = $isInsured;
    }

    public function getIsInsured()
    {
        return $this->isInsured;
    }

                                                        private $tWeight;

    public function setTWeight($tWeight)
    {
        $this->tWeight = $tWeight;
         $this->apiParas["tWeight"] = $tWeight;
    }

    public function getTWeight()
    {
        return $this->tWeight;
    }

                                                        private $campusDeliver;

    public function setCampusDeliver($campusDeliver)
    {
        $this->campusDeliver = $campusDeliver;
         $this->apiParas["campusDeliver"] = $campusDeliver;
    }

    public function getCampusDeliver()
    {
        return $this->campusDeliver;
    }

                                                        private $receiptCollectType;

    public function setReceiptCollectType($receiptCollectType)
    {
        $this->receiptCollectType = $receiptCollectType;
         $this->apiParas["receiptCollectType"] = $receiptCollectType;
    }

    public function getReceiptCollectType()
    {
        return $this->receiptCollectType;
    }

                                                        private $codMoney;

    public function setCodMoney($codMoney)
    {
        $this->codMoney = $codMoney;
         $this->apiParas["codMoney"] = $codMoney;
    }

    public function getCodMoney()
    {
        return $this->codMoney;
    }

                                                        private $destProvinceCode;

    public function setDestProvinceCode($destProvinceCode)
    {
        $this->destProvinceCode = $destProvinceCode;
         $this->apiParas["destProvinceCode"] = $destProvinceCode;
    }

    public function getDestProvinceCode()
    {
        return $this->destProvinceCode;
    }

                                                        private $destCountyCode;

    public function setDestCountyCode($destCountyCode)
    {
        $this->destCountyCode = $destCountyCode;
         $this->apiParas["destCountyCode"] = $destCountyCode;
    }

    public function getDestCountyCode()
    {
        return $this->destCountyCode;
    }

                                                        private $startDetailAddress;

    public function setStartDetailAddress($startDetailAddress)
    {
        $this->startDetailAddress = $startDetailAddress;
         $this->apiParas["startDetailAddress"] = $startDetailAddress;
    }

    public function getStartDetailAddress()
    {
        return $this->startDetailAddress;
    }

                                                        private $destDetailAddress;

    public function setDestDetailAddress($destDetailAddress)
    {
        $this->destDetailAddress = $destDetailAddress;
         $this->apiParas["destDetailAddress"] = $destDetailAddress;
    }

    public function getDestDetailAddress()
    {
        return $this->destDetailAddress;
    }

                                                        private $isNeedConvertJDAddress;

    public function setIsNeedConvertJDAddress($isNeedConvertJDAddress)
    {
        $this->isNeedConvertJDAddress = $isNeedConvertJDAddress;
         $this->apiParas["isNeedConvertJDAddress"] = $isNeedConvertJDAddress;
    }

    public function getIsNeedConvertJDAddress()
    {
        return $this->isNeedConvertJDAddress;
    }
}
