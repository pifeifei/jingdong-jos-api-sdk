<?php

namespace ACES\Request;


class EclpOrderQueryOrderPacksBySoNoRequest
{
    private $apiParas = array();
    private $version;
    private $pageNo;
    private $soNo;
    private $pageSize;

    public function getApiMethodName()
    {
        return "jingdong.eclp.order.queryOrderPacksBySoNo";
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

    public function getPageNo()
    {
        return $this->pageNo;
    }

    public function setPageNo($pageNo)
    {
        $this->pageNo = $pageNo;
        $this->apiParas["pageNo"] = $pageNo;
    }

    public function getSoNo()
    {
        return $this->soNo;
    }

    public function setSoNo($soNo)
    {
        $this->soNo = $soNo;
        $this->apiParas["soNo"] = $soNo;
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
}
