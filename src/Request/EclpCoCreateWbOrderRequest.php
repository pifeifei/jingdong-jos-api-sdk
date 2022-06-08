<?php

namespace ACES\Request;

class EclpCoCreateWbOrderRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.eclp.co.createWbOrder';
    }

    public function check()
    {
    }

    public function getOrderNo()
    {
        return $this->apiParas['orderNo'];
    }

    public function setOrderNo($orderNo)
    {
        $this->apiParas['orderNo'] = $orderNo;

        return $this;
    }

    public function getDeptNo()
    {
        return $this->apiParas['deptNo'];
    }

    public function setDeptNo($deptNo)
    {
        $this->apiParas['deptNo'] = $deptNo;

        return $this;
    }

    public function getSenderNickName()
    {
        return $this->apiParas['senderNickName'];
    }

    public function setSenderNickName($senderNickName)
    {
        $this->apiParas['senderNickName'] = $senderNickName;

        return $this;
    }

    public function getSenderName()
    {
        return $this->apiParas['senderName'];
    }

    public function setSenderName($senderName)
    {
        $this->apiParas['senderName'] = $senderName;

        return $this;
    }

    public function getSenderMobile()
    {
        return $this->apiParas['senderMobile'];
    }

    public function setSenderMobile($senderMobile)
    {
        $this->apiParas['senderMobile'] = $senderMobile;

        return $this;
    }

    public function getSenderPhone()
    {
        return $this->apiParas['senderPhone'];
    }

    public function setSenderPhone($senderPhone)
    {
        $this->apiParas['senderPhone'] = $senderPhone;

        return $this;
    }

    public function getSenderProvince()
    {
        return $this->apiParas['senderProvince'];
    }

    public function setSenderProvince($senderProvince)
    {
        $this->apiParas['senderProvince'] = $senderProvince;

        return $this;
    }

    public function getSenderCity()
    {
        return $this->apiParas['senderCity'];
    }

    public function setSenderCity($senderCity)
    {
        $this->apiParas['senderCity'] = $senderCity;

        return $this;
    }

    public function getSenderCounty()
    {
        return $this->apiParas['senderCounty'];
    }

    public function setSenderCounty($senderCounty)
    {
        $this->apiParas['senderCounty'] = $senderCounty;

        return $this;
    }

    public function getSenderTown()
    {
        return $this->apiParas['senderTown'];
    }

    public function setSenderTown($senderTown)
    {
        $this->apiParas['senderTown'] = $senderTown;

        return $this;
    }

    public function getSenderProvinceName()
    {
        return $this->apiParas['senderProvinceName'];
    }

    public function setSenderProvinceName($senderProvinceName)
    {
        $this->apiParas['senderProvinceName'] = $senderProvinceName;

        return $this;
    }

    public function getSenderCityName()
    {
        return $this->apiParas['senderCityName'];
    }

    public function setSenderCityName($senderCityName)
    {
        $this->apiParas['senderCityName'] = $senderCityName;

        return $this;
    }

    public function getSenderCountyName()
    {
        return $this->apiParas['senderCountyName'];
    }

    public function setSenderCountyName($senderCountyName)
    {
        $this->apiParas['senderCountyName'] = $senderCountyName;

        return $this;
    }

    public function getSenderTownName()
    {
        return $this->apiParas['senderTownName'];
    }

    public function setSenderTownName($senderTownName)
    {
        $this->apiParas['senderTownName'] = $senderTownName;

        return $this;
    }

    public function getSenderAddress()
    {
        return $this->apiParas['senderAddress'];
    }

    public function setSenderAddress($senderAddress)
    {
        $this->apiParas['senderAddress'] = $senderAddress;

        return $this;
    }

    public function getReceiverNickName()
    {
        return $this->apiParas['receiverNickName'];
    }

    public function setReceiverNickName($receiverNickName)
    {
        $this->apiParas['receiverNickName'] = $receiverNickName;

        return $this;
    }

    public function getReceiverName()
    {
        return $this->apiParas['receiverName'];
    }

    public function setReceiverName($receiverName)
    {
        $this->apiParas['receiverName'] = $receiverName;

        return $this;
    }

    public function getReceiverMobile()
    {
        return $this->apiParas['receiverMobile'];
    }

    public function setReceiverMobile($receiverMobile)
    {
        $this->apiParas['receiverMobile'] = $receiverMobile;

        return $this;
    }

    public function getReceiverPhone()
    {
        return $this->apiParas['receiverPhone'];
    }

    public function setReceiverPhone($receiverPhone)
    {
        $this->apiParas['receiverPhone'] = $receiverPhone;

        return $this;
    }

    public function getReceiverProvince()
    {
        return $this->apiParas['receiverProvince'];
    }

    public function setReceiverProvince($receiverProvince)
    {
        $this->apiParas['receiverProvince'] = $receiverProvince;

        return $this;
    }

    public function getReceiverCity()
    {
        return $this->apiParas['receiverCity'];
    }

    public function setReceiverCity($receiverCity)
    {
        $this->apiParas['receiverCity'] = $receiverCity;

        return $this;
    }

    public function getReceiverCounty()
    {
        return $this->apiParas['receiverCounty'];
    }

    public function setReceiverCounty($receiverCounty)
    {
        $this->apiParas['receiverCounty'] = $receiverCounty;

        return $this;
    }

    public function getReceiverTown()
    {
        return $this->apiParas['receiverTown'];
    }

    public function setReceiverTown($receiverTown)
    {
        $this->apiParas['receiverTown'] = $receiverTown;

        return $this;
    }

    public function getReceiverProvinceName()
    {
        return $this->apiParas['receiverProvinceName'];
    }

    public function setReceiverProvinceName($receiverProvinceName)
    {
        $this->apiParas['receiverProvinceName'] = $receiverProvinceName;

        return $this;
    }

    public function getReceiverCityName()
    {
        return $this->apiParas['receiverCityName'];
    }

    public function setReceiverCityName($receiverCityName)
    {
        $this->apiParas['receiverCityName'] = $receiverCityName;

        return $this;
    }

    public function getReceiverCountyName()
    {
        return $this->apiParas['receiverCountyName'];
    }

    public function setReceiverCountyName($receiverCountyName)
    {
        $this->apiParas['receiverCountyName'] = $receiverCountyName;

        return $this;
    }

    public function getReceiverTownName()
    {
        return $this->apiParas['receiverTownName'];
    }

    public function setReceiverTownName($receiverTownName)
    {
        $this->apiParas['receiverTownName'] = $receiverTownName;

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

    public function getGrossWeight()
    {
        return $this->apiParas['grossWeight'];
    }

    public function setGrossWeight($grossWeight)
    {
        $this->apiParas['grossWeight'] = $grossWeight;

        return $this;
    }

    public function getGrossVolume()
    {
        return $this->apiParas['grossVolume'];
    }

    public function setGrossVolume($grossVolume)
    {
        $this->apiParas['grossVolume'] = $grossVolume;

        return $this;
    }

    public function getCreateTime()
    {
        return $this->apiParas['createTime'];
    }

    public function setCreateTime($createTime)
    {
        $this->apiParas['createTime'] = $createTime;

        return $this;
    }

    public function getCreateUser()
    {
        return $this->apiParas['createUser'];
    }

    public function setCreateUser($createUser)
    {
        $this->apiParas['createUser'] = $createUser;

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

    public function getIsCod()
    {
        return $this->apiParas['isCod'];
    }

    public function setIsCod($isCod)
    {
        $this->apiParas['isCod'] = $isCod;

        return $this;
    }

    public function getVehicleTypeName()
    {
        return $this->apiParas['vehicleTypeName'];
    }

    public function setVehicleTypeName($vehicleTypeName)
    {
        $this->apiParas['vehicleTypeName'] = $vehicleTypeName;

        return $this;
    }

    public function getVehicleTypeNo()
    {
        return $this->apiParas['vehicleTypeNo'];
    }

    public function setVehicleTypeNo($vehicleTypeNo)
    {
        $this->apiParas['vehicleTypeNo'] = $vehicleTypeNo;

        return $this;
    }

    public function getVehicleQty()
    {
        return $this->apiParas['vehicleQty'];
    }

    public function setVehicleQty($vehicleQty)
    {
        $this->apiParas['vehicleQty'] = $vehicleQty;

        return $this;
    }

    public function getExpressItemName()
    {
        return $this->apiParas['expressItemName'];
    }

    public function setExpressItemName($expressItemName)
    {
        $this->apiParas['expressItemName'] = $expressItemName;

        return $this;
    }

    public function getExpressItemQty()
    {
        return $this->apiParas['expressItemQty'];
    }

    public function setExpressItemQty($expressItemQty)
    {
        $this->apiParas['expressItemQty'] = $expressItemQty;

        return $this;
    }

    public function getSignReceiptFlag()
    {
        return $this->apiParas['signReceiptFlag'];
    }

    public function setSignReceiptFlag($signReceiptFlag)
    {
        $this->apiParas['signReceiptFlag'] = $signReceiptFlag;

        return $this;
    }

    public function getDeliveryReceiptFlag()
    {
        return $this->apiParas['deliveryReceiptFlag'];
    }

    public function setDeliveryReceiptFlag($deliveryReceiptFlag)
    {
        $this->apiParas['deliveryReceiptFlag'] = $deliveryReceiptFlag;

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

    public function getLoadFlag()
    {
        return $this->apiParas['loadFlag'];
    }

    public function setLoadFlag($loadFlag)
    {
        $this->apiParas['loadFlag'] = $loadFlag;

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

    public function getReceiptFlag()
    {
        return $this->apiParas['receiptFlag'];
    }

    public function setReceiptFlag($receiptFlag)
    {
        $this->apiParas['receiptFlag'] = $receiptFlag;

        return $this;
    }

    public function getFcFlag()
    {
        return $this->apiParas['fcFlag'];
    }

    public function setFcFlag($fcFlag)
    {
        $this->apiParas['fcFlag'] = $fcFlag;

        return $this;
    }

    public function getGuaranteeValue()
    {
        return $this->apiParas['guaranteeValue'];
    }

    public function setGuaranteeValue($guaranteeValue)
    {
        $this->apiParas['guaranteeValue'] = $guaranteeValue;

        return $this;
    }

    public function getPickupBeginTime()
    {
        return $this->apiParas['pickupBeginTime'];
    }

    public function setPickupBeginTime($pickupBeginTime)
    {
        $this->apiParas['pickupBeginTime'] = $pickupBeginTime;

        return $this;
    }

    public function getPickupEndTime()
    {
        return $this->apiParas['pickupEndTime'];
    }

    public function setPickupEndTime($pickupEndTime)
    {
        $this->apiParas['pickupEndTime'] = $pickupEndTime;

        return $this;
    }

    public function getBussinessType()
    {
        return $this->apiParas['bussinessType'];
    }

    public function setBussinessType($bussinessType)
    {
        $this->apiParas['bussinessType'] = $bussinessType;

        return $this;
    }

    public function getDeliveryType()
    {
        return $this->apiParas['deliveryType'];
    }

    public function setDeliveryType($deliveryType)
    {
        $this->apiParas['deliveryType'] = $deliveryType;

        return $this;
    }

    public function getSenderCompany()
    {
        return $this->apiParas['senderCompany'];
    }

    public function setSenderCompany($senderCompany)
    {
        $this->apiParas['senderCompany'] = $senderCompany;

        return $this;
    }

    public function getReceiverCompany()
    {
        return $this->apiParas['receiverCompany'];
    }

    public function setReceiverCompany($receiverCompany)
    {
        $this->apiParas['receiverCompany'] = $receiverCompany;

        return $this;
    }

    public function getReceiverAddress()
    {
        return $this->apiParas['receiverAddress'];
    }

    public function setReceiverAddress($receiverAddress)
    {
        $this->apiParas['receiverAddress'] = $receiverAddress;

        return $this;
    }

    public function getWarehouseCode()
    {
        return $this->apiParas['warehouseCode'];
    }

    public function setWarehouseCode($warehouseCode)
    {
        $this->apiParas['warehouseCode'] = $warehouseCode;

        return $this;
    }

    public function getProjectName()
    {
        return $this->apiParas['projectName'];
    }

    public function setProjectName($projectName)
    {
        $this->apiParas['projectName'] = $projectName;

        return $this;
    }

    public function getActualSpId()
    {
        return $this->apiParas['actualSpId'];
    }

    public function setActualSpId($actualSpId)
    {
        $this->apiParas['actualSpId'] = $actualSpId;

        return $this;
    }

    public function getColdChainOn()
    {
        return $this->apiParas['coldChainOn'];
    }

    public function setColdChainOn($coldChainOn)
    {
        $this->apiParas['coldChainOn'] = $coldChainOn;

        return $this;
    }

    public function getTemptureNum()
    {
        return $this->apiParas['temptureNum'];
    }

    public function setTemptureNum($temptureNum)
    {
        $this->apiParas['temptureNum'] = $temptureNum;

        return $this;
    }

    public function getQingzhenOn()
    {
        return $this->apiParas['qingzhenOn'];
    }

    public function setQingzhenOn($qingzhenOn)
    {
        $this->apiParas['qingzhenOn'] = $qingzhenOn;

        return $this;
    }

    public function getYiwuranOn()
    {
        return $this->apiParas['yiwuranOn'];
    }

    public function setYiwuranOn($yiwuranOn)
    {
        $this->apiParas['yiwuranOn'] = $yiwuranOn;

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

    public function getHeavyUpstair()
    {
        return $this->apiParas['heavyUpstair'];
    }

    public function setHeavyUpstair($heavyUpstair)
    {
        $this->apiParas['heavyUpstair'] = $heavyUpstair;

        return $this;
    }

    public function getWayBillCode()
    {
        return $this->apiParas['wayBillCode'];
    }

    public function setWayBillCode($wayBillCode)
    {
        $this->apiParas['wayBillCode'] = $wayBillCode;

        return $this;
    }

    public function getSpId()
    {
        return $this->apiParas['spId'];
    }

    public function setSpId($spId)
    {
        $this->apiParas['spId'] = $spId;

        return $this;
    }

    public function getSaleOrderNo()
    {
        return $this->apiParas['saleOrderNo'];
    }

    public function setSaleOrderNo($saleOrderNo)
    {
        $this->apiParas['saleOrderNo'] = $saleOrderNo;

        return $this;
    }

    public function getPackageServiceOn()
    {
        return $this->apiParas['packageServiceOn'];
    }

    public function setPackageServiceOn($packageServiceOn)
    {
        $this->apiParas['packageServiceOn'] = $packageServiceOn;

        return $this;
    }

    public function getDeliveryMthd()
    {
        return $this->apiParas['deliveryMthd'];
    }

    public function setDeliveryMthd($deliveryMthd)
    {
        $this->apiParas['deliveryMthd'] = $deliveryMthd;

        return $this;
    }

    public function getProviderCode()
    {
        return $this->apiParas['providerCode'];
    }

    public function setProviderCode($providerCode)
    {
        $this->apiParas['providerCode'] = $providerCode;

        return $this;
    }

    public function getPackageNo()
    {
        return $this->apiParas['packageNo'];
    }

    public function setPackageNo($packageNo)
    {
        $this->apiParas['packageNo'] = $packageNo;

        return $this;
    }

    public function getClientNo()
    {
        return $this->apiParas['clientNo'];
    }

    public function setClientNo($clientNo)
    {
        $this->apiParas['clientNo'] = $clientNo;

        return $this;
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

    public function getSiteCollect()
    {
        return $this->apiParas['siteCollect'];
    }

    public function setSiteCollect($siteCollect)
    {
        $this->apiParas['siteCollect'] = $siteCollect;

        return $this;
    }

    public function getSiteDelivery()
    {
        return $this->apiParas['siteDelivery'];
    }

    public function setSiteDelivery($siteDelivery)
    {
        $this->apiParas['siteDelivery'] = $siteDelivery;

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

    public function getSelfCollectSiteId()
    {
        return $this->apiParas['selfCollectSiteId'];
    }

    public function setSelfCollectSiteId($selfCollectSiteId)
    {
        $this->apiParas['selfCollectSiteId'] = $selfCollectSiteId;

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

    public function getExpectedArrivalStartTime()
    {
        return $this->apiParas['expectedArrivalStartTime'];
    }

    public function setExpectedArrivalStartTime($expectedArrivalStartTime)
    {
        $this->apiParas['expectedArrivalStartTime'] = $expectedArrivalStartTime;

        return $this;
    }

    public function getExpectedArrivalEndTime()
    {
        return $this->apiParas['expectedArrivalEndTime'];
    }

    public function setExpectedArrivalEndTime($expectedArrivalEndTime)
    {
        $this->apiParas['expectedArrivalEndTime'] = $expectedArrivalEndTime;

        return $this;
    }

    public function getVehicleOrderNo()
    {
        return $this->apiParas['vehicleOrderNo'];
    }

    public function setVehicleOrderNo($vehicleOrderNo)
    {
        $this->apiParas['vehicleOrderNo'] = $vehicleOrderNo;

        return $this;
    }

    public function getMessageSign()
    {
        return $this->apiParas['messageSign'];
    }

    public function setMessageSign($messageSign)
    {
        $this->apiParas['messageSign'] = $messageSign;

        return $this;
    }

    public function getCheckPreSort()
    {
        return $this->apiParas['checkPreSort'];
    }

    public function setCheckPreSort($checkPreSort)
    {
        $this->apiParas['checkPreSort'] = $checkPreSort;

        return $this;
    }

    public function getReceiverNameSplit()
    {
        return $this->apiParas['receiverNameSplit'];
    }

    public function setReceiverNameSplit($receiverNameSplit)
    {
        $this->apiParas['receiverNameSplit'] = $receiverNameSplit;

        return $this;
    }

    public function getReceiverCompanySplit()
    {
        return $this->apiParas['receiverCompanySplit'];
    }

    public function setReceiverCompanySplit($receiverCompanySplit)
    {
        $this->apiParas['receiverCompanySplit'] = $receiverCompanySplit;

        return $this;
    }

    public function getReceiverMobileSplit()
    {
        return $this->apiParas['receiverMobileSplit'];
    }

    public function setReceiverMobileSplit($receiverMobileSplit)
    {
        $this->apiParas['receiverMobileSplit'] = $receiverMobileSplit;

        return $this;
    }

    public function getReceiverPhoneSplit()
    {
        return $this->apiParas['receiverPhoneSplit'];
    }

    public function setReceiverPhoneSplit($receiverPhoneSplit)
    {
        $this->apiParas['receiverPhoneSplit'] = $receiverPhoneSplit;

        return $this;
    }

    public function getReceiverProvinceNameSplit()
    {
        return $this->apiParas['receiverProvinceNameSplit'];
    }

    public function setReceiverProvinceNameSplit($receiverProvinceNameSplit)
    {
        $this->apiParas['receiverProvinceNameSplit'] = $receiverProvinceNameSplit;

        return $this;
    }

    public function getReceiverProvinceSplit()
    {
        return $this->apiParas['receiverProvinceSplit'];
    }

    public function setReceiverProvinceSplit($receiverProvinceSplit)
    {
        $this->apiParas['receiverProvinceSplit'] = $receiverProvinceSplit;

        return $this;
    }

    public function getReceiverCityNameSplit()
    {
        return $this->apiParas['receiverCityNameSplit'];
    }

    public function setReceiverCityNameSplit($receiverCityNameSplit)
    {
        $this->apiParas['receiverCityNameSplit'] = $receiverCityNameSplit;

        return $this;
    }

    public function getReceiverCitySplit()
    {
        return $this->apiParas['receiverCitySplit'];
    }

    public function setReceiverCitySplit($receiverCitySplit)
    {
        $this->apiParas['receiverCitySplit'] = $receiverCitySplit;

        return $this;
    }

    public function getReceiverCountyNameSplit()
    {
        return $this->apiParas['receiverCountyNameSplit'];
    }

    public function setReceiverCountyNameSplit($receiverCountyNameSplit)
    {
        $this->apiParas['receiverCountyNameSplit'] = $receiverCountyNameSplit;

        return $this;
    }

    public function getReceiverCountySplit()
    {
        return $this->apiParas['receiverCountySplit'];
    }

    public function setReceiverCountySplit($receiverCountySplit)
    {
        $this->apiParas['receiverCountySplit'] = $receiverCountySplit;

        return $this;
    }

    public function getReceiverTownNameSplit()
    {
        return $this->apiParas['receiverTownNameSplit'];
    }

    public function setReceiverTownNameSplit($receiverTownNameSplit)
    {
        $this->apiParas['receiverTownNameSplit'] = $receiverTownNameSplit;

        return $this;
    }

    public function getReceiverTownSplit()
    {
        return $this->apiParas['receiverTownSplit'];
    }

    public function setReceiverTownSplit($receiverTownSplit)
    {
        $this->apiParas['receiverTownSplit'] = $receiverTownSplit;

        return $this;
    }

    public function getReceiverAddressSplit()
    {
        return $this->apiParas['receiverAddressSplit'];
    }

    public function setReceiverAddressSplit($receiverAddressSplit)
    {
        $this->apiParas['receiverAddressSplit'] = $receiverAddressSplit;

        return $this;
    }

    public function getExpectedArrivalStartTimeSplit()
    {
        return $this->apiParas['expectedArrivalStartTimeSplit'];
    }

    public function setExpectedArrivalStartTimeSplit($expectedArrivalStartTimeSplit)
    {
        $this->apiParas['expectedArrivalStartTimeSplit'] = $expectedArrivalStartTimeSplit;

        return $this;
    }

    public function getExpectedArrivalEndTimeSplit()
    {
        return $this->apiParas['expectedArrivalEndTimeSplit'];
    }

    public function setExpectedArrivalEndTimeSplit($expectedArrivalEndTimeSplit)
    {
        $this->apiParas['expectedArrivalEndTimeSplit'] = $expectedArrivalEndTimeSplit;

        return $this;
    }

    public function getOrderNoSplit()
    {
        return $this->apiParas['orderNoSplit'];
    }

    public function setOrderNoSplit($orderNoSplit)
    {
        $this->apiParas['orderNoSplit'] = $orderNoSplit;

        return $this;
    }

    public function getExpressItemNameSplit()
    {
        return $this->apiParas['expressItemNameSplit'];
    }

    public function setExpressItemNameSplit($expressItemNameSplit)
    {
        $this->apiParas['expressItemNameSplit'] = $expressItemNameSplit;

        return $this;
    }

    public function getGrossVolumeSplit()
    {
        return $this->apiParas['grossVolumeSplit'];
    }

    public function setGrossVolumeSplit($grossVolumeSplit)
    {
        $this->apiParas['grossVolumeSplit'] = $grossVolumeSplit;

        return $this;
    }

    public function getGrossWeightSplit()
    {
        return $this->apiParas['grossWeightSplit'];
    }

    public function setGrossWeightSplit($grossWeightSplit)
    {
        $this->apiParas['grossWeightSplit'] = $grossWeightSplit;

        return $this;
    }

    public function getExpressItemQtySplit()
    {
        return $this->apiParas['expressItemQtySplit'];
    }

    public function setExpressItemQtySplit($expressItemQtySplit)
    {
        $this->apiParas['expressItemQtySplit'] = $expressItemQtySplit;

        return $this;
    }

    public function getTemptureNumSplit()
    {
        return $this->apiParas['temptureNumSplit'];
    }

    public function setTemptureNumSplit($temptureNumSplit)
    {
        $this->apiParas['temptureNumSplit'] = $temptureNumSplit;

        return $this;
    }

    public function getQuarantineCertSplit()
    {
        return $this->apiParas['quarantineCertSplit'];
    }

    public function setQuarantineCertSplit($quarantineCertSplit)
    {
        $this->apiParas['quarantineCertSplit'] = $quarantineCertSplit;

        return $this;
    }

    public function getDeliveryIntoWarehouseSplit()
    {
        return $this->apiParas['deliveryIntoWarehouseSplit'];
    }

    public function setDeliveryIntoWarehouseSplit($deliveryIntoWarehouseSplit)
    {
        $this->apiParas['deliveryIntoWarehouseSplit'] = $deliveryIntoWarehouseSplit;

        return $this;
    }

    public function getInStorageNoSplit()
    {
        return $this->apiParas['inStorageNoSplit'];
    }

    public function setInStorageNoSplit($inStorageNoSplit)
    {
        $this->apiParas['inStorageNoSplit'] = $inStorageNoSplit;

        return $this;
    }

    public function getInStorageTimeSplit()
    {
        return $this->apiParas['inStorageTimeSplit'];
    }

    public function setInStorageTimeSplit($inStorageTimeSplit)
    {
        $this->apiParas['inStorageTimeSplit'] = $inStorageTimeSplit;

        return $this;
    }

    public function getInStorageRemarkSplit()
    {
        return $this->apiParas['inStorageRemarkSplit'];
    }

    public function setInStorageRemarkSplit($inStorageRemarkSplit)
    {
        $this->apiParas['inStorageRemarkSplit'] = $inStorageRemarkSplit;

        return $this;
    }

    public function getLoadFlagSplit()
    {
        return $this->apiParas['loadFlagSplit'];
    }

    public function setLoadFlagSplit($loadFlagSplit)
    {
        $this->apiParas['loadFlagSplit'] = $loadFlagSplit;

        return $this;
    }

    public function getUnloadFlagSplit()
    {
        return $this->apiParas['unloadFlagSplit'];
    }

    public function setUnloadFlagSplit($unloadFlagSplit)
    {
        $this->apiParas['unloadFlagSplit'] = $unloadFlagSplit;

        return $this;
    }

    public function getRemarkSplit()
    {
        return $this->apiParas['remarkSplit'];
    }

    public function setRemarkSplit($remarkSplit)
    {
        $this->apiParas['remarkSplit'] = $remarkSplit;

        return $this;
    }

    public function getPackageModelNosSplit()
    {
        return $this->apiParas['packageModelNosSplit'];
    }

    public function setPackageModelNosSplit($packageModelNosSplit)
    {
        $this->apiParas['packageModelNosSplit'] = $packageModelNosSplit;

        return $this;
    }

    public function getQingzhenOnSplit()
    {
        return $this->apiParas['qingzhenOnSplit'];
    }

    public function setQingzhenOnSplit($qingzhenOnSplit)
    {
        $this->apiParas['qingzhenOnSplit'] = $qingzhenOnSplit;

        return $this;
    }

    public function getYiwuranOnSplit()
    {
        return $this->apiParas['yiwuranOnSplit'];
    }

    public function setYiwuranOnSplit($yiwuranOnSplit)
    {
        $this->apiParas['yiwuranOnSplit'] = $yiwuranOnSplit;

        return $this;
    }

    public function getReceiverNickNameSplit()
    {
        return $this->apiParas['receiverNickNameSplit'];
    }

    public function setReceiverNickNameSplit($receiverNickNameSplit)
    {
        $this->apiParas['receiverNickNameSplit'] = $receiverNickNameSplit;

        return $this;
    }

    public function getGuaranteeValueSplit()
    {
        return $this->apiParas['guaranteeValueSplit'];
    }

    public function setGuaranteeValueSplit($guaranteeValueSplit)
    {
        $this->apiParas['guaranteeValueSplit'] = $guaranteeValueSplit;

        return $this;
    }

    public function getHeavyUpstairSplit()
    {
        return $this->apiParas['heavyUpstairSplit'];
    }

    public function setHeavyUpstairSplit($heavyUpstairSplit)
    {
        $this->apiParas['heavyUpstairSplit'] = $heavyUpstairSplit;

        return $this;
    }

    public function getIsvOrderAmount()
    {
        return $this->apiParas['isvOrderAmount'];
    }

    public function setIsvOrderAmount($isvOrderAmount)
    {
        $this->apiParas['isvOrderAmount'] = $isvOrderAmount;

        return $this;
    }

    public function getTracker()
    {
        return $this->apiParas['tracker'];
    }

    public function setTracker($tracker)
    {
        $this->apiParas['tracker'] = $tracker;

        return $this;
    }

    public function getDeliveryMode()
    {
        return $this->apiParas['deliveryMode'];
    }

    public function setDeliveryMode($deliveryMode)
    {
        $this->apiParas['deliveryMode'] = $deliveryMode;

        return $this;
    }

    public function getWarehouseServiceType()
    {
        return $this->apiParas['warehouseServiceType'];
    }

    public function setWarehouseServiceType($warehouseServiceType)
    {
        $this->apiParas['warehouseServiceType'] = $warehouseServiceType;

        return $this;
    }

    public function getHomeDeliveryOn()
    {
        return $this->apiParas['homeDeliveryOn'];
    }

    public function setHomeDeliveryOn($homeDeliveryOn)
    {
        $this->apiParas['homeDeliveryOn'] = $homeDeliveryOn;

        return $this;
    }

    public function getSiteCode()
    {
        return $this->apiParas['siteCode'];
    }

    public function setSiteCode($siteCode)
    {
        $this->apiParas['siteCode'] = $siteCode;

        return $this;
    }

    public function getReferCancelDate()
    {
        return $this->apiParas['referCancelDate'];
    }

    public function setReferCancelDate($referCancelDate)
    {
        $this->apiParas['referCancelDate'] = $referCancelDate;

        return $this;
    }

    public function getRebackConfluenceOn()
    {
        return $this->apiParas['rebackConfluenceOn'];
    }

    public function setRebackConfluenceOn($rebackConfluenceOn)
    {
        $this->apiParas['rebackConfluenceOn'] = $rebackConfluenceOn;

        return $this;
    }

    public function getExpressDeliveryOn()
    {
        return $this->apiParas['expressDeliveryOn'];
    }

    public function setExpressDeliveryOn($expressDeliveryOn)
    {
        $this->apiParas['expressDeliveryOn'] = $expressDeliveryOn;

        return $this;
    }

    public function getExpectPickupDate()
    {
        return $this->apiParas['expectPickupDate'];
    }

    public function setExpectPickupDate($expectPickupDate)
    {
        $this->apiParas['expectPickupDate'] = $expectPickupDate;

        return $this;
    }

    public function getExpectDeliveryDate()
    {
        return $this->apiParas['expectDeliveryDate'];
    }

    public function setExpectDeliveryDate($expectDeliveryDate)
    {
        $this->apiParas['expectDeliveryDate'] = $expectDeliveryDate;

        return $this;
    }

    public function getWarehousePlatformName()
    {
        return $this->apiParas['warehousePlatformName'];
    }

    public function setWarehousePlatformName($warehousePlatformName)
    {
        $this->apiParas['warehousePlatformName'] = $warehousePlatformName;

        return $this;
    }

    public function getTemporaryStorage()
    {
        return $this->apiParas['temporaryStorage'];
    }

    public function setTemporaryStorage($temporaryStorage)
    {
        $this->apiParas['temporaryStorage'] = $temporaryStorage;

        return $this;
    }

    public function getPredictReceiptDate()
    {
        return $this->apiParas['predictReceiptDate'];
    }

    public function setPredictReceiptDate($predictReceiptDate)
    {
        $this->apiParas['predictReceiptDate'] = $predictReceiptDate;

        return $this;
    }

    public function getExtendFieldStr()
    {
        return $this->apiParas['extendFieldStr'];
    }

    public function setExtendFieldStr($extendFieldStr)
    {
        $this->apiParas['extendFieldStr'] = $extendFieldStr;

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

    public function getBackInfoOn()
    {
        return $this->apiParas['backInfoOn'];
    }

    public function setBackInfoOn($backInfoOn)
    {
        $this->apiParas['backInfoOn'] = $backInfoOn;

        return $this;
    }

    public function getBackName()
    {
        return $this->apiParas['backName'];
    }

    public function setBackName($backName)
    {
        $this->apiParas['backName'] = $backName;

        return $this;
    }

    public function getBackMobile()
    {
        return $this->apiParas['backMobile'];
    }

    public function setBackMobile($backMobile)
    {
        $this->apiParas['backMobile'] = $backMobile;

        return $this;
    }

    public function getBackPhone()
    {
        return $this->apiParas['backPhone'];
    }

    public function setBackPhone($backPhone)
    {
        $this->apiParas['backPhone'] = $backPhone;

        return $this;
    }

    public function getBackProvinceName()
    {
        return $this->apiParas['backProvinceName'];
    }

    public function setBackProvinceName($backProvinceName)
    {
        $this->apiParas['backProvinceName'] = $backProvinceName;

        return $this;
    }

    public function getBackCityName()
    {
        return $this->apiParas['backCityName'];
    }

    public function setBackCityName($backCityName)
    {
        $this->apiParas['backCityName'] = $backCityName;

        return $this;
    }

    public function getBackCountyName()
    {
        return $this->apiParas['backCountyName'];
    }

    public function setBackCountyName($backCountyName)
    {
        $this->apiParas['backCountyName'] = $backCountyName;

        return $this;
    }

    public function getBackTownName()
    {
        return $this->apiParas['backTownName'];
    }

    public function setBackTownName($backTownName)
    {
        $this->apiParas['backTownName'] = $backTownName;

        return $this;
    }

    public function getBackAddress()
    {
        return $this->apiParas['backAddress'];
    }

    public function setBackAddress($backAddress)
    {
        $this->apiParas['backAddress'] = $backAddress;

        return $this;
    }

    public function getImportFlag()
    {
        return $this->apiParas['importFlag'];
    }

    public function setImportFlag($importFlag)
    {
        $this->apiParas['importFlag'] = $importFlag;

        return $this;
    }

    public function getFileWithCargo()
    {
        return $this->apiParas['fileWithCargo'];
    }

    public function setFileWithCargo($fileWithCargo)
    {
        $this->apiParas['fileWithCargo'] = $fileWithCargo;

        return $this;
    }
}
