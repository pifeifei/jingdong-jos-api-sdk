<?php

namespace ACES\Request;

class EclpGoodsQueryGoodsByPageAndTimeRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.eclp.goods.queryGoodsByPageAndTime';
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

    public function getUpdateTimeStart()
    {
        return $this->apiParas['updateTimeStart'];
    }

    public function setUpdateTimeStart($updateTimeStart)
    {
        $this->apiParas['updateTimeStart'] = $updateTimeStart;

        return $this;
    }

    public function getUpdateTimeEnd()
    {
        return $this->apiParas['updateTimeEnd'];
    }

    public function setUpdateTimeEnd($updateTimeEnd)
    {
        $this->apiParas['updateTimeEnd'] = $updateTimeEnd;

        return $this;
    }
}
