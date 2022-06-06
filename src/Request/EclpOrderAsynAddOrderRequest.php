<?php

namespace ACES\Request;


class EclpOrderAsynAddOrderRequest
{
    private $apiParas = array();
    private $version;
    private $isvUUID;
    private $isvSource;
    private $shopNo;
    private $bdOwnerNo;
    private $departmentNo;
    private $warehouseNo;
    private $shipperNo;
    private $salesPlatformOrderNo;
    private $salePlatformSource;
    private $salesPlatformCreateTime;
    private $soType;
    private $consigneeName;
    private $consigneeMobile;
    private $consigneePhone;
    private $consigneeEmail;
    private $expectDate;
    private $addressProvince;
    private $addressCity;
    private $addressCounty;
    private $addressTown;
    private $consigneeAddress;
    private $consigneePostcode;
    private $receivable;
    private $consigneeRemark;
    private $orderMark;
    private $thirdWayBill;
    private $packageMark;
    private $businessType;
    private $destinationCode;
    private $destinationName;
    private $sendWebsiteCode;
    private $sendWebsiteName;
    private $sendMode;
    private $receiveMode;
    private $appointDeliveryTime;
    private $insuredPriceFlag;
    private $insuredValue;
    private $insuredFee;
    private $thirdPayment;
    private $monthlyAccount;
    private $shipment;
    private $sellerRemark;
    private $thirdSite;
    private $customsStatus;
    private $customerName;
    private $invoiceTitle;
    private $invoiceContent;
    private $goodsType;
    private $goodsLevel;
    private $customsPort;
    private $billType;
    private $orderPrice;
    private $orderBatchNo;
    private $orderBatchQty;
    private $transactionSource;
    private $countrycode;
    private $goodsNo;
    private $price;
    private $quantity;
    private $serialNo;
    private $printName;

    public function getApiMethodName()
    {
        return "jingdong.eclp.order.asynAddOrder";
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

    public function getIsvUUID()
    {
        return $this->isvUUID;
    }

    public function setIsvUUID($isvUUID)
    {
        $this->isvUUID = $isvUUID;
        $this->apiParas["isvUUID"] = $isvUUID;
    }

    public function getIsvSource()
    {
        return $this->isvSource;
    }

    public function setIsvSource($isvSource)
    {
        $this->isvSource = $isvSource;
        $this->apiParas["isvSource"] = $isvSource;
    }

    public function getShopNo()
    {
        return $this->shopNo;
    }

    public function setShopNo($shopNo)
    {
        $this->shopNo = $shopNo;
        $this->apiParas["shopNo"] = $shopNo;
    }

    public function getBdOwnerNo()
    {
        return $this->bdOwnerNo;
    }

    public function setBdOwnerNo($bdOwnerNo)
    {
        $this->bdOwnerNo = $bdOwnerNo;
        $this->apiParas["bdOwnerNo"] = $bdOwnerNo;
    }

    public function getDepartmentNo()
    {
        return $this->departmentNo;
    }

    public function setDepartmentNo($departmentNo)
    {
        $this->departmentNo = $departmentNo;
        $this->apiParas["departmentNo"] = $departmentNo;
    }

    public function getWarehouseNo()
    {
        return $this->warehouseNo;
    }

    public function setWarehouseNo($warehouseNo)
    {
        $this->warehouseNo = $warehouseNo;
        $this->apiParas["warehouseNo"] = $warehouseNo;
    }

    public function getShipperNo()
    {
        return $this->shipperNo;
    }

    public function setShipperNo($shipperNo)
    {
        $this->shipperNo = $shipperNo;
        $this->apiParas["shipperNo"] = $shipperNo;
    }

    public function getSalesPlatformOrderNo()
    {
        return $this->salesPlatformOrderNo;
    }

    public function setSalesPlatformOrderNo($salesPlatformOrderNo)
    {
        $this->salesPlatformOrderNo = $salesPlatformOrderNo;
        $this->apiParas["salesPlatformOrderNo"] = $salesPlatformOrderNo;
    }

    public function getSalePlatformSource()
    {
        return $this->salePlatformSource;
    }

    public function setSalePlatformSource($salePlatformSource)
    {
        $this->salePlatformSource = $salePlatformSource;
        $this->apiParas["salePlatformSource"] = $salePlatformSource;
    }

    public function getSalesPlatformCreateTime()
    {
        return $this->salesPlatformCreateTime;
    }

    public function setSalesPlatformCreateTime($salesPlatformCreateTime)
    {
        $this->salesPlatformCreateTime = $salesPlatformCreateTime;
        $this->apiParas["salesPlatformCreateTime"] = $salesPlatformCreateTime;
    }

    public function getSoType()
    {
        return $this->soType;
    }

    public function setSoType($soType)
    {
        $this->soType = $soType;
        $this->apiParas["soType"] = $soType;
    }

    public function getConsigneeName()
    {
        return $this->consigneeName;
    }

    public function setConsigneeName($consigneeName)
    {
        $this->consigneeName = $consigneeName;
        $this->apiParas["consigneeName"] = $consigneeName;
    }

    public function getConsigneeMobile()
    {
        return $this->consigneeMobile;
    }

    public function setConsigneeMobile($consigneeMobile)
    {
        $this->consigneeMobile = $consigneeMobile;
        $this->apiParas["consigneeMobile"] = $consigneeMobile;
    }

    public function getConsigneePhone()
    {
        return $this->consigneePhone;
    }

    public function setConsigneePhone($consigneePhone)
    {
        $this->consigneePhone = $consigneePhone;
        $this->apiParas["consigneePhone"] = $consigneePhone;
    }

    public function getConsigneeEmail()
    {
        return $this->consigneeEmail;
    }

    public function setConsigneeEmail($consigneeEmail)
    {
        $this->consigneeEmail = $consigneeEmail;
        $this->apiParas["consigneeEmail"] = $consigneeEmail;
    }

    public function getExpectDate()
    {
        return $this->expectDate;
    }

    public function setExpectDate($expectDate)
    {
        $this->expectDate = $expectDate;
        $this->apiParas["expectDate"] = $expectDate;
    }

    public function getAddressProvince()
    {
        return $this->addressProvince;
    }

    public function setAddressProvince($addressProvince)
    {
        $this->addressProvince = $addressProvince;
        $this->apiParas["addressProvince"] = $addressProvince;
    }

    public function getAddressCity()
    {
        return $this->addressCity;
    }

    public function setAddressCity($addressCity)
    {
        $this->addressCity = $addressCity;
        $this->apiParas["addressCity"] = $addressCity;
    }

    public function getAddressCounty()
    {
        return $this->addressCounty;
    }

    public function setAddressCounty($addressCounty)
    {
        $this->addressCounty = $addressCounty;
        $this->apiParas["addressCounty"] = $addressCounty;
    }

    public function getAddressTown()
    {
        return $this->addressTown;
    }

    public function setAddressTown($addressTown)
    {
        $this->addressTown = $addressTown;
        $this->apiParas["addressTown"] = $addressTown;
    }

    public function getConsigneeAddress()
    {
        return $this->consigneeAddress;
    }

    public function setConsigneeAddress($consigneeAddress)
    {
        $this->consigneeAddress = $consigneeAddress;
        $this->apiParas["consigneeAddress"] = $consigneeAddress;
    }

    public function getConsigneePostcode()
    {
        return $this->consigneePostcode;
    }

    public function setConsigneePostcode($consigneePostcode)
    {
        $this->consigneePostcode = $consigneePostcode;
        $this->apiParas["consigneePostcode"] = $consigneePostcode;
    }

    public function getReceivable()
    {
        return $this->receivable;
    }

    public function setReceivable($receivable)
    {
        $this->receivable = $receivable;
        $this->apiParas["receivable"] = $receivable;
    }

    public function getConsigneeRemark()
    {
        return $this->consigneeRemark;
    }

    public function setConsigneeRemark($consigneeRemark)
    {
        $this->consigneeRemark = $consigneeRemark;
        $this->apiParas["consigneeRemark"] = $consigneeRemark;
    }

    public function getOrderMark()
    {
        return $this->orderMark;
    }

    public function setOrderMark($orderMark)
    {
        $this->orderMark = $orderMark;
        $this->apiParas["orderMark"] = $orderMark;
    }

    public function getThirdWayBill()
    {
        return $this->thirdWayBill;
    }

    public function setThirdWayBill($thirdWayBill)
    {
        $this->thirdWayBill = $thirdWayBill;
        $this->apiParas["thirdWayBill"] = $thirdWayBill;
    }

    public function getPackageMark()
    {
        return $this->packageMark;
    }

    public function setPackageMark($packageMark)
    {
        $this->packageMark = $packageMark;
        $this->apiParas["packageMark"] = $packageMark;
    }

    public function getBusinessType()
    {
        return $this->businessType;
    }

    public function setBusinessType($businessType)
    {
        $this->businessType = $businessType;
        $this->apiParas["businessType"] = $businessType;
    }

    public function getDestinationCode()
    {
        return $this->destinationCode;
    }

    public function setDestinationCode($destinationCode)
    {
        $this->destinationCode = $destinationCode;
        $this->apiParas["destinationCode"] = $destinationCode;
    }

    public function getDestinationName()
    {
        return $this->destinationName;
    }

    public function setDestinationName($destinationName)
    {
        $this->destinationName = $destinationName;
        $this->apiParas["destinationName"] = $destinationName;
    }

    public function getSendWebsiteCode()
    {
        return $this->sendWebsiteCode;
    }

    public function setSendWebsiteCode($sendWebsiteCode)
    {
        $this->sendWebsiteCode = $sendWebsiteCode;
        $this->apiParas["sendWebsiteCode"] = $sendWebsiteCode;
    }

    public function getSendWebsiteName()
    {
        return $this->sendWebsiteName;
    }

    public function setSendWebsiteName($sendWebsiteName)
    {
        $this->sendWebsiteName = $sendWebsiteName;
        $this->apiParas["sendWebsiteName"] = $sendWebsiteName;
    }

    public function getSendMode()
    {
        return $this->sendMode;
    }

    public function setSendMode($sendMode)
    {
        $this->sendMode = $sendMode;
        $this->apiParas["sendMode"] = $sendMode;
    }

    public function getReceiveMode()
    {
        return $this->receiveMode;
    }

    public function setReceiveMode($receiveMode)
    {
        $this->receiveMode = $receiveMode;
        $this->apiParas["receiveMode"] = $receiveMode;
    }

    public function getAppointDeliveryTime()
    {
        return $this->appointDeliveryTime;
    }

    public function setAppointDeliveryTime($appointDeliveryTime)
    {
        $this->appointDeliveryTime = $appointDeliveryTime;
        $this->apiParas["appointDeliveryTime"] = $appointDeliveryTime;
    }

    public function getInsuredPriceFlag()
    {
        return $this->insuredPriceFlag;
    }

    public function setInsuredPriceFlag($insuredPriceFlag)
    {
        $this->insuredPriceFlag = $insuredPriceFlag;
        $this->apiParas["insuredPriceFlag"] = $insuredPriceFlag;
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

    public function getInsuredFee()
    {
        return $this->insuredFee;
    }

    public function setInsuredFee($insuredFee)
    {
        $this->insuredFee = $insuredFee;
        $this->apiParas["insuredFee"] = $insuredFee;
    }

    public function getThirdPayment()
    {
        return $this->thirdPayment;
    }

    public function setThirdPayment($thirdPayment)
    {
        $this->thirdPayment = $thirdPayment;
        $this->apiParas["thirdPayment"] = $thirdPayment;
    }

    public function getMonthlyAccount()
    {
        return $this->monthlyAccount;
    }

    public function setMonthlyAccount($monthlyAccount)
    {
        $this->monthlyAccount = $monthlyAccount;
        $this->apiParas["monthlyAccount"] = $monthlyAccount;
    }

    public function getShipment()
    {
        return $this->shipment;
    }

    public function setShipment($shipment)
    {
        $this->shipment = $shipment;
        $this->apiParas["shipment"] = $shipment;
    }

    public function getSellerRemark()
    {
        return $this->sellerRemark;
    }

    public function setSellerRemark($sellerRemark)
    {
        $this->sellerRemark = $sellerRemark;
        $this->apiParas["sellerRemark"] = $sellerRemark;
    }

    public function getThirdSite()
    {
        return $this->thirdSite;
    }

    public function setThirdSite($thirdSite)
    {
        $this->thirdSite = $thirdSite;
        $this->apiParas["thirdSite"] = $thirdSite;
    }

    public function getCustomsStatus()
    {
        return $this->customsStatus;
    }

    public function setCustomsStatus($customsStatus)
    {
        $this->customsStatus = $customsStatus;
        $this->apiParas["customsStatus"] = $customsStatus;
    }

    public function getCustomerName()
    {
        return $this->customerName;
    }

    public function setCustomerName($customerName)
    {
        $this->customerName = $customerName;
        $this->apiParas["customerName"] = $customerName;
    }

    public function getInvoiceTitle()
    {
        return $this->invoiceTitle;
    }

    public function setInvoiceTitle($invoiceTitle)
    {
        $this->invoiceTitle = $invoiceTitle;
        $this->apiParas["invoiceTitle"] = $invoiceTitle;
    }

    public function getInvoiceContent()
    {
        return $this->invoiceContent;
    }

    public function setInvoiceContent($invoiceContent)
    {
        $this->invoiceContent = $invoiceContent;
        $this->apiParas["invoiceContent"] = $invoiceContent;
    }

    public function getGoodsType()
    {
        return $this->goodsType;
    }

    public function setGoodsType($goodsType)
    {
        $this->goodsType = $goodsType;
        $this->apiParas["goodsType"] = $goodsType;
    }

    public function getGoodsLevel()
    {
        return $this->goodsLevel;
    }

    public function setGoodsLevel($goodsLevel)
    {
        $this->goodsLevel = $goodsLevel;
        $this->apiParas["goodsLevel"] = $goodsLevel;
    }

    public function getCustomsPort()
    {
        return $this->customsPort;
    }

    public function setCustomsPort($customsPort)
    {
        $this->customsPort = $customsPort;
        $this->apiParas["customsPort"] = $customsPort;
    }

    public function getBillType()
    {
        return $this->billType;
    }

    public function setBillType($billType)
    {
        $this->billType = $billType;
        $this->apiParas["billType"] = $billType;
    }

    public function getOrderPrice()
    {
        return $this->orderPrice;
    }

    public function setOrderPrice($orderPrice)
    {
        $this->orderPrice = $orderPrice;
        $this->apiParas["orderPrice"] = $orderPrice;
    }

    public function getOrderBatchNo()
    {
        return $this->orderBatchNo;
    }

    public function setOrderBatchNo($orderBatchNo)
    {
        $this->orderBatchNo = $orderBatchNo;
        $this->apiParas["orderBatchNo"] = $orderBatchNo;
    }

    public function getOrderBatchQty()
    {
        return $this->orderBatchQty;
    }

    public function setOrderBatchQty($orderBatchQty)
    {
        $this->orderBatchQty = $orderBatchQty;
        $this->apiParas["orderBatchQty"] = $orderBatchQty;
    }

    public function getTransactionSource()
    {
        return $this->transactionSource;
    }

    public function setTransactionSource($transactionSource)
    {
        $this->transactionSource = $transactionSource;
        $this->apiParas["transactionSource"] = $transactionSource;
    }

    public function getCountrycode()
    {
        return $this->countrycode;
    }

    public function setCountrycode($countrycode)
    {
        $this->countrycode = $countrycode;
        $this->apiParas["countrycode"] = $countrycode;
    }

    public function getGoodsNo()
    {
        return $this->goodsNo;
    }

    public function setGoodsNo($goodsNo)
    {
        $this->goodsNo = $goodsNo;
        $this->apiParas["goodsNo"] = $goodsNo;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
        $this->apiParas["price"] = $price;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        $this->apiParas["quantity"] = $quantity;
    }

    public function getSerialNo()
    {
        return $this->serialNo;
    }

    public function setSerialNo($serialNo)
    {
        $this->serialNo = $serialNo;
        $this->apiParas["serialNo"] = $serialNo;
    }

    public function getPrintName()
    {
        return $this->printName;
    }

    public function setPrintName($printName)
    {
        $this->printName = $printName;
        $this->apiParas["printName"] = $printName;
    }
}
