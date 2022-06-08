<?php

namespace ACES\Request;

class LbsProductInquiryApiUnifiedStandardProductPriceServiceRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.lbs.product.inquiry.api.UnifiedStandardProductPriceService';
    }

    public function check()
    {
    }

    public function getStartProvinceCode()
    {
        return $this->apiParas['startProvinceCode'];
    }

    public function setStartProvinceCode($startProvinceCode)
    {
        $this->apiParas['startProvinceCode'] = $startProvinceCode;

        return $this;
    }

    public function getWeight()
    {
        return $this->apiParas['weight'];
    }

    public function setWeight($weight)
    {
        $this->apiParas['weight'] = $weight;

        return $this;
    }

    public function getProductCode()
    {
        return $this->apiParas['productCode'];
    }

    public function setProductCode($productCode)
    {
        $this->apiParas['productCode'] = $productCode;

        return $this;
    }

    public function getInsuredValue()
    {
        return $this->apiParas['insuredValue'];
    }

    public function setInsuredValue($insuredValue)
    {
        $this->apiParas['insuredValue'] = $insuredValue;

        return $this;
    }

    public function getExpDate()
    {
        return $this->apiParas['expDate'];
    }

    public function setExpDate($expDate)
    {
        $this->apiParas['expDate'] = $expDate;

        return $this;
    }

    public function getQty()
    {
        return $this->apiParas['qty'];
    }

    public function setQty($qty)
    {
        $this->apiParas['qty'] = $qty;

        return $this;
    }

    public function getIsCodService()
    {
        return $this->apiParas['isCodService'];
    }

    public function setIsCodService($isCodService)
    {
        $this->apiParas['isCodService'] = $isCodService;

        return $this;
    }

    public function getTVolume()
    {
        return $this->apiParas['tVolume'];
    }

    public function setTVolume($tVolume)
    {
        $this->apiParas['tVolume'] = $tVolume;

        return $this;
    }

    public function getStartCityCode()
    {
        return $this->apiParas['startCityCode'];
    }

    public function setStartCityCode($startCityCode)
    {
        $this->apiParas['startCityCode'] = $startCityCode;

        return $this;
    }

    public function getDestCityCode()
    {
        return $this->apiParas['destCityCode'];
    }

    public function setDestCityCode($destCityCode)
    {
        $this->apiParas['destCityCode'] = $destCityCode;

        return $this;
    }

    public function getIsReceiptCollectService()
    {
        return $this->apiParas['isReceiptCollectService'];
    }

    public function setIsReceiptCollectService($isReceiptCollectService)
    {
        $this->apiParas['isReceiptCollectService'] = $isReceiptCollectService;

        return $this;
    }

    public function getPin()
    {
        return $this->apiParas['pin'];
    }

    public function setPin($pin)
    {
        $this->apiParas['pin'] = $pin;

        return $this;
    }

    public function getWarmLayerType()
    {
        return $this->apiParas['warmLayerType'];
    }

    public function setWarmLayerType($warmLayerType)
    {
        $this->apiParas['warmLayerType'] = $warmLayerType;

        return $this;
    }

    public function getCustomerCode()
    {
        return $this->apiParas['customerCode'];
    }

    public function setCustomerCode($customerCode)
    {
        $this->apiParas['customerCode'] = $customerCode;

        return $this;
    }

    public function getStartCountyCode()
    {
        return $this->apiParas['startCountyCode'];
    }

    public function setStartCountyCode($startCountyCode)
    {
        $this->apiParas['startCountyCode'] = $startCountyCode;

        return $this;
    }

    public function getVolume()
    {
        return $this->apiParas['volume'];
    }

    public function setVolume($volume)
    {
        $this->apiParas['volume'] = $volume;

        return $this;
    }

    public function getIsInsured()
    {
        return $this->apiParas['isInsured'];
    }

    public function setIsInsured($isInsured)
    {
        $this->apiParas['isInsured'] = $isInsured;

        return $this;
    }

    public function getTWeight()
    {
        return $this->apiParas['tWeight'];
    }

    public function setTWeight($tWeight)
    {
        $this->apiParas['tWeight'] = $tWeight;

        return $this;
    }

    public function getCampusDeliver()
    {
        return $this->apiParas['campusDeliver'];
    }

    public function setCampusDeliver($campusDeliver)
    {
        $this->apiParas['campusDeliver'] = $campusDeliver;

        return $this;
    }

    public function getReceiptCollectType()
    {
        return $this->apiParas['receiptCollectType'];
    }

    public function setReceiptCollectType($receiptCollectType)
    {
        $this->apiParas['receiptCollectType'] = $receiptCollectType;

        return $this;
    }

    public function getCodMoney()
    {
        return $this->apiParas['codMoney'];
    }

    public function setCodMoney($codMoney)
    {
        $this->apiParas['codMoney'] = $codMoney;

        return $this;
    }

    public function getDestProvinceCode()
    {
        return $this->apiParas['destProvinceCode'];
    }

    public function setDestProvinceCode($destProvinceCode)
    {
        $this->apiParas['destProvinceCode'] = $destProvinceCode;

        return $this;
    }

    public function getDestCountyCode()
    {
        return $this->apiParas['destCountyCode'];
    }

    public function setDestCountyCode($destCountyCode)
    {
        $this->apiParas['destCountyCode'] = $destCountyCode;

        return $this;
    }

    public function getStartDetailAddress()
    {
        return $this->apiParas['startDetailAddress'];
    }

    public function setStartDetailAddress($startDetailAddress)
    {
        $this->apiParas['startDetailAddress'] = $startDetailAddress;

        return $this;
    }

    public function getDestDetailAddress()
    {
        return $this->apiParas['destDetailAddress'];
    }

    public function setDestDetailAddress($destDetailAddress)
    {
        $this->apiParas['destDetailAddress'] = $destDetailAddress;

        return $this;
    }

    public function getIsNeedConvertJDAddress()
    {
        return $this->apiParas['isNeedConvertJDAddress'];
    }

    public function setIsNeedConvertJDAddress($isNeedConvertJDAddress)
    {
        $this->apiParas['isNeedConvertJDAddress'] = $isNeedConvertJDAddress;

        return $this;
    }
}
