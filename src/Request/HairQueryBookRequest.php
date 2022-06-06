<?php

namespace ACES\Request;


class HairQueryBookRequest
{
    private $apiParas = array();
    private $version;
    private $beginDate;
    private $supNo;
    private $poNo;
    private $endDate;
    private $whNo;
    private $ownerNo;
    private $pageSize;
    private $page;
    private $dcNo;

    public function getApiMethodName()
    {
        return "jingdong.hair.queryBook";
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

    public function getBeginDate()
    {
        return $this->beginDate;
    }

    public function setBeginDate($beginDate)
    {
        $this->beginDate = $beginDate;
        $this->apiParas["beginDate"] = $beginDate;
    }

    public function getSupNo()
    {
        return $this->supNo;
    }

    public function setSupNo($supNo)
    {
        $this->supNo = $supNo;
        $this->apiParas["supNo"] = $supNo;
    }

    public function getPoNo()
    {
        return $this->poNo;
    }

    public function setPoNo($poNo)
    {
        $this->poNo = $poNo;
        $this->apiParas["poNo"] = $poNo;
    }

    public function getEndDate()
    {
        return $this->endDate;
    }

    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        $this->apiParas["endDate"] = $endDate;
    }

    public function getWhNo()
    {
        return $this->whNo;
    }

    public function setWhNo($whNo)
    {
        $this->whNo = $whNo;
        $this->apiParas["whNo"] = $whNo;
    }

    public function getOwnerNo()
    {
        return $this->ownerNo;
    }

    public function setOwnerNo($ownerNo)
    {
        $this->ownerNo = $ownerNo;
        $this->apiParas["ownerNo"] = $ownerNo;
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

    public function getPage()
    {
        return $this->page;
    }

    public function setPage($page)
    {
        $this->page = $page;
        $this->apiParas["page"] = $page;
    }

    public function getDcNo()
    {
        return $this->dcNo;
    }

    public function setDcNo($dcNo)
    {
        $this->dcNo = $dcNo;
        $this->apiParas["dcNo"] = $dcNo;
    }
}
