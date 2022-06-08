<?php

namespace ACES\Request;

class EclpGoodsUpdateGoodsInfoRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.eclp.goods.updateGoodsInfo';
    }

    public function check()
    {
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

    public function getSpGoodsNo()
    {
        return $this->apiParas['spGoodsNo'];
    }

    public function setSpGoodsNo($spGoodsNo)
    {
        $this->apiParas['spGoodsNo'] = $spGoodsNo;

        return $this;
    }

    public function getBarcodes()
    {
        return $this->apiParas['barcodes'];
    }

    public function setBarcodes($barcodes)
    {
        $this->apiParas['barcodes'] = $barcodes;

        return $this;
    }

    public function getAbbreviation()
    {
        return $this->apiParas['abbreviation'];
    }

    public function setAbbreviation($abbreviation)
    {
        $this->apiParas['abbreviation'] = $abbreviation;

        return $this;
    }

    public function getBrandNo()
    {
        return $this->apiParas['brandNo'];
    }

    public function setBrandNo($brandNo)
    {
        $this->apiParas['brandNo'] = $brandNo;

        return $this;
    }

    public function getBrandName()
    {
        return $this->apiParas['brandName'];
    }

    public function setBrandName($brandName)
    {
        $this->apiParas['brandName'] = $brandName;

        return $this;
    }

    public function getManufacturer()
    {
        return $this->apiParas['manufacturer'];
    }

    public function setManufacturer($manufacturer)
    {
        $this->apiParas['manufacturer'] = $manufacturer;

        return $this;
    }

    public function getProduceAddress()
    {
        return $this->apiParas['produceAddress'];
    }

    public function setProduceAddress($produceAddress)
    {
        $this->apiParas['produceAddress'] = $produceAddress;

        return $this;
    }

    public function getStandard()
    {
        return $this->apiParas['standard'];
    }

    public function setStandard($standard)
    {
        $this->apiParas['standard'] = $standard;

        return $this;
    }

    public function getColor()
    {
        return $this->apiParas['color'];
    }

    public function setColor($color)
    {
        $this->apiParas['color'] = $color;

        return $this;
    }

    public function getSize()
    {
        return $this->apiParas['size'];
    }

    public function setSize($size)
    {
        $this->apiParas['size'] = $size;

        return $this;
    }

    public function getSizeDefinition()
    {
        return $this->apiParas['sizeDefinition'];
    }

    public function setSizeDefinition($sizeDefinition)
    {
        $this->apiParas['sizeDefinition'] = $sizeDefinition;

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

    public function getNetWeight()
    {
        return $this->apiParas['netWeight'];
    }

    public function setNetWeight($netWeight)
    {
        $this->apiParas['netWeight'] = $netWeight;

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

    public function getBatch()
    {
        return $this->apiParas['batch'];
    }

    public function setBatch($batch)
    {
        $this->apiParas['batch'] = $batch;

        return $this;
    }

    public function getCheapGift()
    {
        return $this->apiParas['cheapGift'];
    }

    public function setCheapGift($cheapGift)
    {
        $this->apiParas['cheapGift'] = $cheapGift;

        return $this;
    }

    public function getQuality()
    {
        return $this->apiParas['quality'];
    }

    public function setQuality($quality)
    {
        $this->apiParas['quality'] = $quality;

        return $this;
    }

    public function getExpensive()
    {
        return $this->apiParas['expensive'];
    }

    public function setExpensive($expensive)
    {
        $this->apiParas['expensive'] = $expensive;

        return $this;
    }

    public function getLuxury()
    {
        return $this->apiParas['luxury'];
    }

    public function setLuxury($luxury)
    {
        $this->apiParas['luxury'] = $luxury;

        return $this;
    }

    public function getBreakable()
    {
        return $this->apiParas['breakable'];
    }

    public function setBreakable($breakable)
    {
        $this->apiParas['breakable'] = $breakable;

        return $this;
    }

    public function getLiquid()
    {
        return $this->apiParas['liquid'];
    }

    public function setLiquid($liquid)
    {
        $this->apiParas['liquid'] = $liquid;

        return $this;
    }

    public function getConsumables()
    {
        return $this->apiParas['consumables'];
    }

    public function setConsumables($consumables)
    {
        $this->apiParas['consumables'] = $consumables;

        return $this;
    }

    public function getAbnormal()
    {
        return $this->apiParas['abnormal'];
    }

    public function setAbnormal($abnormal)
    {
        $this->apiParas['abnormal'] = $abnormal;

        return $this;
    }

    public function getImported()
    {
        return $this->apiParas['imported'];
    }

    public function setImported($imported)
    {
        $this->apiParas['imported'] = $imported;

        return $this;
    }

    public function getHealth()
    {
        return $this->apiParas['health'];
    }

    public function setHealth($health)
    {
        $this->apiParas['health'] = $health;

        return $this;
    }

    public function getTemperature()
    {
        return $this->apiParas['temperature'];
    }

    public function setTemperature($temperature)
    {
        $this->apiParas['temperature'] = $temperature;

        return $this;
    }

    public function getTemperatureCeil()
    {
        return $this->apiParas['temperatureCeil'];
    }

    public function setTemperatureCeil($temperatureCeil)
    {
        $this->apiParas['temperatureCeil'] = $temperatureCeil;

        return $this;
    }

    public function getTemperatureFloor()
    {
        return $this->apiParas['temperatureFloor'];
    }

    public function setTemperatureFloor($temperatureFloor)
    {
        $this->apiParas['temperatureFloor'] = $temperatureFloor;

        return $this;
    }

    public function getHumidity()
    {
        return $this->apiParas['humidity'];
    }

    public function setHumidity($humidity)
    {
        $this->apiParas['humidity'] = $humidity;

        return $this;
    }

    public function getHumidityCeil()
    {
        return $this->apiParas['humidityCeil'];
    }

    public function setHumidityCeil($humidityCeil)
    {
        $this->apiParas['humidityCeil'] = $humidityCeil;

        return $this;
    }

    public function getHumidityFloor()
    {
        return $this->apiParas['humidityFloor'];
    }

    public function setHumidityFloor($humidityFloor)
    {
        $this->apiParas['humidityFloor'] = $humidityFloor;

        return $this;
    }

    public function getMovable()
    {
        return $this->apiParas['movable'];
    }

    public function setMovable($movable)
    {
        $this->apiParas['movable'] = $movable;

        return $this;
    }

    public function getService3g()
    {
        return $this->apiParas['service3g'];
    }

    public function setService3g($service3g)
    {
        $this->apiParas['service3g'] = $service3g;

        return $this;
    }

    public function getSample()
    {
        return $this->apiParas['sample'];
    }

    public function setSample($sample)
    {
        $this->apiParas['sample'] = $sample;

        return $this;
    }

    public function getOdor()
    {
        return $this->apiParas['odor'];
    }

    public function setOdor($odor)
    {
        $this->apiParas['odor'] = $odor;

        return $this;
    }

    public function getSex()
    {
        return $this->apiParas['sex'];
    }

    public function setSex($sex)
    {
        $this->apiParas['sex'] = $sex;

        return $this;
    }

    public function getPrecious()
    {
        return $this->apiParas['precious'];
    }

    public function setPrecious($precious)
    {
        $this->apiParas['precious'] = $precious;

        return $this;
    }

    public function getMixedBatch()
    {
        return $this->apiParas['mixedBatch'];
    }

    public function setMixedBatch($mixedBatch)
    {
        $this->apiParas['mixedBatch'] = $mixedBatch;

        return $this;
    }

    public function getReserve1()
    {
        return $this->apiParas['reserve1'];
    }

    public function setReserve1($reserve1)
    {
        $this->apiParas['reserve1'] = $reserve1;

        return $this;
    }

    public function getReserve2()
    {
        return $this->apiParas['reserve2'];
    }

    public function setReserve2($reserve2)
    {
        $this->apiParas['reserve2'] = $reserve2;

        return $this;
    }

    public function getReserve3()
    {
        return $this->apiParas['reserve3'];
    }

    public function setReserve3($reserve3)
    {
        $this->apiParas['reserve3'] = $reserve3;

        return $this;
    }

    public function getReserve4()
    {
        return $this->apiParas['reserve4'];
    }

    public function setReserve4($reserve4)
    {
        $this->apiParas['reserve4'] = $reserve4;

        return $this;
    }

    public function getReserve5()
    {
        return $this->apiParas['reserve5'];
    }

    public function setReserve5($reserve5)
    {
        $this->apiParas['reserve5'] = $reserve5;

        return $this;
    }

    public function getReserve6()
    {
        return $this->apiParas['reserve6'];
    }

    public function setReserve6($reserve6)
    {
        $this->apiParas['reserve6'] = $reserve6;

        return $this;
    }

    public function getReserve7()
    {
        return $this->apiParas['reserve7'];
    }

    public function setReserve7($reserve7)
    {
        $this->apiParas['reserve7'] = $reserve7;

        return $this;
    }

    public function getReserve8()
    {
        return $this->apiParas['reserve8'];
    }

    public function setReserve8($reserve8)
    {
        $this->apiParas['reserve8'] = $reserve8;

        return $this;
    }

    public function getReserve9()
    {
        return $this->apiParas['reserve9'];
    }

    public function setReserve9($reserve9)
    {
        $this->apiParas['reserve9'] = $reserve9;

        return $this;
    }

    public function getReserve10()
    {
        return $this->apiParas['reserve10'];
    }

    public function setReserve10($reserve10)
    {
        $this->apiParas['reserve10'] = $reserve10;

        return $this;
    }

    public function getFashionNo()
    {
        return $this->apiParas['fashionNo'];
    }

    public function setFashionNo($fashionNo)
    {
        $this->apiParas['fashionNo'] = $fashionNo;

        return $this;
    }

    public function getGoodsMess()
    {
        return $this->apiParas['goodsMess'];
    }

    public function setGoodsMess($goodsMess)
    {
        $this->apiParas['goodsMess'] = $goodsMess;

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

    public function getDeptNo()
    {
        return $this->apiParas['deptNo'];
    }

    public function setDeptNo($deptNo)
    {
        $this->apiParas['deptNo'] = $deptNo;

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

    public function getOverseaPurchase()
    {
        return $this->apiParas['overseaPurchase'];
    }

    public function setOverseaPurchase($overseaPurchase)
    {
        $this->apiParas['overseaPurchase'] = $overseaPurchase;

        return $this;
    }

    public function getQiRecord()
    {
        return $this->apiParas['qiRecord'];
    }

    public function setQiRecord($qiRecord)
    {
        $this->apiParas['qiRecord'] = $qiRecord;

        return $this;
    }

    public function getCustomRecord()
    {
        return $this->apiParas['customRecord'];
    }

    public function setCustomRecord($customRecord)
    {
        $this->apiParas['customRecord'] = $customRecord;

        return $this;
    }

    public function getPattern()
    {
        return $this->apiParas['pattern'];
    }

    public function setPattern($pattern)
    {
        $this->apiParas['pattern'] = $pattern;

        return $this;
    }

    public function getCcProvider()
    {
        return $this->apiParas['ccProvider'];
    }

    public function setCcProvider($ccProvider)
    {
        $this->apiParas['ccProvider'] = $ccProvider;

        return $this;
    }

    public function getBondedArea()
    {
        return $this->apiParas['bondedArea'];
    }

    public function setBondedArea($bondedArea)
    {
        $this->apiParas['bondedArea'] = $bondedArea;

        return $this;
    }

    public function getSellerRecord()
    {
        return $this->apiParas['sellerRecord'];
    }

    public function setSellerRecord($sellerRecord)
    {
        $this->apiParas['sellerRecord'] = $sellerRecord;

        return $this;
    }

    public function getBatAttrIds()
    {
        return $this->apiParas['batAttrIds'];
    }

    public function setBatAttrIds($batAttrIds)
    {
        $this->apiParas['batAttrIds'] = $batAttrIds;

        return $this;
    }

    public function getNeedJDRecord()
    {
        return $this->apiParas['needJDRecord'];
    }

    public function setNeedJDRecord($needJDRecord)
    {
        $this->apiParas['needJDRecord'] = $needJDRecord;

        return $this;
    }

    public function getModelNumber()
    {
        return $this->apiParas['modelNumber'];
    }

    public function setModelNumber($modelNumber)
    {
        $this->apiParas['modelNumber'] = $modelNumber;

        return $this;
    }

    public function getSpe()
    {
        return $this->apiParas['spe'];
    }

    public function setSpe($spe)
    {
        $this->apiParas['spe'] = $spe;

        return $this;
    }

    public function getVatRate()
    {
        return $this->apiParas['vatRate'];
    }

    public function setVatRate($vatRate)
    {
        $this->apiParas['vatRate'] = $vatRate;

        return $this;
    }

    public function getTaxRate()
    {
        return $this->apiParas['taxRate'];
    }

    public function setTaxRate($taxRate)
    {
        $this->apiParas['taxRate'] = $taxRate;

        return $this;
    }

    public function getTaxNumberPost()
    {
        return $this->apiParas['taxNumberPost'];
    }

    public function setTaxNumberPost($taxNumberPost)
    {
        $this->apiParas['taxNumberPost'] = $taxNumberPost;

        return $this;
    }

    public function getPostRate()
    {
        return $this->apiParas['postRate'];
    }

    public function setPostRate($postRate)
    {
        $this->apiParas['postRate'] = $postRate;

        return $this;
    }

    public function getHsCode()
    {
        return $this->apiParas['hsCode'];
    }

    public function setHsCode($hsCode)
    {
        $this->apiParas['hsCode'] = $hsCode;

        return $this;
    }

    public function getCountry()
    {
        return $this->apiParas['country'];
    }

    public function setCountry($country)
    {
        $this->apiParas['country'] = $country;

        return $this;
    }

    public function getQiCountry()
    {
        return $this->apiParas['qiCountry'];
    }

    public function setQiCountry($qiCountry)
    {
        $this->apiParas['qiCountry'] = $qiCountry;

        return $this;
    }

    public function getFlag()
    {
        return $this->apiParas['flag'];
    }

    public function setFlag($flag)
    {
        $this->apiParas['flag'] = $flag;

        return $this;
    }

    public function getLegalUnit1()
    {
        return $this->apiParas['legalUnit1'];
    }

    public function setLegalUnit1($legalUnit1)
    {
        $this->apiParas['legalUnit1'] = $legalUnit1;

        return $this;
    }

    public function getLegalAmount1()
    {
        return $this->apiParas['legalAmount1'];
    }

    public function setLegalAmount1($legalAmount1)
    {
        $this->apiParas['legalAmount1'] = $legalAmount1;

        return $this;
    }

    public function getLegalUnit2()
    {
        return $this->apiParas['legalUnit2'];
    }

    public function setLegalUnit2($legalUnit2)
    {
        $this->apiParas['legalUnit2'] = $legalUnit2;

        return $this;
    }

    public function getLegalAmount2()
    {
        return $this->apiParas['legalAmount2'];
    }

    public function setLegalAmount2($legalAmount2)
    {
        $this->apiParas['legalAmount2'] = $legalAmount2;

        return $this;
    }

    public function getMeasurement()
    {
        return $this->apiParas['measurement'];
    }

    public function setMeasurement($measurement)
    {
        $this->apiParas['measurement'] = $measurement;

        return $this;
    }

    public function getQiMeasurement()
    {
        return $this->apiParas['qiMeasurement'];
    }

    public function setQiMeasurement($qiMeasurement)
    {
        $this->apiParas['qiMeasurement'] = $qiMeasurement;

        return $this;
    }

    public function getDelivery()
    {
        return $this->apiParas['delivery'];
    }

    public function setDelivery($delivery)
    {
        $this->apiParas['delivery'] = $delivery;

        return $this;
    }

    public function getStoreProperty()
    {
        return $this->apiParas['storeProperty'];
    }

    public function setStoreProperty($storeProperty)
    {
        $this->apiParas['storeProperty'] = $storeProperty;

        return $this;
    }

    public function getProductCategory()
    {
        return $this->apiParas['productCategory'];
    }

    public function setProductCategory($productCategory)
    {
        $this->apiParas['productCategory'] = $productCategory;

        return $this;
    }

    public function getCategory()
    {
        return $this->apiParas['category'];
    }

    public function setCategory($category)
    {
        $this->apiParas['category'] = $category;

        return $this;
    }

    public function getApprovalNo()
    {
        return $this->apiParas['approvalNo'];
    }

    public function setApprovalNo($approvalNo)
    {
        $this->apiParas['approvalNo'] = $approvalNo;

        return $this;
    }

    public function getStorage()
    {
        return $this->apiParas['storage'];
    }

    public function setStorage($storage)
    {
        $this->apiParas['storage'] = $storage;

        return $this;
    }

    public function getForm()
    {
        return $this->apiParas['form'];
    }

    public function setForm($form)
    {
        $this->apiParas['form'] = $form;

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

    public function getSpecification()
    {
        return $this->apiParas['specification'];
    }

    public function setSpecification($specification)
    {
        $this->apiParas['specification'] = $specification;

        return $this;
    }

    public function getGenericName()
    {
        return $this->apiParas['genericName'];
    }

    public function setGenericName($genericName)
    {
        $this->apiParas['genericName'] = $genericName;

        return $this;
    }

    public function getDosage()
    {
        return $this->apiParas['dosage'];
    }

    public function setDosage($dosage)
    {
        $this->apiParas['dosage'] = $dosage;

        return $this;
    }

    public function getUseMethods()
    {
        return $this->apiParas['useMethods'];
    }

    public function setUseMethods($useMethods)
    {
        $this->apiParas['useMethods'] = $useMethods;

        return $this;
    }

    public function getPackingUnit()
    {
        return $this->apiParas['packingUnit'];
    }

    public function setPackingUnit($packingUnit)
    {
        $this->apiParas['packingUnit'] = $packingUnit;

        return $this;
    }

    public function getEfficacy()
    {
        return $this->apiParas['efficacy'];
    }

    public function setEfficacy($efficacy)
    {
        $this->apiParas['efficacy'] = $efficacy;

        return $this;
    }

    public function getManufactory()
    {
        return $this->apiParas['manufactory'];
    }

    public function setManufactory($manufactory)
    {
        $this->apiParas['manufactory'] = $manufactory;

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

    public function getStoreSaleFlag()
    {
        return $this->apiParas['storeSaleFlag'];
    }

    public function setStoreSaleFlag($storeSaleFlag)
    {
        $this->apiParas['storeSaleFlag'] = $storeSaleFlag;

        return $this;
    }

    public function getKeyMaintenance()
    {
        return $this->apiParas['keyMaintenance'];
    }

    public function setKeyMaintenance($keyMaintenance)
    {
        $this->apiParas['keyMaintenance'] = $keyMaintenance;

        return $this;
    }

    public function getSpecialDrugs()
    {
        return $this->apiParas['specialDrugs'];
    }

    public function setSpecialDrugs($specialDrugs)
    {
        $this->apiParas['specialDrugs'] = $specialDrugs;

        return $this;
    }

    public function getMarketingAuthorizationHolder()
    {
        return $this->apiParas['marketingAuthorizationHolder'];
    }

    public function setMarketingAuthorizationHolder($marketingAuthorizationHolder)
    {
        $this->apiParas['marketingAuthorizationHolder'] = $marketingAuthorizationHolder;

        return $this;
    }

    public function getBoxRule()
    {
        return $this->apiParas['boxRule'];
    }

    public function setBoxRule($boxRule)
    {
        $this->apiParas['boxRule'] = $boxRule;

        return $this;
    }

    public function getWarningDay()
    {
        return $this->apiParas['warningDay'];
    }

    public function setWarningDay($warningDay)
    {
        $this->apiParas['warningDay'] = $warningDay;

        return $this;
    }

    public function getRegularAdventDay()
    {
        return $this->apiParas['regularAdventDay'];
    }

    public function setRegularAdventDay($regularAdventDay)
    {
        $this->apiParas['regularAdventDay'] = $regularAdventDay;

        return $this;
    }

    public function getUrgentAdventDay()
    {
        return $this->apiParas['urgentAdventDay'];
    }

    public function setUrgentAdventDay($urgentAdventDay)
    {
        $this->apiParas['urgentAdventDay'] = $urgentAdventDay;

        return $this;
    }

    public function getAdventDay()
    {
        return $this->apiParas['adventDay'];
    }

    public function setAdventDay($adventDay)
    {
        $this->apiParas['adventDay'] = $adventDay;

        return $this;
    }

    public function getEasyPollute()
    {
        return $this->apiParas['easyPollute'];
    }

    public function setEasyPollute($easyPollute)
    {
        $this->apiParas['easyPollute'] = $easyPollute;

        return $this;
    }

    public function getMuslim()
    {
        return $this->apiParas['muslim'];
    }

    public function setMuslim($muslim)
    {
        $this->apiParas['muslim'] = $muslim;

        return $this;
    }

    public function getBoxRegulations()
    {
        return $this->apiParas['boxRegulations'];
    }

    public function setBoxRegulations($boxRegulations)
    {
        $this->apiParas['boxRegulations'] = $boxRegulations;

        return $this;
    }

    public function getAllowedDay()
    {
        return $this->apiParas['allowedDay'];
    }

    public function setAllowedDay($allowedDay)
    {
        $this->apiParas['allowedDay'] = $allowedDay;

        return $this;
    }

    public function getSellerFirstCategory()
    {
        return $this->apiParas['sellerFirstCategory'];
    }

    public function setSellerFirstCategory($sellerFirstCategory)
    {
        $this->apiParas['sellerFirstCategory'] = $sellerFirstCategory;

        return $this;
    }

    public function getSellerSecondCategory()
    {
        return $this->apiParas['sellerSecondCategory'];
    }

    public function setSellerSecondCategory($sellerSecondCategory)
    {
        $this->apiParas['sellerSecondCategory'] = $sellerSecondCategory;

        return $this;
    }

    public function getSellerThirdCategory()
    {
        return $this->apiParas['sellerThirdCategory'];
    }

    public function setSellerThirdCategory($sellerThirdCategory)
    {
        $this->apiParas['sellerThirdCategory'] = $sellerThirdCategory;

        return $this;
    }

    public function getSellerFirstCategoryNo()
    {
        return $this->apiParas['sellerFirstCategoryNo'];
    }

    public function setSellerFirstCategoryNo($sellerFirstCategoryNo)
    {
        $this->apiParas['sellerFirstCategoryNo'] = $sellerFirstCategoryNo;

        return $this;
    }

    public function getSellerSecondCategoryNo()
    {
        return $this->apiParas['sellerSecondCategoryNo'];
    }

    public function setSellerSecondCategoryNo($sellerSecondCategoryNo)
    {
        $this->apiParas['sellerSecondCategoryNo'] = $sellerSecondCategoryNo;

        return $this;
    }

    public function getSellerThirdCategoryNo()
    {
        return $this->apiParas['sellerThirdCategoryNo'];
    }

    public function setSellerThirdCategoryNo($sellerThirdCategoryNo)
    {
        $this->apiParas['sellerThirdCategoryNo'] = $sellerThirdCategoryNo;

        return $this;
    }

    public function getAthletesUseCaution()
    {
        return $this->apiParas['athletesUseCaution'];
    }

    public function setAthletesUseCaution($athletesUseCaution)
    {
        $this->apiParas['athletesUseCaution'] = $athletesUseCaution;

        return $this;
    }

    public function getElecSupervisionCodeFlag()
    {
        return $this->apiParas['elecSupervisionCodeFlag'];
    }

    public function setElecSupervisionCodeFlag($elecSupervisionCodeFlag)
    {
        $this->apiParas['elecSupervisionCodeFlag'] = $elecSupervisionCodeFlag;

        return $this;
    }

    public function getHgsbys()
    {
        return $this->apiParas['hgsbys'];
    }

    public function setHgsbys($hgsbys)
    {
        $this->apiParas['hgsbys'] = $hgsbys;

        return $this;
    }

    public function getGoodsUnit()
    {
        return $this->apiParas['goodsUnit'];
    }

    public function setGoodsUnit($goodsUnit)
    {
        $this->apiParas['goodsUnit'] = $goodsUnit;

        return $this;
    }

    public function getUniqueCode()
    {
        return $this->apiParas['uniqueCode'];
    }

    public function setUniqueCode($uniqueCode)
    {
        $this->apiParas['uniqueCode'] = $uniqueCode;

        return $this;
    }

    public function getProductLine()
    {
        return $this->apiParas['productLine'];
    }

    public function setProductLine($productLine)
    {
        $this->apiParas['productLine'] = $productLine;

        return $this;
    }

    public function getIsStandardInstrument()
    {
        return $this->apiParas['isStandardInstrument'];
    }

    public function setIsStandardInstrument($isStandardInstrument)
    {
        $this->apiParas['isStandardInstrument'] = $isStandardInstrument;

        return $this;
    }

    public function getIsColdChain()
    {
        return $this->apiParas['isColdChain'];
    }

    public function setIsColdChain($isColdChain)
    {
        $this->apiParas['isColdChain'] = $isColdChain;

        return $this;
    }

    public function getIsDetachablePackage()
    {
        return $this->apiParas['isDetachablePackage'];
    }

    public function setIsDetachablePackage($isDetachablePackage)
    {
        $this->apiParas['isDetachablePackage'] = $isDetachablePackage;

        return $this;
    }

    public function getCertificateNo()
    {
        return $this->apiParas['certificateNo'];
    }

    public function setCertificateNo($certificateNo)
    {
        $this->apiParas['certificateNo'] = $certificateNo;

        return $this;
    }

    public function getBusinessTypeName()
    {
        return $this->apiParas['businessTypeName'];
    }

    public function setBusinessTypeName($businessTypeName)
    {
        $this->apiParas['businessTypeName'] = $businessTypeName;

        return $this;
    }

    public function getOwnerTypeName()
    {
        return $this->apiParas['ownerTypeName'];
    }

    public function setOwnerTypeName($ownerTypeName)
    {
        $this->apiParas['ownerTypeName'] = $ownerTypeName;

        return $this;
    }

    public function getPackageTypeName()
    {
        return $this->apiParas['packageTypeName'];
    }

    public function setPackageTypeName($packageTypeName)
    {
        $this->apiParas['packageTypeName'] = $packageTypeName;

        return $this;
    }

    public function getMaterialTypeName()
    {
        return $this->apiParas['materialTypeName'];
    }

    public function setMaterialTypeName($materialTypeName)
    {
        $this->apiParas['materialTypeName'] = $materialTypeName;

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

    public function getClothingAttr()
    {
        return $this->apiParas['clothingAttr'];
    }

    public function setClothingAttr($clothingAttr)
    {
        $this->apiParas['clothingAttr'] = $clothingAttr;

        return $this;
    }

    public function getClothingStyle()
    {
        return $this->apiParas['clothingStyle'];
    }

    public function setClothingStyle($clothingStyle)
    {
        $this->apiParas['clothingStyle'] = $clothingStyle;

        return $this;
    }

    public function getClothingVersionType()
    {
        return $this->apiParas['clothingVersionType'];
    }

    public function setClothingVersionType($clothingVersionType)
    {
        $this->apiParas['clothingVersionType'] = $clothingVersionType;

        return $this;
    }

    public function getClothingSilhouette()
    {
        return $this->apiParas['clothingSilhouette'];
    }

    public function setClothingSilhouette($clothingSilhouette)
    {
        $this->apiParas['clothingSilhouette'] = $clothingSilhouette;

        return $this;
    }

    public function getClothingThickness()
    {
        return $this->apiParas['clothingThickness'];
    }

    public function setClothingThickness($clothingThickness)
    {
        $this->apiParas['clothingThickness'] = $clothingThickness;

        return $this;
    }

    public function getClothingWeek()
    {
        return $this->apiParas['clothingWeek'];
    }

    public function setClothingWeek($clothingWeek)
    {
        $this->apiParas['clothingWeek'] = $clothingWeek;

        return $this;
    }

    public function getBodyParts()
    {
        return $this->apiParas['bodyParts'];
    }

    public function setBodyParts($bodyParts)
    {
        $this->apiParas['bodyParts'] = $bodyParts;

        return $this;
    }

    public function getStyleSex()
    {
        return $this->apiParas['styleSex'];
    }

    public function setStyleSex($styleSex)
    {
        $this->apiParas['styleSex'] = $styleSex;

        return $this;
    }

    public function getListedBand()
    {
        return $this->apiParas['listedBand'];
    }

    public function setListedBand($listedBand)
    {
        $this->apiParas['listedBand'] = $listedBand;

        return $this;
    }

    public function getExpectListedTime()
    {
        return $this->apiParas['expectListedTime'];
    }

    public function setExpectListedTime($expectListedTime)
    {
        $this->apiParas['expectListedTime'] = $expectListedTime;

        return $this;
    }

    public function getFabric()
    {
        return $this->apiParas['fabric'];
    }

    public function setFabric($fabric)
    {
        $this->apiParas['fabric'] = $fabric;

        return $this;
    }

    public function getWashing()
    {
        return $this->apiParas['washing'];
    }

    public function setWashing($washing)
    {
        $this->apiParas['washing'] = $washing;

        return $this;
    }

    public function getYear()
    {
        return $this->apiParas['year'];
    }

    public function setYear($year)
    {
        $this->apiParas['year'] = $year;

        return $this;
    }

    public function getProductSeason()
    {
        return $this->apiParas['productSeason'];
    }

    public function setProductSeason($productSeason)
    {
        $this->apiParas['productSeason'] = $productSeason;

        return $this;
    }

    public function getAfterSaleFlag()
    {
        return $this->apiParas['afterSaleFlag'];
    }

    public function setAfterSaleFlag($afterSaleFlag)
    {
        $this->apiParas['afterSaleFlag'] = $afterSaleFlag;

        return $this;
    }

    public function getProductionLicenseNo()
    {
        return $this->apiParas['productionLicenseNo'];
    }

    public function setProductionLicenseNo($productionLicenseNo)
    {
        $this->apiParas['productionLicenseNo'] = $productionLicenseNo;

        return $this;
    }

    public function getTransportTemperature()
    {
        return $this->apiParas['transportTemperature'];
    }

    public function setTransportTemperature($transportTemperature)
    {
        $this->apiParas['transportTemperature'] = $transportTemperature;

        return $this;
    }

    public function getBoxUniqueCode()
    {
        return $this->apiParas['boxUniqueCode'];
    }

    public function setBoxUniqueCode($boxUniqueCode)
    {
        $this->apiParas['boxUniqueCode'] = $boxUniqueCode;

        return $this;
    }

    public function getAuxiliary()
    {
        return $this->apiParas['auxiliary'];
    }

    public function setAuxiliary($auxiliary)
    {
        $this->apiParas['auxiliary'] = $auxiliary;

        return $this;
    }

    public function getGoodsNameEn()
    {
        return $this->apiParas['goodsNameEn'];
    }

    public function setGoodsNameEn($goodsNameEn)
    {
        $this->apiParas['goodsNameEn'] = $goodsNameEn;

        return $this;
    }

    public function getMinSaleQuantity()
    {
        return $this->apiParas['minSaleQuantity'];
    }

    public function setMinSaleQuantity($minSaleQuantity)
    {
        $this->apiParas['minSaleQuantity'] = $minSaleQuantity;

        return $this;
    }

    public function getMinPackageQuantity()
    {
        return $this->apiParas['minPackageQuantity'];
    }

    public function setMinPackageQuantity($minPackageQuantity)
    {
        $this->apiParas['minPackageQuantity'] = $minPackageQuantity;

        return $this;
    }

    public function getPackageInstruction()
    {
        return $this->apiParas['packageInstruction'];
    }

    public function setPackageInstruction($packageInstruction)
    {
        $this->apiParas['packageInstruction'] = $packageInstruction;

        return $this;
    }

    public function getTexture()
    {
        return $this->apiParas['texture'];
    }

    public function setTexture($texture)
    {
        $this->apiParas['texture'] = $texture;

        return $this;
    }

    public function getSubstrate()
    {
        return $this->apiParas['substrate'];
    }

    public function setSubstrate($substrate)
    {
        $this->apiParas['substrate'] = $substrate;

        return $this;
    }

    public function getExecutiveStandard()
    {
        return $this->apiParas['executiveStandard'];
    }

    public function setExecutiveStandard($executiveStandard)
    {
        $this->apiParas['executiveStandard'] = $executiveStandard;

        return $this;
    }

    public function getProcessTechnology()
    {
        return $this->apiParas['processTechnology'];
    }

    public function setProcessTechnology($processTechnology)
    {
        $this->apiParas['processTechnology'] = $processTechnology;

        return $this;
    }

    public function getAllSerial()
    {
        return $this->apiParas['allSerial'];
    }

    public function setAllSerial($allSerial)
    {
        $this->apiParas['allSerial'] = $allSerial;

        return $this;
    }

    public function getIsRcvDate()
    {
        return $this->apiParas['isRcvDate'];
    }

    public function setIsRcvDate($isRcvDate)
    {
        $this->apiParas['isRcvDate'] = $isRcvDate;

        return $this;
    }

    public function getRenewPackage()
    {
        return $this->apiParas['renewPackage'];
    }

    public function setRenewPackage($renewPackage)
    {
        $this->apiParas['renewPackage'] = $renewPackage;

        return $this;
    }

    public function getImgUrls()
    {
        return $this->apiParas['imgUrls'];
    }

    public function setImgUrls($imgUrls)
    {
        $this->apiParas['imgUrls'] = $imgUrls;

        return $this;
    }

    public function getWarehouseInsured()
    {
        return $this->apiParas['warehouseInsured'];
    }

    public function setWarehouseInsured($warehouseInsured)
    {
        $this->apiParas['warehouseInsured'] = $warehouseInsured;

        return $this;
    }

    public function getTransportInsured()
    {
        return $this->apiParas['transportInsured'];
    }

    public function setTransportInsured($transportInsured)
    {
        $this->apiParas['transportInsured'] = $transportInsured;

        return $this;
    }
}
