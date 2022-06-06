<?php

namespace ACES\Request;


class JcloudWmsSkuAcceptServiceHandlerUpdateRequest
{
    private $apiParas = array();
    private $version;
    private $code;
    private $tenantId;
    private $specification;
    private $model;
    private $ownerNo;
    private $name;
    private $foreignName;
    private $categoryCode;
    private $brand;
    private $barcodeType;
    private $barcodeArr;
    private $sizeType;
    private $weight;
    private $length;
    private $width;
    private $height;
    private $isShelfLife;
    private $shelfLife;
    private $isSerial;
    private $isHighValue;
    private $isLuxury;
    private $isFragile;
    private $memo;
    private $operateUser;
    private $operateTime;
    private $dangerLevel;
    private $manufactureSkuNo;
    private $erpSkuNo;

    public function getApiMethodName()
    {
        return "jingdong.jcloud.wms.SkuAcceptServiceHandler.update";
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

    public function getCode()
    {
        return $this->code;
    }

    public function setCode($code)
    {
        $this->code = $code;
        $this->apiParas["code"] = $code;
    }

    public function getTenantId()
    {
        return $this->tenantId;
    }

    public function setTenantId($tenantId)
    {
        $this->tenantId = $tenantId;
        $this->apiParas["tenantId"] = $tenantId;
    }

    public function getSpecification()
    {
        return $this->specification;
    }

    public function setSpecification($specification)
    {
        $this->specification = $specification;
        $this->apiParas["specification"] = $specification;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function setModel($model)
    {
        $this->model = $model;
        $this->apiParas["model"] = $model;
    }

    public function getOwnerNo()
    {
        return $this->ownerNo;
    }

    public function setOwnerNo($ownerNo)
    {
        $this->ownerNo = $ownerNo;
        $this->apiParas["ownerNo"] = $ownerNo;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
        $this->apiParas["name"] = $name;
    }

    public function getForeignName()
    {
        return $this->foreignName;
    }

    public function setForeignName($foreignName)
    {
        $this->foreignName = $foreignName;
        $this->apiParas["foreignName"] = $foreignName;
    }

    public function getCategoryCode()
    {
        return $this->categoryCode;
    }

    public function setCategoryCode($categoryCode)
    {
        $this->categoryCode = $categoryCode;
        $this->apiParas["categoryCode"] = $categoryCode;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function setBrand($brand)
    {
        $this->brand = $brand;
        $this->apiParas["brand"] = $brand;
    }

    public function getBarcodeType()
    {
        return $this->barcodeType;
    }

    public function setBarcodeType($barcodeType)
    {
        $this->barcodeType = $barcodeType;
        $this->apiParas["barcodeType"] = $barcodeType;
    }

    public function getBarcodeArr()
    {
        return $this->barcodeArr;
    }

    public function setBarcodeArr($barcodeArr)
    {
        $this->barcodeArr = $barcodeArr;
        $this->apiParas["barcodeArr"] = $barcodeArr;
    }

    public function getSizeType()
    {
        return $this->sizeType;
    }

    public function setSizeType($sizeType)
    {
        $this->sizeType = $sizeType;
        $this->apiParas["sizeType"] = $sizeType;
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

    public function getLength()
    {
        return $this->length;
    }

    public function setLength($length)
    {
        $this->length = $length;
        $this->apiParas["length"] = $length;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function setWidth($width)
    {
        $this->width = $width;
        $this->apiParas["width"] = $width;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setHeight($height)
    {
        $this->height = $height;
        $this->apiParas["height"] = $height;
    }

    public function getIsShelfLife()
    {
        return $this->isShelfLife;
    }

    public function setIsShelfLife($isShelfLife)
    {
        $this->isShelfLife = $isShelfLife;
        $this->apiParas["isShelfLife"] = $isShelfLife;
    }

    public function getShelfLife()
    {
        return $this->shelfLife;
    }

    public function setShelfLife($shelfLife)
    {
        $this->shelfLife = $shelfLife;
        $this->apiParas["shelfLife"] = $shelfLife;
    }

    public function getIsSerial()
    {
        return $this->isSerial;
    }

    public function setIsSerial($isSerial)
    {
        $this->isSerial = $isSerial;
        $this->apiParas["isSerial"] = $isSerial;
    }

    public function getIsHighValue()
    {
        return $this->isHighValue;
    }

    public function setIsHighValue($isHighValue)
    {
        $this->isHighValue = $isHighValue;
        $this->apiParas["isHighValue"] = $isHighValue;
    }

    public function getIsLuxury()
    {
        return $this->isLuxury;
    }

    public function setIsLuxury($isLuxury)
    {
        $this->isLuxury = $isLuxury;
        $this->apiParas["isLuxury"] = $isLuxury;
    }

    public function getIsFragile()
    {
        return $this->isFragile;
    }

    public function setIsFragile($isFragile)
    {
        $this->isFragile = $isFragile;
        $this->apiParas["isFragile"] = $isFragile;
    }

    public function getMemo()
    {
        return $this->memo;
    }

    public function setMemo($memo)
    {
        $this->memo = $memo;
        $this->apiParas["memo"] = $memo;
    }

    public function getOperateUser()
    {
        return $this->operateUser;
    }

    public function setOperateUser($operateUser)
    {
        $this->operateUser = $operateUser;
        $this->apiParas["operateUser"] = $operateUser;
    }

    public function getOperateTime()
    {
        return $this->operateTime;
    }

    public function setOperateTime($operateTime)
    {
        $this->operateTime = $operateTime;
        $this->apiParas["operateTime"] = $operateTime;
    }

    public function getDangerLevel()
    {
        return $this->dangerLevel;
    }

    public function setDangerLevel($dangerLevel)
    {
        $this->dangerLevel = $dangerLevel;
        $this->apiParas["dangerLevel"] = $dangerLevel;
    }

    public function getManufactureSkuNo()
    {
        return $this->manufactureSkuNo;
    }

    public function setManufactureSkuNo($manufactureSkuNo)
    {
        $this->manufactureSkuNo = $manufactureSkuNo;
        $this->apiParas["manufactureSkuNo"] = $manufactureSkuNo;
    }

    public function getErpSkuNo()
    {
        return $this->erpSkuNo;
    }

    public function setErpSkuNo($erpSkuNo)
    {
        $this->erpSkuNo = $erpSkuNo;
        $this->apiParas["erpSkuNo"] = $erpSkuNo;
    }
}
