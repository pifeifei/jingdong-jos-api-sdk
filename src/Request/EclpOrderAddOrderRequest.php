<?php

namespace ACES\Request;

class EclpOrderAddOrderRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.eclp.order.addOrder';
    }

    public function check()
    {
    }

    /**
     * isv出库单号（商家出库单号）.
     */
    public function getIsvUUID(): string
    {
        return $this->apiParas['isvUUID'];
    }

    /**
     * isv出库单号（商家出库单号）.
     *
     * @return $this
     */
    public function setIsvUUID(string $isvUUID)
    {
        $this->apiParas['isvUUID'] = $isvUUID;

        return $this;
    }

    /**
     * ISV来源编号，ECLP参数，联系京东业务人员提供.
     *
     * @return int|string
     */
    public function getIsvSource()
    {
        return $this->apiParas['isvSource'];
    }

    /**
     * ISV来源编号，ECLP参数，联系京东业务人员提供.
     *
     * @param int|string $isvSource
     */
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

    public function getGatherCenterName()
    {
        return $this->apiParas['gatherCenterName'];
    }

    public function setGatherCenterName($gatherCenterName)
    {
        $this->apiParas['gatherCenterName'] = $gatherCenterName;

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

    public function getWlyInfo()
    {
        return $this->apiParas['wlyInfo'];
    }

    public function setWlyInfo($wlyInfo)
    {
        $this->apiParas['wlyInfo'] = $wlyInfo;

        return $this;
    }

    public function getCustomerId()
    {
        return $this->apiParas['customerId'];
    }

    public function setCustomerId($customerId)
    {
        $this->apiParas['customerId'] = $customerId;

        return $this;
    }

    public function getUrgency()
    {
        return $this->apiParas['urgency'];
    }

    public function setUrgency($urgency)
    {
        $this->apiParas['urgency'] = $urgency;

        return $this;
    }

    public function getCustomerNo()
    {
        return $this->apiParas['customerNo'];
    }

    public function setCustomerNo($customerNo)
    {
        $this->apiParas['customerNo'] = $customerNo;

        return $this;
    }

    public function getStoreName()
    {
        return $this->apiParas['storeName'];
    }

    public function setStoreName($storeName)
    {
        $this->apiParas['storeName'] = $storeName;

        return $this;
    }

    public function getInvoiceState()
    {
        return $this->apiParas['invoiceState'];
    }

    public function setInvoiceState($invoiceState)
    {
        $this->apiParas['invoiceState'] = $invoiceState;

        return $this;
    }

    public function getInvoiceType()
    {
        return $this->apiParas['invoiceType'];
    }

    public function setInvoiceType($invoiceType)
    {
        $this->apiParas['invoiceType'] = $invoiceType;

        return $this;
    }

    public function getInvoiceNo()
    {
        return $this->apiParas['invoiceNo'];
    }

    public function setInvoiceNo($invoiceNo)
    {
        $this->apiParas['invoiceNo'] = $invoiceNo;

        return $this;
    }

    public function getInvoiceTax()
    {
        return $this->apiParas['invoiceTax'];
    }

    public function setInvoiceTax($invoiceTax)
    {
        $this->apiParas['invoiceTax'] = $invoiceTax;

        return $this;
    }

    public function getBankName()
    {
        return $this->apiParas['bankName'];
    }

    public function setBankName($bankName)
    {
        $this->apiParas['bankName'] = $bankName;

        return $this;
    }

    public function getBankAccount()
    {
        return $this->apiParas['bankAccount'];
    }

    public function setBankAccount($bankAccount)
    {
        $this->apiParas['bankAccount'] = $bankAccount;

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

    public function getPhoneNumber()
    {
        return $this->apiParas['phoneNumber'];
    }

    public function setPhoneNumber($phoneNumber)
    {
        $this->apiParas['phoneNumber'] = $phoneNumber;

        return $this;
    }

    public function getSignType()
    {
        return $this->apiParas['signType'];
    }

    public function setSignType($signType)
    {
        $this->apiParas['signType'] = $signType;

        return $this;
    }

    public function getSignIDCode()
    {
        return $this->apiParas['signIDCode'];
    }

    public function setSignIDCode($signIDCode)
    {
        $this->apiParas['signIDCode'] = $signIDCode;

        return $this;
    }

    public function getSupplierNo()
    {
        return $this->apiParas['supplierNo'];
    }

    public function setSupplierNo($supplierNo)
    {
        $this->apiParas['supplierNo'] = $supplierNo;

        return $this;
    }

    public function getAgingType()
    {
        return $this->apiParas['agingType'];
    }

    public function setAgingType($agingType)
    {
        $this->apiParas['agingType'] = $agingType;

        return $this;
    }

    public function getSellerNote()
    {
        return $this->apiParas['sellerNote'];
    }

    public function setSellerNote($sellerNote)
    {
        $this->apiParas['sellerNote'] = $sellerNote;

        return $this;
    }

    public function getSupervisionCode()
    {
        return $this->apiParas['supervisionCode'];
    }

    public function setSupervisionCode($supervisionCode)
    {
        $this->apiParas['supervisionCode'] = $supervisionCode;

        return $this;
    }

    public function getInvoiceChecker()
    {
        return $this->apiParas['invoiceChecker'];
    }

    public function setInvoiceChecker($invoiceChecker)
    {
        $this->apiParas['invoiceChecker'] = $invoiceChecker;

        return $this;
    }

    public function getPaymentType()
    {
        return $this->apiParas['paymentType'];
    }

    public function setPaymentType($paymentType)
    {
        $this->apiParas['paymentType'] = $paymentType;

        return $this;
    }

    public function getSaleType()
    {
        return $this->apiParas['saleType'];
    }

    public function setSaleType($saleType)
    {
        $this->apiParas['saleType'] = $saleType;

        return $this;
    }

    public function getInStorageNo()
    {
        return $this->apiParas['inStorageNo'];
    }

    public function setInStorageNo($inStorageNo)
    {
        $this->apiParas['inStorageNo'] = $inStorageNo;

        return $this;
    }

    public function getInStorageTime()
    {
        return $this->apiParas['inStorageTime'];
    }

    public function setInStorageTime($inStorageTime)
    {
        $this->apiParas['inStorageTime'] = $inStorageTime;

        return $this;
    }

    public function getInStorageRemark()
    {
        return $this->apiParas['inStorageRemark'];
    }

    public function setInStorageRemark($inStorageRemark)
    {
        $this->apiParas['inStorageRemark'] = $inStorageRemark;

        return $this;
    }

    public function getGrossReturnName()
    {
        return $this->apiParas['grossReturnName'];
    }

    public function setGrossReturnName($grossReturnName)
    {
        $this->apiParas['grossReturnName'] = $grossReturnName;

        return $this;
    }

    public function getGrossReturnPhone()
    {
        return $this->apiParas['grossReturnPhone'];
    }

    public function setGrossReturnPhone($grossReturnPhone)
    {
        $this->apiParas['grossReturnPhone'] = $grossReturnPhone;

        return $this;
    }

    public function getGrossReturnMobile()
    {
        return $this->apiParas['grossReturnMobile'];
    }

    public function setGrossReturnMobile($grossReturnMobile)
    {
        $this->apiParas['grossReturnMobile'] = $grossReturnMobile;

        return $this;
    }

    public function getGrossReturnAddress()
    {
        return $this->apiParas['grossReturnAddress'];
    }

    public function setGrossReturnAddress($grossReturnAddress)
    {
        $this->apiParas['grossReturnAddress'] = $grossReturnAddress;

        return $this;
    }

    public function getIsvPackTypeNo()
    {
        return $this->apiParas['isvPackTypeNo'];
    }

    public function setIsvPackTypeNo($isvPackTypeNo)
    {
        $this->apiParas['isvPackTypeNo'] = $isvPackTypeNo;

        return $this;
    }

    public function getAddrAnalysis()
    {
        return $this->apiParas['addrAnalysis'];
    }

    public function setAddrAnalysis($addrAnalysis)
    {
        $this->apiParas['addrAnalysis'] = $addrAnalysis;

        return $this;
    }

    public function getPrintExtendInfo()
    {
        return $this->apiParas['printExtendInfo'];
    }

    public function setPrintExtendInfo($printExtendInfo)
    {
        $this->apiParas['printExtendInfo'] = $printExtendInfo;

        return $this;
    }

    public function getLogicParam()
    {
        return $this->apiParas['logicParam'];
    }

    public function setLogicParam($logicParam)
    {
        $this->apiParas['logicParam'] = $logicParam;

        return $this;
    }

    public function getCombineNo()
    {
        return $this->apiParas['combineNo'];
    }

    public function setCombineNo($combineNo)
    {
        $this->apiParas['combineNo'] = $combineNo;

        return $this;
    }

    public function getActivationService()
    {
        return $this->apiParas['activationService'];
    }

    public function setActivationService($activationService)
    {
        $this->apiParas['activationService'] = $activationService;

        return $this;
    }

    public function getRandomInspection()
    {
        return $this->apiParas['randomInspection'];
    }

    public function setRandomInspection($randomInspection)
    {
        $this->apiParas['randomInspection'] = $randomInspection;

        return $this;
    }

    public function getVIPDeliWarehouse()
    {
        return $this->apiParas['vIPDeliWarehouse'];
    }

    public function setVIPDeliWarehouse($VIPDeliWarehouse)
    {
        $this->apiParas['VIPDeliWarehouse'] = $VIPDeliWarehouse;

        return $this;
    }

    public function getCustomField()
    {
        return $this->apiParas['customField'];
    }

    public function setCustomField($customField)
    {
        $this->apiParas['customField'] = $customField;

        return $this;
    }

    public function getLongitude()
    {
        return $this->apiParas['longitude'];
    }

    public function setLongitude($longitude)
    {
        $this->apiParas['longitude'] = $longitude;

        return $this;
    }

    public function getLatitude()
    {
        return $this->apiParas['latitude'];
    }

    public function setLatitude($latitude)
    {
        $this->apiParas['latitude'] = $latitude;

        return $this;
    }

    public function getAgingProductType()
    {
        return $this->apiParas['agingProductType'];
    }

    public function setAgingProductType($agingProductType)
    {
        $this->apiParas['agingProductType'] = $agingProductType;

        return $this;
    }

    public function getCrossDockPriority()
    {
        return $this->apiParas['crossDockPriority'];
    }

    public function setCrossDockPriority($crossDockPriority)
    {
        $this->apiParas['crossDockPriority'] = $crossDockPriority;

        return $this;
    }

    public function getIsvCompanyNo()
    {
        return $this->apiParas['isvCompanyNo'];
    }

    public function setIsvCompanyNo($isvCompanyNo)
    {
        $this->apiParas['isvCompanyNo'] = $isvCompanyNo;

        return $this;
    }

    public function getOrderPriority()
    {
        return $this->apiParas['orderPriority'];
    }

    public function setOrderPriority($orderPriority)
    {
        $this->apiParas['orderPriority'] = $orderPriority;

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

    public function getProductCode()
    {
        return $this->apiParas['productCode'];
    }

    public function setProductCode($productCode)
    {
        $this->apiParas['productCode'] = $productCode;

        return $this;
    }

    public function getVehicleType()
    {
        return $this->apiParas['vehicleType'];
    }

    public function setVehicleType($vehicleType)
    {
        $this->apiParas['vehicleType'] = $vehicleType;

        return $this;
    }

    public function getIsvSoType()
    {
        return $this->apiParas['isvSoType'];
    }

    public function setIsvSoType($isvSoType)
    {
        $this->apiParas['isvSoType'] = $isvSoType;

        return $this;
    }

    public function getCheckDelivery()
    {
        return $this->apiParas['checkDelivery'];
    }

    public function setCheckDelivery($checkDelivery)
    {
        $this->apiParas['checkDelivery'] = $checkDelivery;

        return $this;
    }

    public function getIsvSoTypeName()
    {
        return $this->apiParas['isvSoTypeName'];
    }

    public function setIsvSoTypeName($isvSoTypeName)
    {
        $this->apiParas['isvSoTypeName'] = $isvSoTypeName;

        return $this;
    }

    public function getQuarantineCert()
    {
        return $this->apiParas['quarantineCert'];
    }

    public function setQuarantineCert($quarantineCert)
    {
        $this->apiParas['quarantineCert'] = $quarantineCert;

        return $this;
    }

    public function getDeliveryService()
    {
        return $this->apiParas['deliveryService'];
    }

    public function setDeliveryService($deliveryService)
    {
        $this->apiParas['deliveryService'] = $deliveryService;

        return $this;
    }

    public function getSelfDeliverySiteId()
    {
        return $this->apiParas['selfDeliverySiteId'];
    }

    public function setSelfDeliverySiteId($selfDeliverySiteId)
    {
        $this->apiParas['selfDeliverySiteId'] = $selfDeliverySiteId;

        return $this;
    }

    public function getDeliveryIntoWarehouse()
    {
        return $this->apiParas['deliveryIntoWarehouse'];
    }

    public function setDeliveryIntoWarehouse($deliveryIntoWarehouse)
    {
        $this->apiParas['deliveryIntoWarehouse'] = $deliveryIntoWarehouse;

        return $this;
    }

    public function getDeliveryWarehouseType()
    {
        return $this->apiParas['deliveryWarehouseType'];
    }

    public function setDeliveryWarehouseType($deliveryWarehouseType)
    {
        $this->apiParas['deliveryWarehouseType'] = $deliveryWarehouseType;

        return $this;
    }

    public function getUnPack()
    {
        return $this->apiParas['unPack'];
    }

    public function setUnPack($unPack)
    {
        $this->apiParas['unPack'] = $unPack;

        return $this;
    }

    public function getDeliveryBeforeCommand()
    {
        return $this->apiParas['deliveryBeforeCommand'];
    }

    public function setDeliveryBeforeCommand($deliveryBeforeCommand)
    {
        $this->apiParas['deliveryBeforeCommand'] = $deliveryBeforeCommand;

        return $this;
    }

    public function getPickUpCode()
    {
        return $this->apiParas['pickUpCode'];
    }

    public function setPickUpCode($pickUpCode)
    {
        $this->apiParas['pickUpCode'] = $pickUpCode;

        return $this;
    }

    public function getIsvShopNo()
    {
        return $this->apiParas['isvShopNo'];
    }

    public function setIsvShopNo($isvShopNo)
    {
        $this->apiParas['isvShopNo'] = $isvShopNo;

        return $this;
    }

    public function getExpecTransport()
    {
        return $this->apiParas['expecTransport'];
    }

    public function setExpecTransport($expecTransport)
    {
        $this->apiParas['expecTransport'] = $expecTransport;

        return $this;
    }

    public function getInDependent()
    {
        return $this->apiParas['inDependent'];
    }

    public function setInDependent($inDependent)
    {
        $this->apiParas['inDependent'] = $inDependent;

        return $this;
    }

    public function getStoreBrand()
    {
        return $this->apiParas['storeBrand'];
    }

    public function setStoreBrand($storeBrand)
    {
        $this->apiParas['storeBrand'] = $storeBrand;

        return $this;
    }

    public function getStoreId()
    {
        return $this->apiParas['storeId'];
    }

    public function setStoreId($storeId)
    {
        $this->apiParas['storeId'] = $storeId;

        return $this;
    }

    public function getUnloadFlag()
    {
        return $this->apiParas['unloadFlag'];
    }

    public function setUnloadFlag($unloadFlag)
    {
        $this->apiParas['unloadFlag'] = $unloadFlag;

        return $this;
    }

    public function getRelationNo()
    {
        return $this->apiParas['relationNo'];
    }

    public function setRelationNo($relationNo)
    {
        $this->apiParas['relationNo'] = $relationNo;

        return $this;
    }

    public function getDeliveryProductCode()
    {
        return $this->apiParas['deliveryProductCode'];
    }

    public function setDeliveryProductCode($deliveryProductCode)
    {
        $this->apiParas['deliveryProductCode'] = $deliveryProductCode;

        return $this;
    }

    public function getSellerWarehouseNo()
    {
        return $this->apiParas['sellerWarehouseNo'];
    }

    public function setSellerWarehouseNo($sellerWarehouseNo)
    {
        $this->apiParas['sellerWarehouseNo'] = $sellerWarehouseNo;

        return $this;
    }

    public function getPeaceMindReceive()
    {
        return $this->apiParas['peaceMindReceive'];
    }

    public function setPeaceMindReceive($peaceMindReceive)
    {
        $this->apiParas['peaceMindReceive'] = $peaceMindReceive;

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

    public function getSkuGoodsLevel()
    {
        return $this->apiParas['skuGoodsLevel'];
    }

    public function setSkuGoodsLevel($skuGoodsLevel)
    {
        $this->apiParas['skuGoodsLevel'] = $skuGoodsLevel;

        return $this;
    }

    public function getGoodsName()
    {
        return $this->apiParas['goodsName'];
    }

    public function setGoodsName($goodsName)
    {
        $this->apiParas['goodsName'] = $goodsName;

        return $this;
    }

    public function getType()
    {
        return $this->apiParas['type'];
    }

    public function setType($type)
    {
        $this->apiParas['type'] = $type;

        return $this;
    }

    public function getUnit()
    {
        return $this->apiParas['unit'];
    }

    public function setUnit($unit)
    {
        $this->apiParas['unit'] = $unit;

        return $this;
    }

    public function getRemark()
    {
        return $this->apiParas['remark'];
    }

    public function setRemark($remark)
    {
        $this->apiParas['remark'] = $remark;

        return $this;
    }

    public function getRate()
    {
        return $this->apiParas['rate'];
    }

    public function setRate($rate)
    {
        $this->apiParas['rate'] = $rate;

        return $this;
    }

    public function getAmount()
    {
        return $this->apiParas['amount'];
    }

    public function setAmount($amount)
    {
        $this->apiParas['amount'] = $amount;

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

    public function getPAttributes()
    {
        return $this->apiParas['pAttributes'];
    }

    public function setPAttributes($pAttributes)
    {
        $this->apiParas['pAttributes'] = $pAttributes;

        return $this;
    }

    public function getIsvLotattrs()
    {
        return $this->apiParas['isvLotattrs'];
    }

    public function setIsvLotattrs($isvLotattrs)
    {
        $this->apiParas['isvLotattrs'] = $isvLotattrs;

        return $this;
    }

    public function getIsvGoodsNo()
    {
        return $this->apiParas['isvGoodsNo'];
    }

    public function setIsvGoodsNo($isvGoodsNo)
    {
        $this->apiParas['isvGoodsNo'] = $isvGoodsNo;

        return $this;
    }

    public function getInstallVenderId()
    {
        return $this->apiParas['installVenderId'];
    }

    public function setInstallVenderId($installVenderId)
    {
        $this->apiParas['installVenderId'] = $installVenderId;

        return $this;
    }

    public function getOrderLine()
    {
        return $this->apiParas['orderLine'];
    }

    public function setOrderLine($orderLine)
    {
        $this->apiParas['orderLine'] = $orderLine;

        return $this;
    }

    public function getBatAttrs()
    {
        return $this->apiParas['batAttrs'];
    }

    public function setBatAttrs($batAttrs)
    {
        $this->apiParas['batAttrs'] = $batAttrs;

        return $this;
    }

    public function getProductionDate()
    {
        return $this->apiParas['productionDate'];
    }

    public function setProductionDate($productionDate)
    {
        $this->apiParas['productionDate'] = $productionDate;

        return $this;
    }

    public function getExpirationDate()
    {
        return $this->apiParas['expirationDate'];
    }

    public function setExpirationDate($expirationDate)
    {
        $this->apiParas['expirationDate'] = $expirationDate;

        return $this;
    }

    public function getPackBatchNo()
    {
        return $this->apiParas['packBatchNo'];
    }

    public function setPackBatchNo($packBatchNo)
    {
        $this->apiParas['packBatchNo'] = $packBatchNo;

        return $this;
    }

    public function getPoNo()
    {
        return $this->apiParas['poNo'];
    }

    public function setPoNo($poNo)
    {
        $this->apiParas['poNo'] = $poNo;

        return $this;
    }

    public function getLot()
    {
        return $this->apiParas['lot'];
    }

    public function setLot($lot)
    {
        $this->apiParas['lot'] = $lot;

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

    public function getJdPackageType()
    {
        return $this->apiParas['jdPackageType'];
    }

    public function setJdPackageType($jdPackageType)
    {
        $this->apiParas['jdPackageType'] = $jdPackageType;

        return $this;
    }

    public function getServiceProductJson()
    {
        return $this->apiParas['serviceProductJson'];
    }

    public function setServiceProductJson($serviceProductJson)
    {
        $this->apiParas['serviceProductJson'] = $serviceProductJson;

        return $this;
    }

    public function getPayAmount()
    {
        return $this->apiParas['payAmount'];
    }

    public function setPayAmount($payAmount)
    {
        $this->apiParas['payAmount'] = $payAmount;

        return $this;
    }

    public function getSellerGoodsRemark()
    {
        return $this->apiParas['sellerGoodsRemark'];
    }

    public function setSellerGoodsRemark($sellerGoodsRemark)
    {
        $this->apiParas['sellerGoodsRemark'] = $sellerGoodsRemark;

        return $this;
    }

    public function getLeftExpirationPercent()
    {
        return $this->apiParas['leftExpirationPercent'];
    }

    public function setLeftExpirationPercent($leftExpirationPercent)
    {
        $this->apiParas['leftExpirationPercent'] = $leftExpirationPercent;

        return $this;
    }

    public function getLeftExpirationPercentOperate()
    {
        return $this->apiParas['leftExpirationPercentOperate'];
    }

    public function setLeftExpirationPercentOperate($leftExpirationPercentOperate)
    {
        $this->apiParas['leftExpirationPercentOperate'] = $leftExpirationPercentOperate;

        return $this;
    }

    public function getBatAttrRangeJson()
    {
        return $this->apiParas['batAttrRangeJson'];
    }

    public function setBatAttrRangeJson($batAttrRangeJson)
    {
        $this->apiParas['batAttrRangeJson'] = $batAttrRangeJson;

        return $this;
    }
}
