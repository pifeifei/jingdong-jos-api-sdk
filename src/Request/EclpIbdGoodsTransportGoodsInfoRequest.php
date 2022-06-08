<?php

namespace ACES\Request;

class EclpIbdGoodsTransportGoodsInfoRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.eclp.ibd.goods.transportGoodsInfo';
    }

    public function check()
    {
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

    public function getIsvGoodsNo()
    {
        return $this->apiParas['isvGoodsNo'];
    }

    public function setIsvGoodsNo($isvGoodsNo)
    {
        $this->apiParas['isvGoodsNo'] = $isvGoodsNo;

        return $this;
    }

    public function getSpGodosNo()
    {
        return $this->apiParas['spGodosNo'];
    }

    public function setSpGodosNo($spGodosNo)
    {
        $this->apiParas['spGodosNo'] = $spGodosNo;

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

    public function getThirdCategoryNo()
    {
        return $this->apiParas['thirdCategoryNo'];
    }

    public function setThirdCategoryNo($thirdCategoryNo)
    {
        $this->apiParas['thirdCategoryNo'] = $thirdCategoryNo;

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

    public function getSafeDays()
    {
        return $this->apiParas['safeDays'];
    }

    public function setSafeDays($safeDays)
    {
        $this->apiParas['safeDays'] = $safeDays;

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

    public function getHgsbys()
    {
        return $this->apiParas['hgsbys'];
    }

    public function setHgsbys($hgsbys)
    {
        $this->apiParas['hgsbys'] = $hgsbys;

        return $this;
    }
}
