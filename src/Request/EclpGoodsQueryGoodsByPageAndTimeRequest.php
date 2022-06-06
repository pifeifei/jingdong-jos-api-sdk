<?php

namespace ACES\Request;


class EclpGoodsQueryGoodsByPageAndTimeRequest
{
    private $apiParas = array();
    private $version;
    private $deptNo;
    private $isvGoodsNos;
    private $goodsNos;
    private $pageNo;
    private $pageSize;
    private $updateTimeStart;
    private $updateTimeEnd;

    public function getApiMethodName()
    {
        return "jingdong.eclp.goods.queryGoodsByPageAndTime";
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

    public function getIsvGoodsNos()
    {
        return $this->isvGoodsNos;
    }

    public function setIsvGoodsNos($isvGoodsNos)
    {
        $this->isvGoodsNos = $isvGoodsNos;
        $this->apiParas["isvGoodsNos"] = $isvGoodsNos;
    }

    public function getGoodsNos()
    {
        return $this->goodsNos;
    }

    public function setGoodsNos($goodsNos)
    {
        $this->goodsNos = $goodsNos;
        $this->apiParas["goodsNos"] = $goodsNos;
    }

    public function getPageNo()
    {
        return $this->pageNo;
    }

    public function setPageNo($pageNo)
    {
        $this->pageNo = $pageNo;
        $this->apiParas["pageNo"] = $pageNo;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }

    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
        $this->apiParas["pageSize"] = $pageSize;
    }

    public function getUpdateTimeStart()
    {
        return $this->updateTimeStart;
    }

    public function setUpdateTimeStart($updateTimeStart)
    {
        $this->updateTimeStart = $updateTimeStart;
        $this->apiParas["updateTimeStart"] = $updateTimeStart;
    }

    public function getUpdateTimeEnd()
    {
        return $this->updateTimeEnd;
    }

    public function setUpdateTimeEnd($updateTimeEnd)
    {
        $this->updateTimeEnd = $updateTimeEnd;
        $this->apiParas["updateTimeEnd"] = $updateTimeEnd;
    }
}
