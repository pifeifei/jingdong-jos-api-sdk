<?php

class EclpIbdGoodsTransportGoodsInfoRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.ibd.goods.transportGoodsInfo";
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

    private $version;

    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function getVersion()
    {
        return $this->version;
    }
                                                                                                                                    private $deptNo;

    public function setDeptNo($deptNo)
    {
        $this->deptNo = $deptNo;
         $this->apiParas["deptNo"] = $deptNo;
    }

    public function getDeptNo()
    {
        return $this->deptNo;
    }

                                                        private $isvGoodsNo;

    public function setIsvGoodsNo($isvGoodsNo)
    {
        $this->isvGoodsNo = $isvGoodsNo;
         $this->apiParas["isvGoodsNo"] = $isvGoodsNo;
    }

    public function getIsvGoodsNo()
    {
        return $this->isvGoodsNo;
    }

                                                        private $spGodosNo;

    public function setSpGodosNo($spGodosNo)
    {
        $this->spGodosNo = $spGodosNo;
         $this->apiParas["spGodosNo"] = $spGodosNo;
    }

    public function getSpGodosNo()
    {
        return $this->spGodosNo;
    }

                                                        private $barcodes;

    public function setBarcodes($barcodes)
    {
        $this->barcodes = $barcodes;
         $this->apiParas["barcodes"] = $barcodes;
    }

    public function getBarcodes()
    {
        return $this->barcodes;
    }

                                                        private $thirdCategoryNo;

    public function setThirdCategoryNo($thirdCategoryNo)
    {
        $this->thirdCategoryNo = $thirdCategoryNo;
         $this->apiParas["thirdCategoryNo"] = $thirdCategoryNo;
    }

    public function getThirdCategoryNo()
    {
        return $this->thirdCategoryNo;
    }

                                                        private $goodsName;

    public function setGoodsName($goodsName)
    {
        $this->goodsName = $goodsName;
         $this->apiParas["goodsName"] = $goodsName;
    }

    public function getGoodsName()
    {
        return $this->goodsName;
    }

                                                        private $brandNo;

    public function setBrandNo($brandNo)
    {
        $this->brandNo = $brandNo;
         $this->apiParas["brandNo"] = $brandNo;
    }

    public function getBrandNo()
    {
        return $this->brandNo;
    }

                                                        private $brandName;

    public function setBrandName($brandName)
    {
        $this->brandName = $brandName;
         $this->apiParas["brandName"] = $brandName;
    }

    public function getBrandName()
    {
        return $this->brandName;
    }

                                                        private $grossWeight;

    public function setGrossWeight($grossWeight)
    {
        $this->grossWeight = $grossWeight;
         $this->apiParas["grossWeight"] = $grossWeight;
    }

    public function getGrossWeight()
    {
        return $this->grossWeight;
    }

                                                        private $netWeight;

    public function setNetWeight($netWeight)
    {
        $this->netWeight = $netWeight;
         $this->apiParas["netWeight"] = $netWeight;
    }

    public function getNetWeight()
    {
        return $this->netWeight;
    }

                                                        private $length;

    public function setLength($length)
    {
        $this->length = $length;
         $this->apiParas["length"] = $length;
    }

    public function getLength()
    {
        return $this->length;
    }

                                                        private $width;

    public function setWidth($width)
    {
        $this->width = $width;
         $this->apiParas["width"] = $width;
    }

    public function getWidth()
    {
        return $this->width;
    }

                                                        private $height;

    public function setHeight($height)
    {
        $this->height = $height;
         $this->apiParas["height"] = $height;
    }

    public function getHeight()
    {
        return $this->height;
    }

                                                        private $safeDays;

    public function setSafeDays($safeDays)
    {
        $this->safeDays = $safeDays;
         $this->apiParas["safeDays"] = $safeDays;
    }

    public function getSafeDays()
    {
        return $this->safeDays;
    }

                                                        private $batch;

    public function setBatch($batch)
    {
        $this->batch = $batch;
         $this->apiParas["batch"] = $batch;
    }

    public function getBatch()
    {
        return $this->batch;
    }

                                                        private $overseaPurchase;

    public function setOverseaPurchase($overseaPurchase)
    {
        $this->overseaPurchase = $overseaPurchase;
         $this->apiParas["overseaPurchase"] = $overseaPurchase;
    }

    public function getOverseaPurchase()
    {
        return $this->overseaPurchase;
    }

                                                        private $qiRecord;

    public function setQiRecord($qiRecord)
    {
        $this->qiRecord = $qiRecord;
         $this->apiParas["qiRecord"] = $qiRecord;
    }

    public function getQiRecord()
    {
        return $this->qiRecord;
    }

                                                        private $customRecord;

    public function setCustomRecord($customRecord)
    {
        $this->customRecord = $customRecord;
         $this->apiParas["customRecord"] = $customRecord;
    }

    public function getCustomRecord()
    {
        return $this->customRecord;
    }

                                                        private $pattern;

    public function setPattern($pattern)
    {
        $this->pattern = $pattern;
         $this->apiParas["pattern"] = $pattern;
    }

    public function getPattern()
    {
        return $this->pattern;
    }

                                                        private $ccProvider;

    public function setCcProvider($ccProvider)
    {
        $this->ccProvider = $ccProvider;
         $this->apiParas["ccProvider"] = $ccProvider;
    }

    public function getCcProvider()
    {
        return $this->ccProvider;
    }

                                                        private $bondedArea;

    public function setBondedArea($bondedArea)
    {
        $this->bondedArea = $bondedArea;
         $this->apiParas["bondedArea"] = $bondedArea;
    }

    public function getBondedArea()
    {
        return $this->bondedArea;
    }

                                                        private $sellerRecord;

    public function setSellerRecord($sellerRecord)
    {
        $this->sellerRecord = $sellerRecord;
         $this->apiParas["sellerRecord"] = $sellerRecord;
    }

    public function getSellerRecord()
    {
        return $this->sellerRecord;
    }

                                                        private $batAttrIds;

    public function setBatAttrIds($batAttrIds)
    {
        $this->batAttrIds = $batAttrIds;
         $this->apiParas["batAttrIds"] = $batAttrIds;
    }

    public function getBatAttrIds()
    {
        return $this->batAttrIds;
    }

                                                        private $needJDRecord;

    public function setNeedJDRecord($needJDRecord)
    {
        $this->needJDRecord = $needJDRecord;
         $this->apiParas["needJDRecord"] = $needJDRecord;
    }

    public function getNeedJDRecord()
    {
        return $this->needJDRecord;
    }

                                                        private $modelNumber;

    public function setModelNumber($modelNumber)
    {
        $this->modelNumber = $modelNumber;
         $this->apiParas["modelNumber"] = $modelNumber;
    }

    public function getModelNumber()
    {
        return $this->modelNumber;
    }

                                                        private $spe;

    public function setSpe($spe)
    {
        $this->spe = $spe;
         $this->apiParas["spe"] = $spe;
    }

    public function getSpe()
    {
        return $this->spe;
    }

                                                        private $vatRate;

    public function setVatRate($vatRate)
    {
        $this->vatRate = $vatRate;
         $this->apiParas["vatRate"] = $vatRate;
    }

    public function getVatRate()
    {
        return $this->vatRate;
    }

                                                        private $taxRate;

    public function setTaxRate($taxRate)
    {
        $this->taxRate = $taxRate;
         $this->apiParas["taxRate"] = $taxRate;
    }

    public function getTaxRate()
    {
        return $this->taxRate;
    }

                                                        private $taxNumberPost;

    public function setTaxNumberPost($taxNumberPost)
    {
        $this->taxNumberPost = $taxNumberPost;
         $this->apiParas["taxNumberPost"] = $taxNumberPost;
    }

    public function getTaxNumberPost()
    {
        return $this->taxNumberPost;
    }

                                                        private $postRate;

    public function setPostRate($postRate)
    {
        $this->postRate = $postRate;
         $this->apiParas["postRate"] = $postRate;
    }

    public function getPostRate()
    {
        return $this->postRate;
    }

                                                        private $hsCode;

    public function setHsCode($hsCode)
    {
        $this->hsCode = $hsCode;
         $this->apiParas["hsCode"] = $hsCode;
    }

    public function getHsCode()
    {
        return $this->hsCode;
    }

                                                        private $country;

    public function setCountry($country)
    {
        $this->country = $country;
         $this->apiParas["country"] = $country;
    }

    public function getCountry()
    {
        return $this->country;
    }

                                                        private $qiCountry;

    public function setQiCountry($qiCountry)
    {
        $this->qiCountry = $qiCountry;
         $this->apiParas["qiCountry"] = $qiCountry;
    }

    public function getQiCountry()
    {
        return $this->qiCountry;
    }

                                                        private $flag;

    public function setFlag($flag)
    {
        $this->flag = $flag;
         $this->apiParas["flag"] = $flag;
    }

    public function getFlag()
    {
        return $this->flag;
    }

                                                        private $legalUnit1;

    public function setLegalUnit1($legalUnit1)
    {
        $this->legalUnit1 = $legalUnit1;
         $this->apiParas["legalUnit1"] = $legalUnit1;
    }

    public function getLegalUnit1()
    {
        return $this->legalUnit1;
    }

                                                        private $legalAmount1;

    public function setLegalAmount1($legalAmount1)
    {
        $this->legalAmount1 = $legalAmount1;
         $this->apiParas["legalAmount1"] = $legalAmount1;
    }

    public function getLegalAmount1()
    {
        return $this->legalAmount1;
    }

                                                        private $legalUnit2;

    public function setLegalUnit2($legalUnit2)
    {
        $this->legalUnit2 = $legalUnit2;
         $this->apiParas["legalUnit2"] = $legalUnit2;
    }

    public function getLegalUnit2()
    {
        return $this->legalUnit2;
    }

                                                        private $legalAmount2;

    public function setLegalAmount2($legalAmount2)
    {
        $this->legalAmount2 = $legalAmount2;
         $this->apiParas["legalAmount2"] = $legalAmount2;
    }

    public function getLegalAmount2()
    {
        return $this->legalAmount2;
    }

                                                        private $measurement;

    public function setMeasurement($measurement)
    {
        $this->measurement = $measurement;
         $this->apiParas["measurement"] = $measurement;
    }

    public function getMeasurement()
    {
        return $this->measurement;
    }

                                                        private $qiMeasurement;

    public function setQiMeasurement($qiMeasurement)
    {
        $this->qiMeasurement = $qiMeasurement;
         $this->apiParas["qiMeasurement"] = $qiMeasurement;
    }

    public function getQiMeasurement()
    {
        return $this->qiMeasurement;
    }

                                                        private $delivery;

    public function setDelivery($delivery)
    {
        $this->delivery = $delivery;
         $this->apiParas["delivery"] = $delivery;
    }

    public function getDelivery()
    {
        return $this->delivery;
    }

                                                        private $hgsbys;

    public function setHgsbys($hgsbys)
    {
        $this->hgsbys = $hgsbys;
         $this->apiParas["hgsbys"] = $hgsbys;
    }

    public function getHgsbys()
    {
        return $this->hgsbys;
    }
}
