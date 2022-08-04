<?php

namespace ACES\Request;

class EclpOrderAsynAddOrderRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.eclp.order.asynAddOrder';
    }

    public function check()
    {
    }

    public function getIsvUUID()
    {
        return $this->apiParas['isvUUID'];
    }

    public function setIsvUUID($isvUUID)
    {
        $this->apiParas['isvUUID'] = $isvUUID;

        return $this;
    }

    public function getIsvSource()
    {
        return $this->apiParas['isvSource'];
    }

    public function setIsvSource($isvSource)
    {
        $this->apiParas['isvSource'] = $isvSource;

        return $this;
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

    public function getBdOwnerNo()
    {
        return $this->apiParas['bdOwnerNo'];
    }

    public function setBdOwnerNo($bdOwnerNo)
    {
        $this->apiParas['bdOwnerNo'] = $bdOwnerNo;

        return $this;
    }

    public function getDepartmentNo()
    {
        return $this->apiParas['departmentNo'];
    }

    public function setDepartmentNo($departmentNo)
    {
        $this->apiParas['departmentNo'] = $departmentNo;

        return $this;
    }

    public function getWarehouseNo()
    {
        return $this->apiParas['warehouseNo'];
    }

    public function setWarehouseNo($warehouseNo)
    {
        $this->apiParas['warehouseNo'] = $warehouseNo;

        return $this;
    }

    public function getShipperNo()
    {
        return $this->apiParas['shipperNo'];
    }

    public function setShipperNo($shipperNo)
    {
        $this->apiParas['shipperNo'] = $shipperNo;

        return $this;
    }

    public function getSalesPlatformOrderNo()
    {
        return $this->apiParas['salesPlatformOrderNo'];
    }

    public function setSalesPlatformOrderNo($salesPlatformOrderNo)
    {
        $this->apiParas['salesPlatformOrderNo'] = $salesPlatformOrderNo;

        return $this;
    }

    public function getSalePlatformSource()
    {
        return $this->apiParas['salePlatformSource'];
    }

    public function setSalePlatformSource($salePlatformSource)
    {
        $this->apiParas['salePlatformSource'] = $salePlatformSource;

        return $this;
    }

    public function getSalesPlatformCreateTime()
    {
        return $this->apiParas['salesPlatformCreateTime'];
    }

    public function setSalesPlatformCreateTime($salesPlatformCreateTime)
    {
        $this->apiParas['salesPlatformCreateTime'] = $salesPlatformCreateTime;

        return $this;
    }

    public function getSoType()
    {
        return $this->apiParas['soType'];
    }

    public function setSoType($soType)
    {
        $this->apiParas['soType'] = $soType;

        return $this;
    }

    public function getConsigneeName()
    {
        return $this->apiParas['consigneeName'];
    }

    public function setConsigneeName($consigneeName)
    {
        $this->apiParas['consigneeName'] = $consigneeName;

        return $this;
    }

    public function getConsigneeMobile()
    {
        return $this->apiParas['consigneeMobile'];
    }

    public function setConsigneeMobile($consigneeMobile)
    {
        $this->apiParas['consigneeMobile'] = $consigneeMobile;

        return $this;
    }

    public function getConsigneePhone()
    {
        return $this->apiParas['consigneePhone'];
    }

    public function setConsigneePhone($consigneePhone)
    {
        $this->apiParas['consigneePhone'] = $consigneePhone;

        return $this;
    }

    public function getConsigneeEmail()
    {
        return $this->apiParas['consigneeEmail'];
    }

    public function setConsigneeEmail($consigneeEmail)
    {
        $this->apiParas['consigneeEmail'] = $consigneeEmail;

        return $this;
    }

    public function getExpectDate()
    {
        return $this->apiParas['expectDate'];
    }

    public function setExpectDate($expectDate)
    {
        $this->apiParas['expectDate'] = $expectDate;

        return $this;
    }

    public function getAddressProvince()
    {
        return $this->apiParas['addressProvince'];
    }

    public function setAddressProvince($addressProvince)
    {
        $this->apiParas['addressProvince'] = $addressProvince;

        return $this;
    }

    public function getAddressCity()
    {
        return $this->apiParas['addressCity'];
    }

    public function setAddressCity($addressCity)
    {
        $this->apiParas['addressCity'] = $addressCity;

        return $this;
    }

    public function getAddressCounty()
    {
        return $this->apiParas['addressCounty'];
    }

    public function setAddressCounty($addressCounty)
    {
        $this->apiParas['addressCounty'] = $addressCounty;

        return $this;
    }

    public function getAddressTown()
    {
        return $this->apiParas['addressTown'];
    }

    public function setAddressTown($addressTown)
    {
        $this->apiParas['addressTown'] = $addressTown;

        return $this;
    }

    public function getConsigneeAddress()
    {
        return $this->apiParas['consigneeAddress'];
    }

    public function setConsigneeAddress($consigneeAddress)
    {
        $this->apiParas['consigneeAddress'] = $consigneeAddress;

        return $this;
    }

    public function getConsigneePostcode()
    {
        return $this->apiParas['consigneePostcode'];
    }

    public function setConsigneePostcode($consigneePostcode)
    {
        $this->apiParas['consigneePostcode'] = $consigneePostcode;

        return $this;
    }

    public function getReceivable()
    {
        return $this->apiParas['receivable'];
    }

    public function setReceivable($receivable)
    {
        $this->apiParas['receivable'] = $receivable;

        return $this;
    }

    public function getConsigneeRemark()
    {
        return $this->apiParas['consigneeRemark'];
    }

    public function setConsigneeRemark($consigneeRemark)
    {
        $this->apiParas['consigneeRemark'] = $consigneeRemark;

        return $this;
    }

    public function getOrderMark()
    {
        return $this->apiParas['orderMark'];
    }

    public function setOrderMark($orderMark)
    {
        $this->apiParas['orderMark'] = $orderMark;

        return $this;
    }

    public function getThirdWayBill()
    {
        return $this->apiParas['thirdWayBill'];
    }

    public function setThirdWayBill($thirdWayBill)
    {
        $this->apiParas['thirdWayBill'] = $thirdWayBill;

        return $this;
    }

    public function getPackageMark()
    {
        return $this->apiParas['packageMark'];
    }

    public function setPackageMark($packageMark)
    {
        $this->apiParas['packageMark'] = $packageMark;

        return $this;
    }

    public function getBusinessType()
    {
        return $this->apiParas['businessType'];
    }

    public function setBusinessType($businessType)
    {
        $this->apiParas['businessType'] = $businessType;

        return $this;
    }

    public function getDestinationCode()
    {
        return $this->apiParas['destinationCode'];
    }

    public function setDestinationCode($destinationCode)
    {
        $this->apiParas['destinationCode'] = $destinationCode;

        return $this;
    }

    public function getDestinationName()
    {
        return $this->apiParas['destinationName'];
    }

    public function setDestinationName($destinationName)
    {
        $this->apiParas['destinationName'] = $destinationName;

        return $this;
    }

    public function getSendWebsiteCode()
    {
        return $this->apiParas['sendWebsiteCode'];
    }

    public function setSendWebsiteCode($sendWebsiteCode)
    {
        $this->apiParas['sendWebsiteCode'] = $sendWebsiteCode;

        return $this;
    }

    public function getSendWebsiteName()
    {
        return $this->apiParas['sendWebsiteName'];
    }

    public function setSendWebsiteName($sendWebsiteName)
    {
        $this->apiParas['sendWebsiteName'] = $sendWebsiteName;

        return $this;
    }

    public function getSendMode()
    {
        return $this->apiParas['sendMode'];
    }

    public function setSendMode($sendMode)
    {
        $this->apiParas['sendMode'] = $sendMode;

        return $this;
    }

    public function getReceiveMode()
    {
        return $this->apiParas['receiveMode'];
    }

    public function setReceiveMode($receiveMode)
    {
        $this->apiParas['receiveMode'] = $receiveMode;

        return $this;
    }

    public function getAppointDeliveryTime()
    {
        return $this->apiParas['appointDeliveryTime'];
    }

    public function setAppointDeliveryTime($appointDeliveryTime)
    {
        $this->apiParas['appointDeliveryTime'] = $appointDeliveryTime;

        return $this;
    }

    public function getInsuredPriceFlag()
    {
        return $this->apiParas['insuredPriceFlag'];
    }

    public function setInsuredPriceFlag($insuredPriceFlag)
    {
        $this->apiParas['insuredPriceFlag'] = $insuredPriceFlag;

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

    public function getInsuredFee()
    {
        return $this->apiParas['insuredFee'];
    }

    public function setInsuredFee($insuredFee)
    {
        $this->apiParas['insuredFee'] = $insuredFee;

        return $this;
    }

    public function getThirdPayment()
    {
        return $this->apiParas['thirdPayment'];
    }

    public function setThirdPayment($thirdPayment)
    {
        $this->apiParas['thirdPayment'] = $thirdPayment;

        return $this;
    }

    public function getMonthlyAccount()
    {
        return $this->apiParas['monthlyAccount'];
    }

    public function setMonthlyAccount($monthlyAccount)
    {
        $this->apiParas['monthlyAccount'] = $monthlyAccount;

        return $this;
    }

    public function getShipment()
    {
        return $this->apiParas['shipment'];
    }

    public function setShipment($shipment)
    {
        $this->apiParas['shipment'] = $shipment;

        return $this;
    }

    public function getSellerRemark()
    {
        return $this->apiParas['sellerRemark'];
    }

    public function setSellerRemark($sellerRemark)
    {
        $this->apiParas['sellerRemark'] = $sellerRemark;

        return $this;
    }

    public function getThirdSite()
    {
        return $this->apiParas['thirdSite'];
    }

    public function setThirdSite($thirdSite)
    {
        $this->apiParas['thirdSite'] = $thirdSite;

        return $this;
    }

    public function getCustomsStatus()
    {
        return $this->apiParas['customsStatus'];
    }

    public function setCustomsStatus($customsStatus)
    {
        $this->apiParas['customsStatus'] = $customsStatus;

        return $this;
    }

    public function getCustomerName()
    {
        return $this->apiParas['customerName'];
    }

    public function setCustomerName($customerName)
    {
        $this->apiParas['customerName'] = $customerName;

        return $this;
    }

    public function getInvoiceTitle()
    {
        return $this->apiParas['invoiceTitle'];
    }

    public function setInvoiceTitle($invoiceTitle)
    {
        $this->apiParas['invoiceTitle'] = $invoiceTitle;

        return $this;
    }

    public function getInvoiceContent()
    {
        return $this->apiParas['invoiceContent'];
    }

    public function setInvoiceContent($invoiceContent)
    {
        $this->apiParas['invoiceContent'] = $invoiceContent;

        return $this;
    }

    public function getGoodsType()
    {
        return $this->apiParas['goodsType'];
    }

    public function setGoodsType($goodsType)
    {
        $this->apiParas['goodsType'] = $goodsType;

        return $this;
    }

    public function getGoodsLevel()
    {
        return $this->apiParas['goodsLevel'];
    }

    public function setGoodsLevel($goodsLevel)
    {
        $this->apiParas['goodsLevel'] = $goodsLevel;

        return $this;
    }

    public function getCustomsPort()
    {
        return $this->apiParas['customsPort'];
    }

    public function setCustomsPort($customsPort)
    {
        $this->apiParas['customsPort'] = $customsPort;

        return $this;
    }

    public function getBillType()
    {
        return $this->apiParas['billType'];
    }

    public function setBillType($billType)
    {
        $this->apiParas['billType'] = $billType;

        return $this;
    }

    public function getOrderPrice()
    {
        return $this->apiParas['orderPrice'];
    }

    public function setOrderPrice($orderPrice)
    {
        $this->apiParas['orderPrice'] = $orderPrice;

        return $this;
    }

    public function getOrderBatchNo()
    {
        return $this->apiParas['orderBatchNo'];
    }

    public function setOrderBatchNo($orderBatchNo)
    {
        $this->apiParas['orderBatchNo'] = $orderBatchNo;

        return $this;
    }

    public function getOrderBatchQty()
    {
        return $this->apiParas['orderBatchQty'];
    }

    public function setOrderBatchQty($orderBatchQty)
    {
        $this->apiParas['orderBatchQty'] = $orderBatchQty;

        return $this;
    }

    public function getTransactionSource()
    {
        return $this->apiParas['transactionSource'];
    }

    public function setTransactionSource($transactionSource)
    {
        $this->apiParas['transactionSource'] = $transactionSource;

        return $this;
    }

    public function getCountrycode()
    {
        return $this->apiParas['countrycode'];
    }

    public function setCountrycode($countrycode)
    {
        $this->apiParas['countrycode'] = $countrycode;

        return $this;
    }

    public function getGoodsNo()
    {
        return $this->apiParas['goodsNo'];
    }

    public function setGoodsNo($goodsNo)
    {
        $this->apiParas['goodsNo'] = $goodsNo;

        return $this;
    }

    public function getPrice()
    {
        return $this->apiParas['price'];
    }

    public function setPrice($price)
    {
        $this->apiParas['price'] = $price;

        return $this;
    }

    public function getQuantity()
    {
        return $this->apiParas['quantity'];
    }

    public function setQuantity($quantity)
    {
        $this->apiParas['quantity'] = $quantity;

        return $this;
    }

    public function getSerialNo()
    {
        return $this->apiParas['serialNo'];
    }

    public function setSerialNo($serialNo)
    {
        $this->apiParas['serialNo'] = $serialNo;

        return $this;
    }

    public function getPrintName()
    {
        return $this->apiParas['printName'];
    }

    public function setPrintName($printName)
    {
        $this->apiParas['printName'] = $printName;

        return $this;
    }
}
