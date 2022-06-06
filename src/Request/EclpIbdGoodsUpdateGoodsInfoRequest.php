<?php

namespace ACES\Request;


class EclpIbdGoodsUpdateGoodsInfoRequest
{
    private $apiParas = array();
    private $version;
    private $goodsNo;
    private $spGodosNo;
    private $barcodes;
    private $brandNo;
    private $brandName;
    private $grossWeight;
    private $netWeight;
    private $length;
    private $width;
    private $height;
    private $batch;
    private $isvGoodsNo;
    private $deptNo;
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
    private $legalAmount;
    private $legalUnit2;
    private $legalAmount2;
    private $measurement;
    private $qiMeasurement;
    private $delivery;
    private $hgsbys;

    public function getApiMethodName()
    {
        return "jingdong.eclp.ibd.goods.updateGoodsInfo";
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

    public function getGoodsNo()
    {
        return $this->goodsNo;
    }

    public function setGoodsNo($goodsNo)
    {
        $this->goodsNo = $goodsNo;
        $this->apiParas["goodsNo"] = $goodsNo;
    }

    public function getSpGodosNo()
    {
        return $this->spGodosNo;
    }

    public function setSpGodosNo($spGodosNo)
    {
        $this->spGodosNo = $spGodosNo;
        $this->apiParas["spGodosNo"] = $spGodosNo;
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

    public function getBatch()
    {
        return $this->batch;
    }

    public function setBatch($batch)
    {
        $this->batch = $batch;
        $this->apiParas["batch"] = $batch;
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

    public function getDeptNo()
    {
        return $this->deptNo;
    }

    public function setDeptNo($deptNo)
    {
        $this->deptNo = $deptNo;
        $this->apiParas["deptNo"] = $deptNo;
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

    public function getLegalAmount()
    {
        return $this->legalAmount;
    }

    public function setLegalAmount($legalAmount)
    {
        $this->legalAmount = $legalAmount;
        $this->apiParas["legalAmount"] = $legalAmount;
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

    public function getHgsbys()
    {
        return $this->hgsbys;
    }

    public function setHgsbys($hgsbys)
    {
        $this->hgsbys = $hgsbys;
        $this->apiParas["hgsbys"] = $hgsbys;
    }
}
