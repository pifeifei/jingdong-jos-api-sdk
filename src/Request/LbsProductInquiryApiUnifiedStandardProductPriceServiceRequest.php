<?php

namespace ACES\Request;


class LbsProductInquiryApiUnifiedStandardProductPriceServiceRequest
{
    private $apiParas = array();
    private $version;
    private $startProvinceCode;
    private $weight;
    private $productCode;
    private $insuredValue;
    private $expDate;
    private $qty;
    private $isCodService;
    private $tVolume;
    private $startCityCode;
    private $destCityCode;
    private $isReceiptCollectService;
    private $pin;
    private $warmLayerType;
    private $customerCode;
    private $startCountyCode;
    private $volume;
    private $isInsured;
    private $tWeight;
    private $campusDeliver;
    private $receiptCollectType;
    private $codMoney;
    private $destProvinceCode;
    private $destCountyCode;
    private $startDetailAddress;
    private $destDetailAddress;
    private $isNeedConvertJDAddress;

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

    public function getVersion()
    {
        return $this->version;
    }

    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function getStartProvinceCode()
    {
        return $this->startProvinceCode;
    }

    public function setStartProvinceCode($startProvinceCode)
    {
        $this->startProvinceCode = $startProvinceCode;
        $this->apiParas["startProvinceCode"] = $startProvinceCode;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;
        $this->apiParas["weight"] = $weight;
    }

    public function getProductCode()
    {
        return $this->productCode;
    }

    public function setProductCode($productCode)
    {
        $this->productCode = $productCode;
        $this->apiParas["productCode"] = $productCode;
    }

    public function getInsuredValue()
    {
        return $this->insuredValue;
    }

    public function setInsuredValue($insuredValue)
    {
        $this->insuredValue = $insuredValue;
        $this->apiParas["insuredValue"] = $insuredValue;
    }

    public function getExpDate()
    {
        return $this->expDate;
    }

    public function setExpDate($expDate)
    {
        $this->expDate = $expDate;
        $this->apiParas["expDate"] = $expDate;
    }

    public function getQty()
    {
        return $this->qty;
    }

    public function setQty($qty)
    {
        $this->qty = $qty;
        $this->apiParas["qty"] = $qty;
    }

    public function getIsCodService()
    {
        return $this->isCodService;
    }

    public function setIsCodService($isCodService)
    {
        $this->isCodService = $isCodService;
        $this->apiParas["isCodService"] = $isCodService;
    }

    public function getTVolume()
    {
        return $this->tVolume;
    }

    public function setTVolume($tVolume)
    {
        $this->tVolume = $tVolume;
        $this->apiParas["tVolume"] = $tVolume;
    }

    public function getStartCityCode()
    {
        return $this->startCityCode;
    }

    public function setStartCityCode($startCityCode)
    {
        $this->startCityCode = $startCityCode;
        $this->apiParas["startCityCode"] = $startCityCode;
    }

    public function getDestCityCode()
    {
        return $this->destCityCode;
    }

    public function setDestCityCode($destCityCode)
    {
        $this->destCityCode = $destCityCode;
        $this->apiParas["destCityCode"] = $destCityCode;
    }

    public function getIsReceiptCollectService()
    {
        return $this->isReceiptCollectService;
    }

    public function setIsReceiptCollectService($isReceiptCollectService)
    {
        $this->isReceiptCollectService = $isReceiptCollectService;
        $this->apiParas["isReceiptCollectService"] = $isReceiptCollectService;
    }

    public function getPin()
    {
        return $this->pin;
    }

    public function setPin($pin)
    {
        $this->pin = $pin;
        $this->apiParas["pin"] = $pin;
    }

    public function getWarmLayerType()
    {
        return $this->warmLayerType;
    }

    public function setWarmLayerType($warmLayerType)
    {
        $this->warmLayerType = $warmLayerType;
        $this->apiParas["warmLayerType"] = $warmLayerType;
    }

    public function getCustomerCode()
    {
        return $this->customerCode;
    }

    public function setCustomerCode($customerCode)
    {
        $this->customerCode = $customerCode;
        $this->apiParas["customerCode"] = $customerCode;
    }

    public function getStartCountyCode()
    {
        return $this->startCountyCode;
    }

    public function setStartCountyCode($startCountyCode)
    {
        $this->startCountyCode = $startCountyCode;
        $this->apiParas["startCountyCode"] = $startCountyCode;
    }

    public function getVolume()
    {
        return $this->volume;
    }

    public function setVolume($volume)
    {
        $this->volume = $volume;
        $this->apiParas["volume"] = $volume;
    }

    public function getIsInsured()
    {
        return $this->isInsured;
    }

    public function setIsInsured($isInsured)
    {
        $this->isInsured = $isInsured;
        $this->apiParas["isInsured"] = $isInsured;
    }

    public function getTWeight()
    {
        return $this->tWeight;
    }

    public function setTWeight($tWeight)
    {
        $this->tWeight = $tWeight;
        $this->apiParas["tWeight"] = $tWeight;
    }

    public function getCampusDeliver()
    {
        return $this->campusDeliver;
    }

    public function setCampusDeliver($campusDeliver)
    {
        $this->campusDeliver = $campusDeliver;
        $this->apiParas["campusDeliver"] = $campusDeliver;
    }

    public function getReceiptCollectType()
    {
        return $this->receiptCollectType;
    }

    public function setReceiptCollectType($receiptCollectType)
    {
        $this->receiptCollectType = $receiptCollectType;
        $this->apiParas["receiptCollectType"] = $receiptCollectType;
    }

    public function getCodMoney()
    {
        return $this->codMoney;
    }

    public function setCodMoney($codMoney)
    {
        $this->codMoney = $codMoney;
        $this->apiParas["codMoney"] = $codMoney;
    }

    public function getDestProvinceCode()
    {
        return $this->destProvinceCode;
    }

    public function setDestProvinceCode($destProvinceCode)
    {
        $this->destProvinceCode = $destProvinceCode;
        $this->apiParas["destProvinceCode"] = $destProvinceCode;
    }

    public function getDestCountyCode()
    {
        return $this->destCountyCode;
    }

    public function setDestCountyCode($destCountyCode)
    {
        $this->destCountyCode = $destCountyCode;
        $this->apiParas["destCountyCode"] = $destCountyCode;
    }

    public function getStartDetailAddress()
    {
        return $this->startDetailAddress;
    }

    public function setStartDetailAddress($startDetailAddress)
    {
        $this->startDetailAddress = $startDetailAddress;
        $this->apiParas["startDetailAddress"] = $startDetailAddress;
    }

    public function getDestDetailAddress()
    {
        return $this->destDetailAddress;
    }

    public function setDestDetailAddress($destDetailAddress)
    {
        $this->destDetailAddress = $destDetailAddress;
        $this->apiParas["destDetailAddress"] = $destDetailAddress;
    }

    public function getIsNeedConvertJDAddress()
    {
        return $this->isNeedConvertJDAddress;
    }

    public function setIsNeedConvertJDAddress($isNeedConvertJDAddress)
    {
        $this->isNeedConvertJDAddress = $isNeedConvertJDAddress;
        $this->apiParas["isNeedConvertJDAddress"] = $isNeedConvertJDAddress;
    }
}
