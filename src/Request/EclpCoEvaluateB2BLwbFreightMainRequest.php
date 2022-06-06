<?php

namespace ACES\Request;


class EclpCoEvaluateB2BLwbFreightMainRequest
{
    private $apiParas = array();
    private $version;
    private $orderNo;
    private $deptNo;
    private $senderNickName;
    private $senderName;
    private $senderMobile;
    private $senderPhone;
    private $senderProvince;
    private $senderCity;
    private $senderCounty;
    private $senderTown;
    private $senderProvinceName;
    private $senderCityName;
    private $senderCountyName;
    private $senderTownName;
    private $senderAddress;
    private $receiverNickName;
    private $receiverName;
    private $receiverMobile;
    private $receiverPhone;
    private $receiverProvince;
    private $receiverCity;
    private $receiverCounty;
    private $receiverTown;
    private $receiverProvinceName;
    private $receiverCityName;
    private $receiverCountyName;
    private $receiverTownName;
    private $remark;
    private $grossWeight;
    private $grossVolume;
    private $createTime;
    private $createUser;
    private $receivable;
    private $isCod;
    private $vehicleTypeName;
    private $vehicleTypeNo;
    private $vehicleQty;
    private $expressItemName;
    private $expressItemQty;
    private $signReceiptFlag;
    private $deliveryReceiptFlag;
    private $deliveryIntoWarehouse;
    private $loadFlag;
    private $unloadFlag;
    private $receiptFlag;
    private $fcFlag;
    private $guaranteeValue;
    private $pickupBeginTime;
    private $pickupEndTime;
    private $bussinessType;
    private $deliveryType;
    private $senderCompany;
    private $receiverCompany;
    private $receiverAddress;
    private $warehouseCode;
    private $projectName;
    private $actualSpId;
    private $coldChainOn;
    private $temptureNum;
    private $qingzhenOn;
    private $yiwuranOn;
    private $inStorageNo;
    private $inStorageTime;
    private $inStorageRemark;
    private $heavyUpstair;
    private $wayBillCode;

    public function getApiMethodName()
    {
        return "jingdong.eclp.co.evaluateB2BLwbFreightMain";
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

    public function getOrderNo()
    {
        return $this->orderNo;
    }

    public function setOrderNo($orderNo)
    {
        $this->orderNo = $orderNo;
        $this->apiParas["orderNo"] = $orderNo;
    }

    public function getDeptNo()
    {
        return $this->deptNo;
    }

    public function setDeptNo($deptNo)
    {
        $this->deptNo = $deptNo;
        $this->apiParas["deptNo"] = $deptNo;
    }

    public function getSenderNickName()
    {
        return $this->senderNickName;
    }

    public function setSenderNickName($senderNickName)
    {
        $this->senderNickName = $senderNickName;
        $this->apiParas["senderNickName"] = $senderNickName;
    }

    public function getSenderName()
    {
        return $this->senderName;
    }

    public function setSenderName($senderName)
    {
        $this->senderName = $senderName;
        $this->apiParas["senderName"] = $senderName;
    }

    public function getSenderMobile()
    {
        return $this->senderMobile;
    }

    public function setSenderMobile($senderMobile)
    {
        $this->senderMobile = $senderMobile;
        $this->apiParas["senderMobile"] = $senderMobile;
    }

    public function getSenderPhone()
    {
        return $this->senderPhone;
    }

    public function setSenderPhone($senderPhone)
    {
        $this->senderPhone = $senderPhone;
        $this->apiParas["senderPhone"] = $senderPhone;
    }

    public function getSenderProvince()
    {
        return $this->senderProvince;
    }

    public function setSenderProvince($senderProvince)
    {
        $this->senderProvince = $senderProvince;
        $this->apiParas["senderProvince"] = $senderProvince;
    }

    public function getSenderCity()
    {
        return $this->senderCity;
    }

    public function setSenderCity($senderCity)
    {
        $this->senderCity = $senderCity;
        $this->apiParas["senderCity"] = $senderCity;
    }

    public function getSenderCounty()
    {
        return $this->senderCounty;
    }

    public function setSenderCounty($senderCounty)
    {
        $this->senderCounty = $senderCounty;
        $this->apiParas["senderCounty"] = $senderCounty;
    }

    public function getSenderTown()
    {
        return $this->senderTown;
    }

    public function setSenderTown($senderTown)
    {
        $this->senderTown = $senderTown;
        $this->apiParas["senderTown"] = $senderTown;
    }

    public function getSenderProvinceName()
    {
        return $this->senderProvinceName;
    }

    public function setSenderProvinceName($senderProvinceName)
    {
        $this->senderProvinceName = $senderProvinceName;
        $this->apiParas["senderProvinceName"] = $senderProvinceName;
    }

    public function getSenderCityName()
    {
        return $this->senderCityName;
    }

    public function setSenderCityName($senderCityName)
    {
        $this->senderCityName = $senderCityName;
        $this->apiParas["senderCityName"] = $senderCityName;
    }

    public function getSenderCountyName()
    {
        return $this->senderCountyName;
    }

    public function setSenderCountyName($senderCountyName)
    {
        $this->senderCountyName = $senderCountyName;
        $this->apiParas["senderCountyName"] = $senderCountyName;
    }

    public function getSenderTownName()
    {
        return $this->senderTownName;
    }

    public function setSenderTownName($senderTownName)
    {
        $this->senderTownName = $senderTownName;
        $this->apiParas["senderTownName"] = $senderTownName;
    }

    public function getSenderAddress()
    {
        return $this->senderAddress;
    }

    public function setSenderAddress($senderAddress)
    {
        $this->senderAddress = $senderAddress;
        $this->apiParas["senderAddress"] = $senderAddress;
    }

    public function getReceiverNickName()
    {
        return $this->receiverNickName;
    }

    public function setReceiverNickName($receiverNickName)
    {
        $this->receiverNickName = $receiverNickName;
        $this->apiParas["receiverNickName"] = $receiverNickName;
    }

    public function getReceiverName()
    {
        return $this->receiverName;
    }

    public function setReceiverName($receiverName)
    {
        $this->receiverName = $receiverName;
        $this->apiParas["receiverName"] = $receiverName;
    }

    public function getReceiverMobile()
    {
        return $this->receiverMobile;
    }

    public function setReceiverMobile($receiverMobile)
    {
        $this->receiverMobile = $receiverMobile;
        $this->apiParas["receiverMobile"] = $receiverMobile;
    }

    public function getReceiverPhone()
    {
        return $this->receiverPhone;
    }

    public function setReceiverPhone($receiverPhone)
    {
        $this->receiverPhone = $receiverPhone;
        $this->apiParas["receiverPhone"] = $receiverPhone;
    }

    public function getReceiverProvince()
    {
        return $this->receiverProvince;
    }

    public function setReceiverProvince($receiverProvince)
    {
        $this->receiverProvince = $receiverProvince;
        $this->apiParas["receiverProvince"] = $receiverProvince;
    }

    public function getReceiverCity()
    {
        return $this->receiverCity;
    }

    public function setReceiverCity($receiverCity)
    {
        $this->receiverCity = $receiverCity;
        $this->apiParas["receiverCity"] = $receiverCity;
    }

    public function getReceiverCounty()
    {
        return $this->receiverCounty;
    }

    public function setReceiverCounty($receiverCounty)
    {
        $this->receiverCounty = $receiverCounty;
        $this->apiParas["receiverCounty"] = $receiverCounty;
    }

    public function getReceiverTown()
    {
        return $this->receiverTown;
    }

    public function setReceiverTown($receiverTown)
    {
        $this->receiverTown = $receiverTown;
        $this->apiParas["receiverTown"] = $receiverTown;
    }

    public function getReceiverProvinceName()
    {
        return $this->receiverProvinceName;
    }

    public function setReceiverProvinceName($receiverProvinceName)
    {
        $this->receiverProvinceName = $receiverProvinceName;
        $this->apiParas["receiverProvinceName"] = $receiverProvinceName;
    }

    public function getReceiverCityName()
    {
        return $this->receiverCityName;
    }

    public function setReceiverCityName($receiverCityName)
    {
        $this->receiverCityName = $receiverCityName;
        $this->apiParas["receiverCityName"] = $receiverCityName;
    }

    public function getReceiverCountyName()
    {
        return $this->receiverCountyName;
    }

    public function setReceiverCountyName($receiverCountyName)
    {
        $this->receiverCountyName = $receiverCountyName;
        $this->apiParas["receiverCountyName"] = $receiverCountyName;
    }

    public function getReceiverTownName()
    {
        return $this->receiverTownName;
    }

    public function setReceiverTownName($receiverTownName)
    {
        $this->receiverTownName = $receiverTownName;
        $this->apiParas["receiverTownName"] = $receiverTownName;
    }

    public function getRemark()
    {
        return $this->remark;
    }

    public function setRemark($remark)
    {
        $this->remark = $remark;
        $this->apiParas["remark"] = $remark;
    }

    public function getGrossWeight()
    {
        return $this->grossWeight;
    }

    public function setGrossWeight($grossWeight)
    {
        $this->grossWeight = $grossWeight;
        $this->apiParas["grossWeight"] = $grossWeight;
    }

    public function getGrossVolume()
    {
        return $this->grossVolume;
    }

    public function setGrossVolume($grossVolume)
    {
        $this->grossVolume = $grossVolume;
        $this->apiParas["grossVolume"] = $grossVolume;
    }

    public function getCreateTime()
    {
        return $this->createTime;
    }

    public function setCreateTime($createTime)
    {
        $this->createTime = $createTime;
        $this->apiParas["createTime"] = $createTime;
    }

    public function getCreateUser()
    {
        return $this->createUser;
    }

    public function setCreateUser($createUser)
    {
        $this->createUser = $createUser;
        $this->apiParas["createUser"] = $createUser;
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

    public function getIsCod()
    {
        return $this->isCod;
    }

    public function setIsCod($isCod)
    {
        $this->isCod = $isCod;
        $this->apiParas["isCod"] = $isCod;
    }

    public function getVehicleTypeName()
    {
        return $this->vehicleTypeName;
    }

    public function setVehicleTypeName($vehicleTypeName)
    {
        $this->vehicleTypeName = $vehicleTypeName;
        $this->apiParas["vehicleTypeName"] = $vehicleTypeName;
    }

    public function getVehicleTypeNo()
    {
        return $this->vehicleTypeNo;
    }

    public function setVehicleTypeNo($vehicleTypeNo)
    {
        $this->vehicleTypeNo = $vehicleTypeNo;
        $this->apiParas["vehicleTypeNo"] = $vehicleTypeNo;
    }

    public function getVehicleQty()
    {
        return $this->vehicleQty;
    }

    public function setVehicleQty($vehicleQty)
    {
        $this->vehicleQty = $vehicleQty;
        $this->apiParas["vehicleQty"] = $vehicleQty;
    }

    public function getExpressItemName()
    {
        return $this->expressItemName;
    }

    public function setExpressItemName($expressItemName)
    {
        $this->expressItemName = $expressItemName;
        $this->apiParas["expressItemName"] = $expressItemName;
    }

    public function getExpressItemQty()
    {
        return $this->expressItemQty;
    }

    public function setExpressItemQty($expressItemQty)
    {
        $this->expressItemQty = $expressItemQty;
        $this->apiParas["expressItemQty"] = $expressItemQty;
    }

    public function getSignReceiptFlag()
    {
        return $this->signReceiptFlag;
    }

    public function setSignReceiptFlag($signReceiptFlag)
    {
        $this->signReceiptFlag = $signReceiptFlag;
        $this->apiParas["signReceiptFlag"] = $signReceiptFlag;
    }

    public function getDeliveryReceiptFlag()
    {
        return $this->deliveryReceiptFlag;
    }

    public function setDeliveryReceiptFlag($deliveryReceiptFlag)
    {
        $this->deliveryReceiptFlag = $deliveryReceiptFlag;
        $this->apiParas["deliveryReceiptFlag"] = $deliveryReceiptFlag;
    }

    public function getDeliveryIntoWarehouse()
    {
        return $this->deliveryIntoWarehouse;
    }

    public function setDeliveryIntoWarehouse($deliveryIntoWarehouse)
    {
        $this->deliveryIntoWarehouse = $deliveryIntoWarehouse;
        $this->apiParas["deliveryIntoWarehouse"] = $deliveryIntoWarehouse;
    }

    public function getLoadFlag()
    {
        return $this->loadFlag;
    }

    public function setLoadFlag($loadFlag)
    {
        $this->loadFlag = $loadFlag;
        $this->apiParas["loadFlag"] = $loadFlag;
    }

    public function getUnloadFlag()
    {
        return $this->unloadFlag;
    }

    public function setUnloadFlag($unloadFlag)
    {
        $this->unloadFlag = $unloadFlag;
        $this->apiParas["unloadFlag"] = $unloadFlag;
    }

    public function getReceiptFlag()
    {
        return $this->receiptFlag;
    }

    public function setReceiptFlag($receiptFlag)
    {
        $this->receiptFlag = $receiptFlag;
        $this->apiParas["receiptFlag"] = $receiptFlag;
    }

    public function getFcFlag()
    {
        return $this->fcFlag;
    }

    public function setFcFlag($fcFlag)
    {
        $this->fcFlag = $fcFlag;
        $this->apiParas["fcFlag"] = $fcFlag;
    }

    public function getGuaranteeValue()
    {
        return $this->guaranteeValue;
    }

    public function setGuaranteeValue($guaranteeValue)
    {
        $this->guaranteeValue = $guaranteeValue;
        $this->apiParas["guaranteeValue"] = $guaranteeValue;
    }

    public function getPickupBeginTime()
    {
        return $this->pickupBeginTime;
    }

    public function setPickupBeginTime($pickupBeginTime)
    {
        $this->pickupBeginTime = $pickupBeginTime;
        $this->apiParas["pickupBeginTime"] = $pickupBeginTime;
    }

    public function getPickupEndTime()
    {
        return $this->pickupEndTime;
    }

    public function setPickupEndTime($pickupEndTime)
    {
        $this->pickupEndTime = $pickupEndTime;
        $this->apiParas["pickupEndTime"] = $pickupEndTime;
    }

    public function getBussinessType()
    {
        return $this->bussinessType;
    }

    public function setBussinessType($bussinessType)
    {
        $this->bussinessType = $bussinessType;
        $this->apiParas["bussinessType"] = $bussinessType;
    }

    public function getDeliveryType()
    {
        return $this->deliveryType;
    }

    public function setDeliveryType($deliveryType)
    {
        $this->deliveryType = $deliveryType;
        $this->apiParas["deliveryType"] = $deliveryType;
    }

    public function getSenderCompany()
    {
        return $this->senderCompany;
    }

    public function setSenderCompany($senderCompany)
    {
        $this->senderCompany = $senderCompany;
        $this->apiParas["senderCompany"] = $senderCompany;
    }

    public function getReceiverCompany()
    {
        return $this->receiverCompany;
    }

    public function setReceiverCompany($receiverCompany)
    {
        $this->receiverCompany = $receiverCompany;
        $this->apiParas["receiverCompany"] = $receiverCompany;
    }

    public function getReceiverAddress()
    {
        return $this->receiverAddress;
    }

    public function setReceiverAddress($receiverAddress)
    {
        $this->receiverAddress = $receiverAddress;
        $this->apiParas["receiverAddress"] = $receiverAddress;
    }

    public function getWarehouseCode()
    {
        return $this->warehouseCode;
    }

    public function setWarehouseCode($warehouseCode)
    {
        $this->warehouseCode = $warehouseCode;
        $this->apiParas["warehouseCode"] = $warehouseCode;
    }

    public function getProjectName()
    {
        return $this->projectName;
    }

    public function setProjectName($projectName)
    {
        $this->projectName = $projectName;
        $this->apiParas["projectName"] = $projectName;
    }

    public function getActualSpId()
    {
        return $this->actualSpId;
    }

    public function setActualSpId($actualSpId)
    {
        $this->actualSpId = $actualSpId;
        $this->apiParas["actualSpId"] = $actualSpId;
    }

    public function getColdChainOn()
    {
        return $this->coldChainOn;
    }

    public function setColdChainOn($coldChainOn)
    {
        $this->coldChainOn = $coldChainOn;
        $this->apiParas["coldChainOn"] = $coldChainOn;
    }

    public function getTemptureNum()
    {
        return $this->temptureNum;
    }

    public function setTemptureNum($temptureNum)
    {
        $this->temptureNum = $temptureNum;
        $this->apiParas["temptureNum"] = $temptureNum;
    }

    public function getQingzhenOn()
    {
        return $this->qingzhenOn;
    }

    public function setQingzhenOn($qingzhenOn)
    {
        $this->qingzhenOn = $qingzhenOn;
        $this->apiParas["qingzhenOn"] = $qingzhenOn;
    }

    public function getYiwuranOn()
    {
        return $this->yiwuranOn;
    }

    public function setYiwuranOn($yiwuranOn)
    {
        $this->yiwuranOn = $yiwuranOn;
        $this->apiParas["yiwuranOn"] = $yiwuranOn;
    }

    public function getInStorageNo()
    {
        return $this->inStorageNo;
    }

    public function setInStorageNo($inStorageNo)
    {
        $this->inStorageNo = $inStorageNo;
        $this->apiParas["inStorageNo"] = $inStorageNo;
    }

    public function getInStorageTime()
    {
        return $this->inStorageTime;
    }

    public function setInStorageTime($inStorageTime)
    {
        $this->inStorageTime = $inStorageTime;
        $this->apiParas["inStorageTime"] = $inStorageTime;
    }

    public function getInStorageRemark()
    {
        return $this->inStorageRemark;
    }

    public function setInStorageRemark($inStorageRemark)
    {
        $this->inStorageRemark = $inStorageRemark;
        $this->apiParas["inStorageRemark"] = $inStorageRemark;
    }

    public function getHeavyUpstair()
    {
        return $this->heavyUpstair;
    }

    public function setHeavyUpstair($heavyUpstair)
    {
        $this->heavyUpstair = $heavyUpstair;
        $this->apiParas["heavyUpstair"] = $heavyUpstair;
    }

    public function getWayBillCode()
    {
        return $this->wayBillCode;
    }

    public function setWayBillCode($wayBillCode)
    {
        $this->wayBillCode = $wayBillCode;
        $this->apiParas["wayBillCode"] = $wayBillCode;
    }
}
