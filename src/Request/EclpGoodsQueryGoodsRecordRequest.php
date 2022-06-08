<?php

namespace ACES\Request;

class EclpGoodsQueryGoodsRecordRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.eclp.goods.queryGoodsRecord';
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

    public function getGoodsNo()
    {
        return $this->apiParas['goodsNo'];
    }

    public function setGoodsNo($goodsNo)
    {
        $this->apiParas['goodsNo'] = $goodsNo;

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

    public function getStartDate()
    {
        return $this->apiParas['startDate'];
    }

    public function setStartDate($startDate)
    {
        $this->apiParas['startDate'] = $startDate;

        return $this;
    }

    public function getEndDate()
    {
        return $this->apiParas['endDate'];
    }

    public function setEndDate($endDate)
    {
        $this->apiParas['endDate'] = $endDate;

        return $this;
    }
}
