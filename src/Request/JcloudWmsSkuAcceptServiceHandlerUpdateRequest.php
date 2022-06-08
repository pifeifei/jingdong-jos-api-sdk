<?php

namespace ACES\Request;

class JcloudWmsSkuAcceptServiceHandlerUpdateRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.jcloud.wms.SkuAcceptServiceHandler.update';
    }

    public function check()
    {
    }

    public function getCode()
    {
        return $this->apiParas['code'];
    }

    public function setCode($code)
    {
        $this->apiParas['code'] = $code;

        return $this;
    }

    public function getTenantId()
    {
        return $this->apiParas['tenantId'];
    }

    public function setTenantId($tenantId)
    {
        $this->apiParas['tenantId'] = $tenantId;

        return $this;
    }

    public function getSpecification()
    {
        return $this->apiParas['specification'];
    }

    public function setSpecification($specification)
    {
        $this->apiParas['specification'] = $specification;

        return $this;
    }

    public function getModel()
    {
        return $this->apiParas['model'];
    }

    public function setModel($model)
    {
        $this->apiParas['model'] = $model;

        return $this;
    }

    public function getOwnerNo()
    {
        return $this->apiParas['ownerNo'];
    }

    public function setOwnerNo($ownerNo)
    {
        $this->apiParas['ownerNo'] = $ownerNo;

        return $this;
    }

    public function getName()
    {
        return $this->apiParas['name'];
    }

    public function setName($name)
    {
        $this->apiParas['name'] = $name;

        return $this;
    }

    public function getForeignName()
    {
        return $this->apiParas['foreignName'];
    }

    public function setForeignName($foreignName)
    {
        $this->apiParas['foreignName'] = $foreignName;

        return $this;
    }

    public function getCategoryCode()
    {
        return $this->apiParas['categoryCode'];
    }

    public function setCategoryCode($categoryCode)
    {
        $this->apiParas['categoryCode'] = $categoryCode;

        return $this;
    }

    public function getBrand()
    {
        return $this->apiParas['brand'];
    }

    public function setBrand($brand)
    {
        $this->apiParas['brand'] = $brand;

        return $this;
    }

    public function getBarcodeType()
    {
        return $this->apiParas['barcodeType'];
    }

    public function setBarcodeType($barcodeType)
    {
        $this->apiParas['barcodeType'] = $barcodeType;

        return $this;
    }

    public function getBarcodeArr()
    {
        return $this->apiParas['barcodeArr'];
    }

    public function setBarcodeArr($barcodeArr)
    {
        $this->apiParas['barcodeArr'] = $barcodeArr;

        return $this;
    }

    public function getSizeType()
    {
        return $this->apiParas['sizeType'];
    }

    public function setSizeType($sizeType)
    {
        $this->apiParas['sizeType'] = $sizeType;

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

    public function getLength()
    {
        return $this->apiParas['length'];
    }

    public function setLength($length)
    {
        $this->apiParas['length'] = $length;

        return $this;
    }

    public function getWidth()
    {
        return $this->apiParas['width'];
    }

    public function setWidth($width)
    {
        $this->apiParas['width'] = $width;

        return $this;
    }

    public function getHeight()
    {
        return $this->apiParas['height'];
    }

    public function setHeight($height)
    {
        $this->apiParas['height'] = $height;

        return $this;
    }

    public function getIsShelfLife()
    {
        return $this->apiParas['isShelfLife'];
    }

    public function setIsShelfLife($isShelfLife)
    {
        $this->apiParas['isShelfLife'] = $isShelfLife;

        return $this;
    }

    public function getShelfLife()
    {
        return $this->apiParas['shelfLife'];
    }

    public function setShelfLife($shelfLife)
    {
        $this->apiParas['shelfLife'] = $shelfLife;

        return $this;
    }

    public function getIsSerial()
    {
        return $this->apiParas['isSerial'];
    }

    public function setIsSerial($isSerial)
    {
        $this->apiParas['isSerial'] = $isSerial;

        return $this;
    }

    public function getIsHighValue()
    {
        return $this->apiParas['isHighValue'];
    }

    public function setIsHighValue($isHighValue)
    {
        $this->apiParas['isHighValue'] = $isHighValue;

        return $this;
    }

    public function getIsLuxury()
    {
        return $this->apiParas['isLuxury'];
    }

    public function setIsLuxury($isLuxury)
    {
        $this->apiParas['isLuxury'] = $isLuxury;

        return $this;
    }

    public function getIsFragile()
    {
        return $this->apiParas['isFragile'];
    }

    public function setIsFragile($isFragile)
    {
        $this->apiParas['isFragile'] = $isFragile;

        return $this;
    }

    public function getMemo()
    {
        return $this->apiParas['memo'];
    }

    public function setMemo($memo)
    {
        $this->apiParas['memo'] = $memo;

        return $this;
    }

    public function getOperateUser()
    {
        return $this->apiParas['operateUser'];
    }

    public function setOperateUser($operateUser)
    {
        $this->apiParas['operateUser'] = $operateUser;

        return $this;
    }

    public function getOperateTime()
    {
        return $this->apiParas['operateTime'];
    }

    public function setOperateTime($operateTime)
    {
        $this->apiParas['operateTime'] = $operateTime;

        return $this;
    }

    public function getDangerLevel()
    {
        return $this->apiParas['dangerLevel'];
    }

    public function setDangerLevel($dangerLevel)
    {
        $this->apiParas['dangerLevel'] = $dangerLevel;

        return $this;
    }

    public function getManufactureSkuNo()
    {
        return $this->apiParas['manufactureSkuNo'];
    }

    public function setManufactureSkuNo($manufactureSkuNo)
    {
        $this->apiParas['manufactureSkuNo'] = $manufactureSkuNo;

        return $this;
    }

    public function getErpSkuNo()
    {
        return $this->apiParas['erpSkuNo'];
    }

    public function setErpSkuNo($erpSkuNo)
    {
        $this->apiParas['erpSkuNo'] = $erpSkuNo;

        return $this;
    }
}
