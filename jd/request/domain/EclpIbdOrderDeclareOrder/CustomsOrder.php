<?php

namespace EclpIbdOrderDeclareOrder;

class CustomsOrder
{
    private $params = array();

    function __construct()
    {
        $this->params["@type"] = "com.jd.eclp.isv.Ddomain.so.OrderCustomsParam";
    }

    private $isvUUID;

    public function setIsvUUID($isvUUID)
    {
        $this->params['isvUUID'] = $isvUUID;
    }

    public function getIsvUUID()
    {
        return $this->isvUUID;
    }

    private $isvSource;

    public function setIsvSource($isvSource)
    {
        $this->params['isvSource'] = $isvSource;
    }

    public function getIsvSource()
    {
        return $this->isvSource;
    }

    private $platformId;

    public function setPlatformId($platformId)
    {
        $this->params['platformId'] = $platformId;
    }

    public function getPlatformId()
    {
        return $this->platformId;
    }

    private $platformName;

    public function setPlatformName($platformName)
    {
        $this->params['platformName'] = $platformName;
    }

    public function getPlatformName()
    {
        return $this->platformName;
    }

    private $platformType;

    public function setPlatformType($platformType)
    {
        $this->params['platformType'] = $platformType;
    }

    public function getPlatformType()
    {
        return $this->platformType;
    }

    private $spSoNo;

    public function setSpSoNo($spSoNo)
    {
        $this->params['spSoNo'] = $spSoNo;
    }

    public function getSpSoNo()
    {
        return $this->spSoNo;
    }

    private $deptNo;

    public function setDeptNo($deptNo)
    {
        $this->params['deptNo'] = $deptNo;
    }

    public function getDeptNo()
    {
        return $this->deptNo;
    }

    private $inJdwms;

    public function setInJdwms($inJdwms)
    {
        $this->params['inJdwms'] = $inJdwms;
    }

    public function getInJdwms()
    {
        return $this->inJdwms;
    }

    private $salesPlatformCreateTime;

    public function setSalesPlatformCreateTime($salesPlatformCreateTime)
    {
        $this->params['salesPlatformCreateTime'] = $salesPlatformCreateTime;
    }

    public function getSalesPlatformCreateTime()
    {
        return $this->salesPlatformCreateTime;
    }

    private $venderId;

    public function setVenderId($venderId)
    {
        $this->params['venderId'] = $venderId;
    }

    public function getVenderId()
    {
        return $this->venderId;
    }

    private $venderName;

    public function setVenderName($venderName)
    {
        $this->params['venderName'] = $venderName;
    }

    public function getVenderName()
    {
        return $this->venderName;
    }

    private $consigneeName;

    public function setConsigneeName($consigneeName)
    {
        $this->params['consigneeName'] = $consigneeName;
    }

    public function getConsigneeName()
    {
        return $this->consigneeName;
    }

    private $consigneeMobile;

    public function setConsigneeMobile($consigneeMobile)
    {
        $this->params['consigneeMobile'] = $consigneeMobile;
    }

    public function getConsigneeMobile()
    {
        return $this->consigneeMobile;
    }

    private $consigneePhone;

    public function setConsigneePhone($consigneePhone)
    {
        $this->params['consigneePhone'] = $consigneePhone;
    }

    public function getConsigneePhone()
    {
        return $this->consigneePhone;
    }

    private $consigneeEmail;

    public function setConsigneeEmail($consigneeEmail)
    {
        $this->params['consigneeEmail'] = $consigneeEmail;
    }

    public function getConsigneeEmail()
    {
        return $this->consigneeEmail;
    }

    private $consigneeAddress;

    public function setConsigneeAddress($consigneeAddress)
    {
        $this->params['consigneeAddress'] = $consigneeAddress;
    }

    public function getConsigneeAddress()
    {
        return $this->consigneeAddress;
    }

    private $consigneePostcode;

    public function setConsigneePostcode($consigneePostcode)
    {
        $this->params['consigneePostcode'] = $consigneePostcode;
    }

    public function getConsigneePostcode()
    {
        return $this->consigneePostcode;
    }

    private $consigneeCountry;

    public function setConsigneeCountry($consigneeCountry)
    {
        $this->params['consigneeCountry'] = $consigneeCountry;
    }

    public function getConsigneeCountry()
    {
        return $this->consigneeCountry;
    }

    private $addressProvince;

    public function setAddressProvince($addressProvince)
    {
        $this->params['addressProvince'] = $addressProvince;
    }

    public function getAddressProvince()
    {
        return $this->addressProvince;
    }

    private $addressCity;

    public function setAddressCity($addressCity)
    {
        $this->params['addressCity'] = $addressCity;
    }

    public function getAddressCity()
    {
        return $this->addressCity;
    }

    private $addressCounty;

    public function setAddressCounty($addressCounty)
    {
        $this->params['addressCounty'] = $addressCounty;
    }

    public function getAddressCounty()
    {
        return $this->addressCounty;
    }

    private $addressTown;

    public function setAddressTown($addressTown)
    {
        $this->params['addressTown'] = $addressTown;
    }

    public function getAddressTown()
    {
        return $this->addressTown;
    }

    private $soType;

    public function setSoType($soType)
    {
        $this->params['soType'] = $soType;
    }

    public function getSoType()
    {
        return $this->soType;
    }

    private $expectDate;

    public function setExpectDate($expectDate)
    {
        $this->params['expectDate'] = $expectDate;
    }

    public function getExpectDate()
    {
        return $this->expectDate;
    }

    private $invoiceTitle;

    public function setInvoiceTitle($invoiceTitle)
    {
        $this->params['invoiceTitle'] = $invoiceTitle;
    }

    public function getInvoiceTitle()
    {
        return $this->invoiceTitle;
    }

    private $invoiceContent;

    public function setInvoiceContent($invoiceContent)
    {
        $this->params['invoiceContent'] = $invoiceContent;
    }

    public function getInvoiceContent()
    {
        return $this->invoiceContent;
    }

    private $declareOrder;

    public function setDeclareOrder($declareOrder)
    {
        $this->params['declareOrder'] = $declareOrder;
    }

    public function getDeclareOrder()
    {
        return $this->declareOrder;
    }

    private $ccProvider;

    public function setCcProvider($ccProvider)
    {
        $this->params['ccProvider'] = $ccProvider;
    }

    public function getCcProvider()
    {
        return $this->ccProvider;
    }

    private $ccProviderName;

    public function setCcProviderName($ccProviderName)
    {
        $this->params['ccProviderName'] = $ccProviderName;
    }

    public function getCcProviderName()
    {
        return $this->ccProviderName;
    }

    private $postType;

    public function setPostType($postType)
    {
        $this->params['postType'] = $postType;
    }

    public function getPostType()
    {
        return $this->postType;
    }

    private $pattern;

    public function setPattern($pattern)
    {
        $this->params['pattern'] = $pattern;
    }

    public function getPattern()
    {
        return $this->pattern;
    }

    private $customs;

    public function setCustoms($customs)
    {
        $this->params['customs'] = $customs;
    }

    public function getCustoms()
    {
        return $this->customs;
    }

    private $warehouseNo;

    public function setWarehouseNo($warehouseNo)
    {
        $this->params['warehouseNo'] = $warehouseNo;
    }

    public function getWarehouseNo()
    {
        return $this->warehouseNo;
    }

    private $ebpCode;

    public function setEbpCode($ebpCode)
    {
        $this->params['ebpCode'] = $ebpCode;
    }

    public function getEbpCode()
    {
        return $this->ebpCode;
    }

    private $ebpName;

    public function setEbpName($ebpName)
    {
        $this->params['ebpName'] = $ebpName;
    }

    public function getEbpName()
    {
        return $this->ebpName;
    }

    private $ebcCode;

    public function setEbcCode($ebcCode)
    {
        $this->params['ebcCode'] = $ebcCode;
    }

    public function getEbcCode()
    {
        return $this->ebcCode;
    }

    private $ebcName;

    public function setEbcName($ebcName)
    {
        $this->params['ebcName'] = $ebcName;
    }

    public function getEbcName()
    {
        return $this->ebcName;
    }

    private $delivery;

    public function setDelivery($delivery)
    {
        $this->params['delivery'] = $delivery;
    }

    public function getDelivery()
    {
        return $this->delivery;
    }

    private $discount;

    public function setDiscount($discount)
    {
        $this->params['discount'] = $discount;
    }

    public function getDiscount()
    {
        return $this->discount;
    }

    private $discountNote;

    public function setDiscountNote($discountNote)
    {
        $this->params['discountNote'] = $discountNote;
    }

    public function getDiscountNote()
    {
        return $this->discountNote;
    }

    private $istax;

    public function setIstax($istax)
    {
        $this->params['istax'] = $istax;
    }

    public function getIstax()
    {
        return $this->istax;
    }

    private $taxTotal;

    public function setTaxTotal($taxTotal)
    {
        $this->params['taxTotal'] = $taxTotal;
    }

    public function getTaxTotal()
    {
        return $this->taxTotal;
    }

    private $freight;

    public function setFreight($freight)
    {
        $this->params['freight'] = $freight;
    }

    public function getFreight()
    {
        return $this->freight;
    }

    private $otherPrice;

    public function setOtherPrice($otherPrice)
    {
        $this->params['otherPrice'] = $otherPrice;
    }

    public function getOtherPrice()
    {
        return $this->otherPrice;
    }

    private $goodsValue;

    public function setGoodsValue($goodsValue)
    {
        $this->params['goodsValue'] = $goodsValue;
    }

    public function getGoodsValue()
    {
        return $this->goodsValue;
    }

    private $weight;

    public function setWeight($weight)
    {
        $this->params['weight'] = $weight;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    private $netWeight;

    public function setNetWeight($netWeight)
    {
        $this->params['netWeight'] = $netWeight;
    }

    public function getNetWeight()
    {
        return $this->netWeight;
    }

    private $batchNumbers;

    public function setBatchNumbers($batchNumbers)
    {
        $this->params['batchNumbers'] = $batchNumbers;
    }

    public function getBatchNumbers()
    {
        return $this->batchNumbers;
    }

    private $buyerRegNo;

    public function setBuyerRegNo($buyerRegNo)
    {
        $this->params['buyerRegNo'] = $buyerRegNo;
    }

    public function getBuyerRegNo()
    {
        return $this->buyerRegNo;
    }

    private $buyerPhone;

    public function setBuyerPhone($buyerPhone)
    {
        $this->params['buyerPhone'] = $buyerPhone;
    }

    public function getBuyerPhone()
    {
        return $this->buyerPhone;
    }

    private $buyerName;

    public function setBuyerName($buyerName)
    {
        $this->params['buyerName'] = $buyerName;
    }

    public function getBuyerName()
    {
        return $this->buyerName;
    }

    private $buyerIdType;

    public function setBuyerIdType($buyerIdType)
    {
        $this->params['buyerIdType'] = $buyerIdType;
    }

    public function getBuyerIdType()
    {
        return $this->buyerIdType;
    }

    private $buyerIdNumber;

    public function setBuyerIdNumber($buyerIdNumber)
    {
        $this->params['buyerIdNumber'] = $buyerIdNumber;
    }

    public function getBuyerIdNumber()
    {
        return $this->buyerIdNumber;
    }

    private $senderName;

    public function setSenderName($senderName)
    {
        $this->params['senderName'] = $senderName;
    }

    public function getSenderName()
    {
        return $this->senderName;
    }

    private $senderCompanyName;

    public function setSenderCompanyName($senderCompanyName)
    {
        $this->params['senderCompanyName'] = $senderCompanyName;
    }

    public function getSenderCompanyName()
    {
        return $this->senderCompanyName;
    }

    private $senderCountry;

    public function setSenderCountry($senderCountry)
    {
        $this->params['senderCountry'] = $senderCountry;
    }

    public function getSenderCountry()
    {
        return $this->senderCountry;
    }

    private $senderZip;

    public function setSenderZip($senderZip)
    {
        $this->params['senderZip'] = $senderZip;
    }

    public function getSenderZip()
    {
        return $this->senderZip;
    }

    private $senderCity;

    public function setSenderCity($senderCity)
    {
        $this->params['senderCity'] = $senderCity;
    }

    public function getSenderCity()
    {
        return $this->senderCity;
    }

    private $senderProvince;

    public function setSenderProvince($senderProvince)
    {
        $this->params['senderProvince'] = $senderProvince;
    }

    public function getSenderProvince()
    {
        return $this->senderProvince;
    }

    private $senderTel;

    public function setSenderTel($senderTel)
    {
        $this->params['senderTel'] = $senderTel;
    }

    public function getSenderTel()
    {
        return $this->senderTel;
    }

    private $senderAddr;

    public function setSenderAddr($senderAddr)
    {
        $this->params['senderAddr'] = $senderAddr;
    }

    public function getSenderAddr()
    {
        return $this->senderAddr;
    }

    private $customsRemark;

    public function setCustomsRemark($customsRemark)
    {
        $this->params['customsRemark'] = $customsRemark;
    }

    public function getCustomsRemark()
    {
        return $this->customsRemark;
    }

    private $declarePaymentList;

    public function setDeclarePaymentList($declarePaymentList)
    {
        $this->params['declarePaymentList'] = $declarePaymentList;
    }

    public function getDeclarePaymentList()
    {
        return $this->declarePaymentList;
    }

    private $paymentType;

    public function setPaymentType($paymentType)
    {
        $this->params['paymentType'] = $paymentType;
    }

    public function getPaymentType()
    {
        return $this->paymentType;
    }

    private $payCode;

    public function setPayCode($payCode)
    {
        $this->params['payCode'] = $payCode;
    }

    public function getPayCode()
    {
        return $this->payCode;
    }

    private $payName;

    public function setPayName($payName)
    {
        $this->params['payName'] = $payName;
    }

    public function getPayName()
    {
        return $this->payName;
    }

    private $payTransactionId;

    public function setPayTransactionId($payTransactionId)
    {
        $this->params['payTransactionId'] = $payTransactionId;
    }

    public function getPayTransactionId()
    {
        return $this->payTransactionId;
    }

    private $currency;

    public function setCurrency($currency)
    {
        $this->params['currency'] = $currency;
    }

    public function getCurrency()
    {
        return $this->currency;
    }

    private $paymentConfirmTime;

    public function setPaymentConfirmTime($paymentConfirmTime)
    {
        $this->params['paymentConfirmTime'] = $paymentConfirmTime;
    }

    public function getPaymentConfirmTime()
    {
        return $this->paymentConfirmTime;
    }

    private $shouldPay;

    public function setShouldPay($shouldPay)
    {
        $this->params['shouldPay'] = $shouldPay;
    }

    public function getShouldPay()
    {
        return $this->shouldPay;
    }

    private $receiveNo;

    public function setReceiveNo($receiveNo)
    {
        $this->params['receiveNo'] = $receiveNo;
    }

    public function getReceiveNo()
    {
        return $this->receiveNo;
    }

    private $payRemark;

    public function setPayRemark($payRemark)
    {
        $this->params['payRemark'] = $payRemark;
    }

    public function getPayRemark()
    {
        return $this->payRemark;
    }

    private $declareWaybill;

    public function setDeclareWaybill($declareWaybill)
    {
        $this->params['declareWaybill'] = $declareWaybill;
    }

    public function getDeclareWaybill()
    {
        return $this->declareWaybill;
    }

    private $logisticsCode;

    public function setLogisticsCode($logisticsCode)
    {
        $this->params['logisticsCode'] = $logisticsCode;
    }

    public function getLogisticsCode()
    {
        return $this->logisticsCode;
    }

    private $logisticsName;

    public function setLogisticsName($logisticsName)
    {
        $this->params['logisticsName'] = $logisticsName;
    }

    public function getLogisticsName()
    {
        return $this->logisticsName;
    }

    private $bdOwnerNo;

    public function setBdOwnerNo($bdOwnerNo)
    {
        $this->params['bdOwnerNo'] = $bdOwnerNo;
    }

    public function getBdOwnerNo()
    {
        return $this->bdOwnerNo;
    }

    private $logisticsNo;

    public function setLogisticsNo($logisticsNo)
    {
        $this->params['logisticsNo'] = $logisticsNo;
    }

    public function getLogisticsNo()
    {
        return $this->logisticsNo;
    }

    private $packNo;

    public function setPackNo($packNo)
    {
        $this->params['packNo'] = $packNo;
    }

    public function getPackNo()
    {
        return $this->packNo;
    }

    private $logisticsRemark;

    public function setLogisticsRemark($logisticsRemark)
    {
        $this->params['logisticsRemark'] = $logisticsRemark;
    }

    public function getLogisticsRemark()
    {
        return $this->logisticsRemark;
    }

    private $isDelivery;

    public function setIsDelivery($isDelivery)
    {
        $this->params['isDelivery'] = $isDelivery;
    }

    public function getIsDelivery()
    {
        return $this->isDelivery;
    }

    private $receivable;

    public function setReceivable($receivable)
    {
        $this->params['receivable'] = $receivable;
    }

    public function getReceivable()
    {
        return $this->receivable;
    }

    private $consigneeRemark;

    public function setConsigneeRemark($consigneeRemark)
    {
        $this->params['consigneeRemark'] = $consigneeRemark;
    }

    public function getConsigneeRemark()
    {
        return $this->consigneeRemark;
    }

    private $insuredPriceFlag;

    public function setInsuredPriceFlag($insuredPriceFlag)
    {
        $this->params['insuredPriceFlag'] = $insuredPriceFlag;
    }

    public function getInsuredPriceFlag()
    {
        return $this->insuredPriceFlag;
    }

    private $insuredValue;

    public function setInsuredValue($insuredValue)
    {
        $this->params['insuredValue'] = $insuredValue;
    }

    public function getInsuredValue()
    {
        return $this->insuredValue;
    }

    private $insuredFee;

    public function setInsuredFee($insuredFee)
    {
        $this->params['insuredFee'] = $insuredFee;
    }

    public function getInsuredFee()
    {
        return $this->insuredFee;
    }

    private $shopNo;

    public function setShopNo($shopNo)
    {
        $this->params['shopNo'] = $shopNo;
    }

    public function getShopNo()
    {
        return $this->shopNo;
    }

    private $isSupervise;

    public function setIsSupervise($isSupervise)
    {
        $this->params['isSupervise'] = $isSupervise;
    }

    public function getIsSupervise()
    {
        return $this->isSupervise;
    }

    private $initalRequest;

    public function setInitalRequest($initalRequest)
    {
        $this->params['initalRequest'] = $initalRequest;
    }

    public function getInitalRequest()
    {
        return $this->initalRequest;
    }

    private $initalResponse;

    public function setInitalResponse($initalResponse)
    {
        $this->params['initalResponse'] = $initalResponse;
    }

    public function getInitalResponse()
    {
        return $this->initalResponse;
    }

    private $payTransactionIdYh;

    public function setPayTransactionIdYh($payTransactionIdYh)
    {
        $this->params['payTransactionIdYh'] = $payTransactionIdYh;
    }

    public function getPayTransactionIdYh()
    {
        return $this->payTransactionIdYh;
    }

    private $isvParentId;

    public function setIsvParentId($isvParentId)
    {
        $this->params['isvParentId'] = $isvParentId;
    }

    public function getIsvParentId()
    {
        return $this->isvParentId;
    }

    private $isvOrderIdList;

    public function setIsvOrderIdList($isvOrderIdList)
    {
        $this->params['isvOrderIdList'] = $isvOrderIdList;
    }

    public function getIsvOrderIdList()
    {
        return $this->isvOrderIdList;
    }

    private $totalAmount;

    public function setTotalAmount($totalAmount)
    {
        $this->params['totalAmount'] = $totalAmount;
    }

    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    private $verDept;

    public function setVerDept($verDept)
    {
        $this->params['verDept'] = $verDept;
    }

    public function getVerDept()
    {
        return $this->verDept;
    }

    private $payType;

    public function setPayType($payType)
    {
        $this->params['payType'] = $payType;
    }

    public function getPayType()
    {
        return $this->payType;
    }

    private $recpAccount;

    public function setRecpAccount($recpAccount)
    {
        $this->params['recpAccount'] = $recpAccount;
    }

    public function getRecpAccount()
    {
        return $this->recpAccount;
    }

    private $recpCode;

    public function setRecpCode($recpCode)
    {
        $this->params['recpCode'] = $recpCode;
    }

    public function getRecpCode()
    {
        return $this->recpCode;
    }

    private $recpName;

    public function setRecpName($recpName)
    {
        $this->params['recpName'] = $recpName;
    }

    public function getRecpName()
    {
        return $this->recpName;
    }

    private $consNameEN;

    public function setConsNameEN($consNameEN)
    {
        $this->params['consNameEN'] = $consNameEN;
    }

    public function getConsNameEN()
    {
        return $this->consNameEN;
    }

    private $consAddressEN;

    public function setConsAddressEN($consAddressEN)
    {
        $this->params['consAddressEN'] = $consAddressEN;
    }

    public function getConsAddressEN()
    {
        return $this->consAddressEN;
    }

    private $senderNameEN;

    public function setSenderNameEN($senderNameEN)
    {
        $this->params['senderNameEN'] = $senderNameEN;
    }

    public function getSenderNameEN()
    {
        return $this->senderNameEN;
    }

    private $senderCityEN;

    public function setSenderCityEN($senderCityEN)
    {
        $this->params['senderCityEN'] = $senderCityEN;
    }

    public function getSenderCityEN()
    {
        return $this->senderCityEN;
    }

    private $senderAddrEN;

    public function setSenderAddrEN($senderAddrEN)
    {
        $this->params['senderAddrEN'] = $senderAddrEN;
    }

    public function getSenderAddrEN()
    {
        return $this->senderAddrEN;
    }

    private $consigneeIdType;

    public function setConsigneeIdType($consigneeIdType)
    {
        $this->params['consigneeIdType'] = $consigneeIdType;
    }

    public function getConsigneeIdType()
    {
        return $this->consigneeIdType;
    }

    private $wrapType;

    public function setWrapType($wrapType)
    {
        $this->params['wrapType'] = $wrapType;
    }

    public function getWrapType()
    {
        return $this->wrapType;
    }

    function getInstance()
    {
        return $this->params;
    }
}
