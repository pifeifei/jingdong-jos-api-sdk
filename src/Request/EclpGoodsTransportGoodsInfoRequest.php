<?php

namespace ACES\Request;


class EclpGoodsTransportGoodsInfoRequest
{
    private $apiParas = array();
    private $version;
    private $deptNo;
    private $isvGoodsNo;
    private $spGoodsNo;
    private $barcodes;
    private $thirdCategoryNo;
    private $goodsName;
    private $abbreviation;
    private $brandNo;
    private $brandName;
    private $manufacturer;
    private $produceAddress;
    private $standard;
    private $color;
    private $size;
    private $sizeDefinition;
    private $grossWeight;
    private $netWeight;
    private $length;
    private $width;
    private $height;
    private $safeDays;
    private $instoreThreshold;
    private $outstoreThreshold;
    private $serial;
    private $batch;
    private $cheapGift;
    private $quality;
    private $expensive;
    private $luxury;
    private $breakable;
    private $liquid;
    private $consumables;
    private $abnormal;
    private $imported;
    private $health;
    private $temperature;
    private $temperatureCeil;
    private $temperatureFloor;
    private $humidity;
    private $humidityCeil;
    private $humidityFloor;
    private $movable;
    private $service3g;
    private $sample;
    private $odor;
    private $sex;
    private $precious;
    private $mixedBatch;
    private $reserve1;
    private $reserve2;
    private $reserve3;
    private $reserve4;
    private $reserve5;
    private $reserve6;
    private $reserve7;
    private $reserve8;
    private $reserve9;
    private $reserve10;
    private $fashionNo;
    private $goodsUnit;
    private $customMade;
    private $signType;
    private $overseaPurchase;
    private $qiRecord;
    private $customRecord;
    private $pattern;
    private $ccProvider;
    private $bondedArea;
    private $sellerRecord;
    private $batAttrIds;
    private $needJDRecord;
    private $modelNumber;
    private $spe;
    private $vatRate;
    private $taxRate;
    private $taxNumberPost;
    private $postRate;
    private $hsCode;
    private $country;
    private $qiCountry;
    private $flag;
    private $legalUnit1;
    private $legalAmount1;
    private $legalUnit2;
    private $legalAmount2;
    private $measurement;
    private $qiMeasurement;
    private $delivery;
    private $contraband;
    private $storeProperty;
    private $productCategory;
    private $category;
    private $approvalNo;
    private $storage;
    private $form;
    private $type;
    private $specification;
    private $genericName;
    private $dosage;
    private $useMethods;
    private $packingUnit;
    private $efficacy;
    private $manufactory;
    private $price;
    private $storeSaleFlag;
    private $keyMaintenance;
    private $specialDrugs;
    private $marketingAuthorizationHolder;
    private $boxRule;
    private $warningDay;
    private $regularAdventDay;
    private $urgentAdventDay;
    private $adventDay;
    private $easyPollute;
    private $muslim;
    private $boxRegulations;
    private $allowedDay;
    private $sellerFirstCategory;
    private $sellerSecondCategory;
    private $sellerThirdCategory;
    private $sellerFirstCategoryNo;
    private $sellerSecondCategoryNo;
    private $sellerThirdCategoryNo;
    private $athletesUseCaution;
    private $elecSupervisionCodeFlag;
    private $hgsbys;
    private $largeCargoTransport;
    private $uniqueCode;
    private $productLine;
    private $isStandardInstrument;
    private $isColdChain;
    private $isDetachablePackage;
    private $certificateNo;
    private $businessTypeName;
    private $ownerTypeName;
    private $packageTypeName;
    private $materialTypeName;
    private $model;
    private $clothingAttr;
    private $clothingStyle;
    private $clothingVersionType;
    private $clothingSilhouette;
    private $clothingThickness;
    private $clothingWeek;
    private $bodyParts;
    private $styleSex;
    private $listedBand;
    private $expectListedTime;
    private $fabric;
    private $washing;
    private $year;
    private $productSeason;
    private $afterSaleFlag;
    private $productionLicenseNo;
    private $transportTemperature;
    private $boxUniqueCode;
    private $auxiliary;
    private $goodsNameEn;
    private $minSaleQuantity;
    private $minPackageQuantity;
    private $packageInstruction;
    private $texture;
    private $substrate;
    private $executiveStandard;
    private $processTechnology;
    private $sortCode;
    private $allSerial;
    private $isRcvDate;
    private $imgUrls;
    private $renewPackage;
    private $warehouseInsured;
    private $transportInsured;

    public function getApiMethodName()
    {
        return "jingdong.eclp.goods.transportGoodsInfo";
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

    public function getDeptNo()
    {
        return $this->deptNo;
    }

    public function setDeptNo($deptNo)
    {
        $this->deptNo = $deptNo;
        $this->apiParas["deptNo"] = $deptNo;
    }

    public function getIsvGoodsNo()
    {
        return $this->isvGoodsNo;
    }

    public function setIsvGoodsNo($isvGoodsNo)
    {
        $this->isvGoodsNo = $isvGoodsNo;
        $this->apiParas["isvGoodsNo"] = $isvGoodsNo;
    }

    public function getSpGoodsNo()
    {
        return $this->spGoodsNo;
    }

    public function setSpGoodsNo($spGoodsNo)
    {
        $this->spGoodsNo = $spGoodsNo;
        $this->apiParas["spGoodsNo"] = $spGoodsNo;
    }

    public function getBarcodes()
    {
        return $this->barcodes;
    }

    public function setBarcodes($barcodes)
    {
        $this->barcodes = $barcodes;
        $this->apiParas["barcodes"] = $barcodes;
    }

    public function getThirdCategoryNo()
    {
        return $this->thirdCategoryNo;
    }

    public function setThirdCategoryNo($thirdCategoryNo)
    {
        $this->thirdCategoryNo = $thirdCategoryNo;
        $this->apiParas["thirdCategoryNo"] = $thirdCategoryNo;
    }

    public function getGoodsName()
    {
        return $this->goodsName;
    }

    public function setGoodsName($goodsName)
    {
        $this->goodsName = $goodsName;
        $this->apiParas["goodsName"] = $goodsName;
    }

    public function getAbbreviation()
    {
        return $this->abbreviation;
    }

    public function setAbbreviation($abbreviation)
    {
        $this->abbreviation = $abbreviation;
        $this->apiParas["abbreviation"] = $abbreviation;
    }

    public function getBrandNo()
    {
        return $this->brandNo;
    }

    public function setBrandNo($brandNo)
    {
        $this->brandNo = $brandNo;
        $this->apiParas["brandNo"] = $brandNo;
    }

    public function getBrandName()
    {
        return $this->brandName;
    }

    public function setBrandName($brandName)
    {
        $this->brandName = $brandName;
        $this->apiParas["brandName"] = $brandName;
    }

    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;
        $this->apiParas["manufacturer"] = $manufacturer;
    }

    public function getProduceAddress()
    {
        return $this->produceAddress;
    }

    public function setProduceAddress($produceAddress)
    {
        $this->produceAddress = $produceAddress;
        $this->apiParas["produceAddress"] = $produceAddress;
    }

    public function getStandard()
    {
        return $this->standard;
    }

    public function setStandard($standard)
    {
        $this->standard = $standard;
        $this->apiParas["standard"] = $standard;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
        $this->apiParas["color"] = $color;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function setSize($size)
    {
        $this->size = $size;
        $this->apiParas["size"] = $size;
    }

    public function getSizeDefinition()
    {
        return $this->sizeDefinition;
    }

    public function setSizeDefinition($sizeDefinition)
    {
        $this->sizeDefinition = $sizeDefinition;
        $this->apiParas["sizeDefinition"] = $sizeDefinition;
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

    public function getNetWeight()
    {
        return $this->netWeight;
    }

    public function setNetWeight($netWeight)
    {
        $this->netWeight = $netWeight;
        $this->apiParas["netWeight"] = $netWeight;
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

    public function getSafeDays()
    {
        return $this->safeDays;
    }

    public function setSafeDays($safeDays)
    {
        $this->safeDays = $safeDays;
        $this->apiParas["safeDays"] = $safeDays;
    }

    public function getInstoreThreshold()
    {
        return $this->instoreThreshold;
    }

    public function setInstoreThreshold($instoreThreshold)
    {
        $this->instoreThreshold = $instoreThreshold;
        $this->apiParas["instoreThreshold"] = $instoreThreshold;
    }

    public function getOutstoreThreshold()
    {
        return $this->outstoreThreshold;
    }

    public function setOutstoreThreshold($outstoreThreshold)
    {
        $this->outstoreThreshold = $outstoreThreshold;
        $this->apiParas["outstoreThreshold"] = $outstoreThreshold;
    }

    public function getSerial()
    {
        return $this->serial;
    }

    public function setSerial($serial)
    {
        $this->serial = $serial;
        $this->apiParas["serial"] = $serial;
    }

    public function getBatch()
    {
        return $this->batch;
    }

    public function setBatch($batch)
    {
        $this->batch = $batch;
        $this->apiParas["batch"] = $batch;
    }

    public function getCheapGift()
    {
        return $this->cheapGift;
    }

    public function setCheapGift($cheapGift)
    {
        $this->cheapGift = $cheapGift;
        $this->apiParas["cheapGift"] = $cheapGift;
    }

    public function getQuality()
    {
        return $this->quality;
    }

    public function setQuality($quality)
    {
        $this->quality = $quality;
        $this->apiParas["quality"] = $quality;
    }

    public function getExpensive()
    {
        return $this->expensive;
    }

    public function setExpensive($expensive)
    {
        $this->expensive = $expensive;
        $this->apiParas["expensive"] = $expensive;
    }

    public function getLuxury()
    {
        return $this->luxury;
    }

    public function setLuxury($luxury)
    {
        $this->luxury = $luxury;
        $this->apiParas["luxury"] = $luxury;
    }

    public function getBreakable()
    {
        return $this->breakable;
    }

    public function setBreakable($breakable)
    {
        $this->breakable = $breakable;
        $this->apiParas["breakable"] = $breakable;
    }

    public function getLiquid()
    {
        return $this->liquid;
    }

    public function setLiquid($liquid)
    {
        $this->liquid = $liquid;
        $this->apiParas["liquid"] = $liquid;
    }

    public function getConsumables()
    {
        return $this->consumables;
    }

    public function setConsumables($consumables)
    {
        $this->consumables = $consumables;
        $this->apiParas["consumables"] = $consumables;
    }

    public function getAbnormal()
    {
        return $this->abnormal;
    }

    public function setAbnormal($abnormal)
    {
        $this->abnormal = $abnormal;
        $this->apiParas["abnormal"] = $abnormal;
    }

    public function getImported()
    {
        return $this->imported;
    }

    public function setImported($imported)
    {
        $this->imported = $imported;
        $this->apiParas["imported"] = $imported;
    }

    public function getHealth()
    {
        return $this->health;
    }

    public function setHealth($health)
    {
        $this->health = $health;
        $this->apiParas["health"] = $health;
    }

    public function getTemperature()
    {
        return $this->temperature;
    }

    public function setTemperature($temperature)
    {
        $this->temperature = $temperature;
        $this->apiParas["temperature"] = $temperature;
    }

    public function getTemperatureCeil()
    {
        return $this->temperatureCeil;
    }

    public function setTemperatureCeil($temperatureCeil)
    {
        $this->temperatureCeil = $temperatureCeil;
        $this->apiParas["temperatureCeil"] = $temperatureCeil;
    }

    public function getTemperatureFloor()
    {
        return $this->temperatureFloor;
    }

    public function setTemperatureFloor($temperatureFloor)
    {
        $this->temperatureFloor = $temperatureFloor;
        $this->apiParas["temperatureFloor"] = $temperatureFloor;
    }

    public function getHumidity()
    {
        return $this->humidity;
    }

    public function setHumidity($humidity)
    {
        $this->humidity = $humidity;
        $this->apiParas["humidity"] = $humidity;
    }

    public function getHumidityCeil()
    {
        return $this->humidityCeil;
    }

    public function setHumidityCeil($humidityCeil)
    {
        $this->humidityCeil = $humidityCeil;
        $this->apiParas["humidityCeil"] = $humidityCeil;
    }

    public function getHumidityFloor()
    {
        return $this->humidityFloor;
    }

    public function setHumidityFloor($humidityFloor)
    {
        $this->humidityFloor = $humidityFloor;
        $this->apiParas["humidityFloor"] = $humidityFloor;
    }

    public function getMovable()
    {
        return $this->movable;
    }

    public function setMovable($movable)
    {
        $this->movable = $movable;
        $this->apiParas["movable"] = $movable;
    }

    public function getService3g()
    {
        return $this->service3g;
    }

    public function setService3g($service3g)
    {
        $this->service3g = $service3g;
        $this->apiParas["service3g"] = $service3g;
    }

    public function getSample()
    {
        return $this->sample;
    }

    public function setSample($sample)
    {
        $this->sample = $sample;
        $this->apiParas["sample"] = $sample;
    }

    public function getOdor()
    {
        return $this->odor;
    }

    public function setOdor($odor)
    {
        $this->odor = $odor;
        $this->apiParas["odor"] = $odor;
    }

    public function getSex()
    {
        return $this->sex;
    }

    public function setSex($sex)
    {
        $this->sex = $sex;
        $this->apiParas["sex"] = $sex;
    }

    public function getPrecious()
    {
        return $this->precious;
    }

    public function setPrecious($precious)
    {
        $this->precious = $precious;
        $this->apiParas["precious"] = $precious;
    }

    public function getMixedBatch()
    {
        return $this->mixedBatch;
    }

    public function setMixedBatch($mixedBatch)
    {
        $this->mixedBatch = $mixedBatch;
        $this->apiParas["mixedBatch"] = $mixedBatch;
    }

    public function getReserve1()
    {
        return $this->reserve1;
    }

    public function setReserve1($reserve1)
    {
        $this->reserve1 = $reserve1;
        $this->apiParas["reserve1"] = $reserve1;
    }

    public function getReserve2()
    {
        return $this->reserve2;
    }

    public function setReserve2($reserve2)
    {
        $this->reserve2 = $reserve2;
        $this->apiParas["reserve2"] = $reserve2;
    }

    public function getReserve3()
    {
        return $this->reserve3;
    }

    public function setReserve3($reserve3)
    {
        $this->reserve3 = $reserve3;
        $this->apiParas["reserve3"] = $reserve3;
    }

    public function getReserve4()
    {
        return $this->reserve4;
    }

    public function setReserve4($reserve4)
    {
        $this->reserve4 = $reserve4;
        $this->apiParas["reserve4"] = $reserve4;
    }

    public function getReserve5()
    {
        return $this->reserve5;
    }

    public function setReserve5($reserve5)
    {
        $this->reserve5 = $reserve5;
        $this->apiParas["reserve5"] = $reserve5;
    }

    public function getReserve6()
    {
        return $this->reserve6;
    }

    public function setReserve6($reserve6)
    {
        $this->reserve6 = $reserve6;
        $this->apiParas["reserve6"] = $reserve6;
    }

    public function getReserve7()
    {
        return $this->reserve7;
    }

    public function setReserve7($reserve7)
    {
        $this->reserve7 = $reserve7;
        $this->apiParas["reserve7"] = $reserve7;
    }

    public function getReserve8()
    {
        return $this->reserve8;
    }

    public function setReserve8($reserve8)
    {
        $this->reserve8 = $reserve8;
        $this->apiParas["reserve8"] = $reserve8;
    }

    public function getReserve9()
    {
        return $this->reserve9;
    }

    public function setReserve9($reserve9)
    {
        $this->reserve9 = $reserve9;
        $this->apiParas["reserve9"] = $reserve9;
    }

    public function getReserve10()
    {
        return $this->reserve10;
    }

    public function setReserve10($reserve10)
    {
        $this->reserve10 = $reserve10;
        $this->apiParas["reserve10"] = $reserve10;
    }

    public function getFashionNo()
    {
        return $this->fashionNo;
    }

    public function setFashionNo($fashionNo)
    {
        $this->fashionNo = $fashionNo;
        $this->apiParas["fashionNo"] = $fashionNo;
    }

    public function getGoodsUnit()
    {
        return $this->goodsUnit;
    }

    public function setGoodsUnit($goodsUnit)
    {
        $this->goodsUnit = $goodsUnit;
        $this->apiParas["goodsUnit"] = $goodsUnit;
    }

    public function getCustomMade()
    {
        return $this->customMade;
    }

    public function setCustomMade($customMade)
    {
        $this->customMade = $customMade;
        $this->apiParas["customMade"] = $customMade;
    }

    public function getSignType()
    {
        return $this->signType;
    }

    public function setSignType($signType)
    {
        $this->signType = $signType;
        $this->apiParas["signType"] = $signType;
    }

    public function getOverseaPurchase()
    {
        return $this->overseaPurchase;
    }

    public function setOverseaPurchase($overseaPurchase)
    {
        $this->overseaPurchase = $overseaPurchase;
        $this->apiParas["overseaPurchase"] = $overseaPurchase;
    }

    public function getQiRecord()
    {
        return $this->qiRecord;
    }

    public function setQiRecord($qiRecord)
    {
        $this->qiRecord = $qiRecord;
        $this->apiParas["qiRecord"] = $qiRecord;
    }

    public function getCustomRecord()
    {
        return $this->customRecord;
    }

    public function setCustomRecord($customRecord)
    {
        $this->customRecord = $customRecord;
        $this->apiParas["customRecord"] = $customRecord;
    }

    public function getPattern()
    {
        return $this->pattern;
    }

    public function setPattern($pattern)
    {
        $this->pattern = $pattern;
        $this->apiParas["pattern"] = $pattern;
    }

    public function getCcProvider()
    {
        return $this->ccProvider;
    }

    public function setCcProvider($ccProvider)
    {
        $this->ccProvider = $ccProvider;
        $this->apiParas["ccProvider"] = $ccProvider;
    }

    public function getBondedArea()
    {
        return $this->bondedArea;
    }

    public function setBondedArea($bondedArea)
    {
        $this->bondedArea = $bondedArea;
        $this->apiParas["bondedArea"] = $bondedArea;
    }

    public function getSellerRecord()
    {
        return $this->sellerRecord;
    }

    public function setSellerRecord($sellerRecord)
    {
        $this->sellerRecord = $sellerRecord;
        $this->apiParas["sellerRecord"] = $sellerRecord;
    }

    public function getBatAttrIds()
    {
        return $this->batAttrIds;
    }

    public function setBatAttrIds($batAttrIds)
    {
        $this->batAttrIds = $batAttrIds;
        $this->apiParas["batAttrIds"] = $batAttrIds;
    }

    public function getNeedJDRecord()
    {
        return $this->needJDRecord;
    }

    public function setNeedJDRecord($needJDRecord)
    {
        $this->needJDRecord = $needJDRecord;
        $this->apiParas["needJDRecord"] = $needJDRecord;
    }

    public function getModelNumber()
    {
        return $this->modelNumber;
    }

    public function setModelNumber($modelNumber)
    {
        $this->modelNumber = $modelNumber;
        $this->apiParas["modelNumber"] = $modelNumber;
    }

    public function getSpe()
    {
        return $this->spe;
    }

    public function setSpe($spe)
    {
        $this->spe = $spe;
        $this->apiParas["spe"] = $spe;
    }

    public function getVatRate()
    {
        return $this->vatRate;
    }

    public function setVatRate($vatRate)
    {
        $this->vatRate = $vatRate;
        $this->apiParas["vatRate"] = $vatRate;
    }

    public function getTaxRate()
    {
        return $this->taxRate;
    }

    public function setTaxRate($taxRate)
    {
        $this->taxRate = $taxRate;
        $this->apiParas["taxRate"] = $taxRate;
    }

    public function getTaxNumberPost()
    {
        return $this->taxNumberPost;
    }

    public function setTaxNumberPost($taxNumberPost)
    {
        $this->taxNumberPost = $taxNumberPost;
        $this->apiParas["taxNumberPost"] = $taxNumberPost;
    }

    public function getPostRate()
    {
        return $this->postRate;
    }

    public function setPostRate($postRate)
    {
        $this->postRate = $postRate;
        $this->apiParas["postRate"] = $postRate;
    }

    public function getHsCode()
    {
        return $this->hsCode;
    }

    public function setHsCode($hsCode)
    {
        $this->hsCode = $hsCode;
        $this->apiParas["hsCode"] = $hsCode;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function setCountry($country)
    {
        $this->country = $country;
        $this->apiParas["country"] = $country;
    }

    public function getQiCountry()
    {
        return $this->qiCountry;
    }

    public function setQiCountry($qiCountry)
    {
        $this->qiCountry = $qiCountry;
        $this->apiParas["qiCountry"] = $qiCountry;
    }

    public function getFlag()
    {
        return $this->flag;
    }

    public function setFlag($flag)
    {
        $this->flag = $flag;
        $this->apiParas["flag"] = $flag;
    }

    public function getLegalUnit1()
    {
        return $this->legalUnit1;
    }

    public function setLegalUnit1($legalUnit1)
    {
        $this->legalUnit1 = $legalUnit1;
        $this->apiParas["legalUnit1"] = $legalUnit1;
    }

    public function getLegalAmount1()
    {
        return $this->legalAmount1;
    }

    public function setLegalAmount1($legalAmount1)
    {
        $this->legalAmount1 = $legalAmount1;
        $this->apiParas["legalAmount1"] = $legalAmount1;
    }

    public function getLegalUnit2()
    {
        return $this->legalUnit2;
    }

    public function setLegalUnit2($legalUnit2)
    {
        $this->legalUnit2 = $legalUnit2;
        $this->apiParas["legalUnit2"] = $legalUnit2;
    }

    public function getLegalAmount2()
    {
        return $this->legalAmount2;
    }

    public function setLegalAmount2($legalAmount2)
    {
        $this->legalAmount2 = $legalAmount2;
        $this->apiParas["legalAmount2"] = $legalAmount2;
    }

    public function getMeasurement()
    {
        return $this->measurement;
    }

    public function setMeasurement($measurement)
    {
        $this->measurement = $measurement;
        $this->apiParas["measurement"] = $measurement;
    }

    public function getQiMeasurement()
    {
        return $this->qiMeasurement;
    }

    public function setQiMeasurement($qiMeasurement)
    {
        $this->qiMeasurement = $qiMeasurement;
        $this->apiParas["qiMeasurement"] = $qiMeasurement;
    }

    public function getDelivery()
    {
        return $this->delivery;
    }

    public function setDelivery($delivery)
    {
        $this->delivery = $delivery;
        $this->apiParas["delivery"] = $delivery;
    }

    public function getContraband()
    {
        return $this->contraband;
    }

    public function setContraband($contraband)
    {
        $this->contraband = $contraband;
        $this->apiParas["contraband"] = $contraband;
    }

    public function getStoreProperty()
    {
        return $this->storeProperty;
    }

    public function setStoreProperty($storeProperty)
    {
        $this->storeProperty = $storeProperty;
        $this->apiParas["storeProperty"] = $storeProperty;
    }

    public function getProductCategory()
    {
        return $this->productCategory;
    }

    public function setProductCategory($productCategory)
    {
        $this->productCategory = $productCategory;
        $this->apiParas["productCategory"] = $productCategory;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function setCategory($category)
    {
        $this->category = $category;
        $this->apiParas["category"] = $category;
    }

    public function getApprovalNo()
    {
        return $this->approvalNo;
    }

    public function setApprovalNo($approvalNo)
    {
        $this->approvalNo = $approvalNo;
        $this->apiParas["approvalNo"] = $approvalNo;
    }

    public function getStorage()
    {
        return $this->storage;
    }

    public function setStorage($storage)
    {
        $this->storage = $storage;
        $this->apiParas["storage"] = $storage;
    }

    public function getForm()
    {
        return $this->form;
    }

    public function setForm($form)
    {
        $this->form = $form;
        $this->apiParas["form"] = $form;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
        $this->apiParas["type"] = $type;
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

    public function getGenericName()
    {
        return $this->genericName;
    }

    public function setGenericName($genericName)
    {
        $this->genericName = $genericName;
        $this->apiParas["genericName"] = $genericName;
    }

    public function getDosage()
    {
        return $this->dosage;
    }

    public function setDosage($dosage)
    {
        $this->dosage = $dosage;
        $this->apiParas["dosage"] = $dosage;
    }

    public function getUseMethods()
    {
        return $this->useMethods;
    }

    public function setUseMethods($useMethods)
    {
        $this->useMethods = $useMethods;
        $this->apiParas["useMethods"] = $useMethods;
    }

    public function getPackingUnit()
    {
        return $this->packingUnit;
    }

    public function setPackingUnit($packingUnit)
    {
        $this->packingUnit = $packingUnit;
        $this->apiParas["packingUnit"] = $packingUnit;
    }

    public function getEfficacy()
    {
        return $this->efficacy;
    }

    public function setEfficacy($efficacy)
    {
        $this->efficacy = $efficacy;
        $this->apiParas["efficacy"] = $efficacy;
    }

    public function getManufactory()
    {
        return $this->manufactory;
    }

    public function setManufactory($manufactory)
    {
        $this->manufactory = $manufactory;
        $this->apiParas["manufactory"] = $manufactory;
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

    public function getStoreSaleFlag()
    {
        return $this->storeSaleFlag;
    }

    public function setStoreSaleFlag($storeSaleFlag)
    {
        $this->storeSaleFlag = $storeSaleFlag;
        $this->apiParas["storeSaleFlag"] = $storeSaleFlag;
    }

    public function getKeyMaintenance()
    {
        return $this->keyMaintenance;
    }

    public function setKeyMaintenance($keyMaintenance)
    {
        $this->keyMaintenance = $keyMaintenance;
        $this->apiParas["keyMaintenance"] = $keyMaintenance;
    }

    public function getSpecialDrugs()
    {
        return $this->specialDrugs;
    }

    public function setSpecialDrugs($specialDrugs)
    {
        $this->specialDrugs = $specialDrugs;
        $this->apiParas["specialDrugs"] = $specialDrugs;
    }

    public function getMarketingAuthorizationHolder()
    {
        return $this->marketingAuthorizationHolder;
    }

    public function setMarketingAuthorizationHolder($marketingAuthorizationHolder)
    {
        $this->marketingAuthorizationHolder = $marketingAuthorizationHolder;
        $this->apiParas["marketingAuthorizationHolder"] = $marketingAuthorizationHolder;
    }

    public function getBoxRule()
    {
        return $this->boxRule;
    }

    public function setBoxRule($boxRule)
    {
        $this->boxRule = $boxRule;
        $this->apiParas["boxRule"] = $boxRule;
    }

    public function getWarningDay()
    {
        return $this->warningDay;
    }

    public function setWarningDay($warningDay)
    {
        $this->warningDay = $warningDay;
        $this->apiParas["warningDay"] = $warningDay;
    }

    public function getRegularAdventDay()
    {
        return $this->regularAdventDay;
    }

    public function setRegularAdventDay($regularAdventDay)
    {
        $this->regularAdventDay = $regularAdventDay;
        $this->apiParas["regularAdventDay"] = $regularAdventDay;
    }

    public function getUrgentAdventDay()
    {
        return $this->urgentAdventDay;
    }

    public function setUrgentAdventDay($urgentAdventDay)
    {
        $this->urgentAdventDay = $urgentAdventDay;
        $this->apiParas["urgentAdventDay"] = $urgentAdventDay;
    }

    public function getAdventDay()
    {
        return $this->adventDay;
    }

    public function setAdventDay($adventDay)
    {
        $this->adventDay = $adventDay;
        $this->apiParas["adventDay"] = $adventDay;
    }

    public function getEasyPollute()
    {
        return $this->easyPollute;
    }

    public function setEasyPollute($easyPollute)
    {
        $this->easyPollute = $easyPollute;
        $this->apiParas["easyPollute"] = $easyPollute;
    }

    public function getMuslim()
    {
        return $this->muslim;
    }

    public function setMuslim($muslim)
    {
        $this->muslim = $muslim;
        $this->apiParas["muslim"] = $muslim;
    }

    public function getBoxRegulations()
    {
        return $this->boxRegulations;
    }

    public function setBoxRegulations($boxRegulations)
    {
        $this->boxRegulations = $boxRegulations;
        $this->apiParas["boxRegulations"] = $boxRegulations;
    }

    public function getAllowedDay()
    {
        return $this->allowedDay;
    }

    public function setAllowedDay($allowedDay)
    {
        $this->allowedDay = $allowedDay;
        $this->apiParas["allowedDay"] = $allowedDay;
    }

    public function getSellerFirstCategory()
    {
        return $this->sellerFirstCategory;
    }

    public function setSellerFirstCategory($sellerFirstCategory)
    {
        $this->sellerFirstCategory = $sellerFirstCategory;
        $this->apiParas["sellerFirstCategory"] = $sellerFirstCategory;
    }

    public function getSellerSecondCategory()
    {
        return $this->sellerSecondCategory;
    }

    public function setSellerSecondCategory($sellerSecondCategory)
    {
        $this->sellerSecondCategory = $sellerSecondCategory;
        $this->apiParas["sellerSecondCategory"] = $sellerSecondCategory;
    }

    public function getSellerThirdCategory()
    {
        return $this->sellerThirdCategory;
    }

    public function setSellerThirdCategory($sellerThirdCategory)
    {
        $this->sellerThirdCategory = $sellerThirdCategory;
        $this->apiParas["sellerThirdCategory"] = $sellerThirdCategory;
    }

    public function getSellerFirstCategoryNo()
    {
        return $this->sellerFirstCategoryNo;
    }

    public function setSellerFirstCategoryNo($sellerFirstCategoryNo)
    {
        $this->sellerFirstCategoryNo = $sellerFirstCategoryNo;
        $this->apiParas["sellerFirstCategoryNo"] = $sellerFirstCategoryNo;
    }

    public function getSellerSecondCategoryNo()
    {
        return $this->sellerSecondCategoryNo;
    }

    public function setSellerSecondCategoryNo($sellerSecondCategoryNo)
    {
        $this->sellerSecondCategoryNo = $sellerSecondCategoryNo;
        $this->apiParas["sellerSecondCategoryNo"] = $sellerSecondCategoryNo;
    }

    public function getSellerThirdCategoryNo()
    {
        return $this->sellerThirdCategoryNo;
    }

    public function setSellerThirdCategoryNo($sellerThirdCategoryNo)
    {
        $this->sellerThirdCategoryNo = $sellerThirdCategoryNo;
        $this->apiParas["sellerThirdCategoryNo"] = $sellerThirdCategoryNo;
    }

    public function getAthletesUseCaution()
    {
        return $this->athletesUseCaution;
    }

    public function setAthletesUseCaution($athletesUseCaution)
    {
        $this->athletesUseCaution = $athletesUseCaution;
        $this->apiParas["athletesUseCaution"] = $athletesUseCaution;
    }

    public function getElecSupervisionCodeFlag()
    {
        return $this->elecSupervisionCodeFlag;
    }

    public function setElecSupervisionCodeFlag($elecSupervisionCodeFlag)
    {
        $this->elecSupervisionCodeFlag = $elecSupervisionCodeFlag;
        $this->apiParas["elecSupervisionCodeFlag"] = $elecSupervisionCodeFlag;
    }

    public function getHgsbys()
    {
        return $this->hgsbys;
    }

    public function setHgsbys($hgsbys)
    {
        $this->hgsbys = $hgsbys;
        $this->apiParas["hgsbys"] = $hgsbys;
    }

    public function getLargeCargoTransport()
    {
        return $this->largeCargoTransport;
    }

    public function setLargeCargoTransport($largeCargoTransport)
    {
        $this->largeCargoTransport = $largeCargoTransport;
        $this->apiParas["largeCargoTransport"] = $largeCargoTransport;
    }

    public function getUniqueCode()
    {
        return $this->uniqueCode;
    }

    public function setUniqueCode($uniqueCode)
    {
        $this->uniqueCode = $uniqueCode;
        $this->apiParas["uniqueCode"] = $uniqueCode;
    }

    public function getProductLine()
    {
        return $this->productLine;
    }

    public function setProductLine($productLine)
    {
        $this->productLine = $productLine;
        $this->apiParas["productLine"] = $productLine;
    }

    public function getIsStandardInstrument()
    {
        return $this->isStandardInstrument;
    }

    public function setIsStandardInstrument($isStandardInstrument)
    {
        $this->isStandardInstrument = $isStandardInstrument;
        $this->apiParas["isStandardInstrument"] = $isStandardInstrument;
    }

    public function getIsColdChain()
    {
        return $this->isColdChain;
    }

    public function setIsColdChain($isColdChain)
    {
        $this->isColdChain = $isColdChain;
        $this->apiParas["isColdChain"] = $isColdChain;
    }

    public function getIsDetachablePackage()
    {
        return $this->isDetachablePackage;
    }

    public function setIsDetachablePackage($isDetachablePackage)
    {
        $this->isDetachablePackage = $isDetachablePackage;
        $this->apiParas["isDetachablePackage"] = $isDetachablePackage;
    }

    public function getCertificateNo()
    {
        return $this->certificateNo;
    }

    public function setCertificateNo($certificateNo)
    {
        $this->certificateNo = $certificateNo;
        $this->apiParas["certificateNo"] = $certificateNo;
    }

    public function getBusinessTypeName()
    {
        return $this->businessTypeName;
    }

    public function setBusinessTypeName($businessTypeName)
    {
        $this->businessTypeName = $businessTypeName;
        $this->apiParas["businessTypeName"] = $businessTypeName;
    }

    public function getOwnerTypeName()
    {
        return $this->ownerTypeName;
    }

    public function setOwnerTypeName($ownerTypeName)
    {
        $this->ownerTypeName = $ownerTypeName;
        $this->apiParas["ownerTypeName"] = $ownerTypeName;
    }

    public function getPackageTypeName()
    {
        return $this->packageTypeName;
    }

    public function setPackageTypeName($packageTypeName)
    {
        $this->packageTypeName = $packageTypeName;
        $this->apiParas["packageTypeName"] = $packageTypeName;
    }

    public function getMaterialTypeName()
    {
        return $this->materialTypeName;
    }

    public function setMaterialTypeName($materialTypeName)
    {
        $this->materialTypeName = $materialTypeName;
        $this->apiParas["materialTypeName"] = $materialTypeName;
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

    public function getClothingAttr()
    {
        return $this->clothingAttr;
    }

    public function setClothingAttr($clothingAttr)
    {
        $this->clothingAttr = $clothingAttr;
        $this->apiParas["clothingAttr"] = $clothingAttr;
    }

    public function getClothingStyle()
    {
        return $this->clothingStyle;
    }

    public function setClothingStyle($clothingStyle)
    {
        $this->clothingStyle = $clothingStyle;
        $this->apiParas["clothingStyle"] = $clothingStyle;
    }

    public function getClothingVersionType()
    {
        return $this->clothingVersionType;
    }

    public function setClothingVersionType($clothingVersionType)
    {
        $this->clothingVersionType = $clothingVersionType;
        $this->apiParas["clothingVersionType"] = $clothingVersionType;
    }

    public function getClothingSilhouette()
    {
        return $this->clothingSilhouette;
    }

    public function setClothingSilhouette($clothingSilhouette)
    {
        $this->clothingSilhouette = $clothingSilhouette;
        $this->apiParas["clothingSilhouette"] = $clothingSilhouette;
    }

    public function getClothingThickness()
    {
        return $this->clothingThickness;
    }

    public function setClothingThickness($clothingThickness)
    {
        $this->clothingThickness = $clothingThickness;
        $this->apiParas["clothingThickness"] = $clothingThickness;
    }

    public function getClothingWeek()
    {
        return $this->clothingWeek;
    }

    public function setClothingWeek($clothingWeek)
    {
        $this->clothingWeek = $clothingWeek;
        $this->apiParas["clothingWeek"] = $clothingWeek;
    }

    public function getBodyParts()
    {
        return $this->bodyParts;
    }

    public function setBodyParts($bodyParts)
    {
        $this->bodyParts = $bodyParts;
        $this->apiParas["bodyParts"] = $bodyParts;
    }

    public function getStyleSex()
    {
        return $this->styleSex;
    }

    public function setStyleSex($styleSex)
    {
        $this->styleSex = $styleSex;
        $this->apiParas["styleSex"] = $styleSex;
    }

    public function getListedBand()
    {
        return $this->listedBand;
    }

    public function setListedBand($listedBand)
    {
        $this->listedBand = $listedBand;
        $this->apiParas["listedBand"] = $listedBand;
    }

    public function getExpectListedTime()
    {
        return $this->expectListedTime;
    }

    public function setExpectListedTime($expectListedTime)
    {
        $this->expectListedTime = $expectListedTime;
        $this->apiParas["expectListedTime"] = $expectListedTime;
    }

    public function getFabric()
    {
        return $this->fabric;
    }

    public function setFabric($fabric)
    {
        $this->fabric = $fabric;
        $this->apiParas["fabric"] = $fabric;
    }

    public function getWashing()
    {
        return $this->washing;
    }

    public function setWashing($washing)
    {
        $this->washing = $washing;
        $this->apiParas["washing"] = $washing;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function setYear($year)
    {
        $this->year = $year;
        $this->apiParas["year"] = $year;
    }

    public function getProductSeason()
    {
        return $this->productSeason;
    }

    public function setProductSeason($productSeason)
    {
        $this->productSeason = $productSeason;
        $this->apiParas["productSeason"] = $productSeason;
    }

    public function getAfterSaleFlag()
    {
        return $this->afterSaleFlag;
    }

    public function setAfterSaleFlag($afterSaleFlag)
    {
        $this->afterSaleFlag = $afterSaleFlag;
        $this->apiParas["afterSaleFlag"] = $afterSaleFlag;
    }

    public function getProductionLicenseNo()
    {
        return $this->productionLicenseNo;
    }

    public function setProductionLicenseNo($productionLicenseNo)
    {
        $this->productionLicenseNo = $productionLicenseNo;
        $this->apiParas["productionLicenseNo"] = $productionLicenseNo;
    }

    public function getTransportTemperature()
    {
        return $this->transportTemperature;
    }

    public function setTransportTemperature($transportTemperature)
    {
        $this->transportTemperature = $transportTemperature;
        $this->apiParas["transportTemperature"] = $transportTemperature;
    }

    public function getBoxUniqueCode()
    {
        return $this->boxUniqueCode;
    }

    public function setBoxUniqueCode($boxUniqueCode)
    {
        $this->boxUniqueCode = $boxUniqueCode;
        $this->apiParas["boxUniqueCode"] = $boxUniqueCode;
    }

    public function getAuxiliary()
    {
        return $this->auxiliary;
    }

    public function setAuxiliary($auxiliary)
    {
        $this->auxiliary = $auxiliary;
        $this->apiParas["auxiliary"] = $auxiliary;
    }

    public function getGoodsNameEn()
    {
        return $this->goodsNameEn;
    }

    public function setGoodsNameEn($goodsNameEn)
    {
        $this->goodsNameEn = $goodsNameEn;
        $this->apiParas["goodsNameEn"] = $goodsNameEn;
    }

    public function getMinSaleQuantity()
    {
        return $this->minSaleQuantity;
    }

    public function setMinSaleQuantity($minSaleQuantity)
    {
        $this->minSaleQuantity = $minSaleQuantity;
        $this->apiParas["minSaleQuantity"] = $minSaleQuantity;
    }

    public function getMinPackageQuantity()
    {
        return $this->minPackageQuantity;
    }

    public function setMinPackageQuantity($minPackageQuantity)
    {
        $this->minPackageQuantity = $minPackageQuantity;
        $this->apiParas["minPackageQuantity"] = $minPackageQuantity;
    }

    public function getPackageInstruction()
    {
        return $this->packageInstruction;
    }

    public function setPackageInstruction($packageInstruction)
    {
        $this->packageInstruction = $packageInstruction;
        $this->apiParas["packageInstruction"] = $packageInstruction;
    }

    public function getTexture()
    {
        return $this->texture;
    }

    public function setTexture($texture)
    {
        $this->texture = $texture;
        $this->apiParas["texture"] = $texture;
    }

    public function getSubstrate()
    {
        return $this->substrate;
    }

    public function setSubstrate($substrate)
    {
        $this->substrate = $substrate;
        $this->apiParas["substrate"] = $substrate;
    }

    public function getExecutiveStandard()
    {
        return $this->executiveStandard;
    }

    public function setExecutiveStandard($executiveStandard)
    {
        $this->executiveStandard = $executiveStandard;
        $this->apiParas["executiveStandard"] = $executiveStandard;
    }

    public function getProcessTechnology()
    {
        return $this->processTechnology;
    }

    public function setProcessTechnology($processTechnology)
    {
        $this->processTechnology = $processTechnology;
        $this->apiParas["processTechnology"] = $processTechnology;
    }

    public function getSortCode()
    {
        return $this->sortCode;
    }

    public function setSortCode($sortCode)
    {
        $this->sortCode = $sortCode;
        $this->apiParas["sortCode"] = $sortCode;
    }

    public function getAllSerial()
    {
        return $this->allSerial;
    }

    public function setAllSerial($allSerial)
    {
        $this->allSerial = $allSerial;
        $this->apiParas["allSerial"] = $allSerial;
    }

    public function getIsRcvDate()
    {
        return $this->isRcvDate;
    }

    public function setIsRcvDate($isRcvDate)
    {
        $this->isRcvDate = $isRcvDate;
        $this->apiParas["isRcvDate"] = $isRcvDate;
    }

    public function getImgUrls()
    {
        return $this->imgUrls;
    }

    public function setImgUrls($imgUrls)
    {
        $this->imgUrls = $imgUrls;
        $this->apiParas["imgUrls"] = $imgUrls;
    }

    public function getRenewPackage()
    {
        return $this->renewPackage;
    }

    public function setRenewPackage($renewPackage)
    {
        $this->renewPackage = $renewPackage;
        $this->apiParas["renewPackage"] = $renewPackage;
    }

    public function getWarehouseInsured()
    {
        return $this->warehouseInsured;
    }

    public function setWarehouseInsured($warehouseInsured)
    {
        $this->warehouseInsured = $warehouseInsured;
        $this->apiParas["warehouseInsured"] = $warehouseInsured;
    }

    public function getTransportInsured()
    {
        return $this->transportInsured;
    }

    public function setTransportInsured($transportInsured)
    {
        $this->transportInsured = $transportInsured;
        $this->apiParas["transportInsured"] = $transportInsured;
    }
}
