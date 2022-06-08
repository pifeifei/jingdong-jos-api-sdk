<?php

namespace ACES\Request;

class EclpGoodsQueryGoodsInfoRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.eclp.goods.queryGoodsInfo';
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

    public function getIsvGoodsNos()
    {
        return $this->apiParas['isvGoodsNos'];
    }

    public function setIsvGoodsNos($isvGoodsNos)
    {
        $this->apiParas['isvGoodsNos'] = $isvGoodsNos;

        return $this;
    }

    public function getGoodsNos()
    {
        return $this->apiParas['goodsNos'];
    }

    public function setGoodsNos($goodsNos)
    {
        $this->apiParas['goodsNos'] = $goodsNos;

        return $this;
    }

    public function getQueryType()
    {
        return $this->apiParas['queryType'];
    }

    public function setQueryType($queryType)
    {
        $this->apiParas['queryType'] = $queryType;

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

    public function getPageNo()
    {
        return $this->apiParas['pageNo'];
    }

    public function setPageNo($pageNo)
    {
        $this->apiParas['pageNo'] = $pageNo;

        return $this;
    }

    public function getPageSize()
    {
        return $this->apiParas['pageSize'];
    }

    public function setPageSize($pageSize)
    {
        $this->apiParas['pageSize'] = $pageSize;

        return $this;
    }
}
