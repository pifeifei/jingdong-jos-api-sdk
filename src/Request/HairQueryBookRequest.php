<?php

namespace ACES\Request;

class HairQueryBookRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.hair.queryBook';
    }

    public function check()
    {
    }

    public function getBeginDate()
    {
        return $this->apiParas['beginDate'];
    }

    public function setBeginDate($beginDate)
    {
        $this->apiParas['beginDate'] = $beginDate;

        return $this;
    }

    public function getSupNo()
    {
        return $this->apiParas['supNo'];
    }

    public function setSupNo($supNo)
    {
        $this->apiParas['supNo'] = $supNo;

        return $this;
    }

    public function getPoNo()
    {
        return $this->apiParas['poNo'];
    }

    public function setPoNo($poNo)
    {
        $this->apiParas['poNo'] = $poNo;

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

    public function getWhNo()
    {
        return $this->apiParas['whNo'];
    }

    public function setWhNo($whNo)
    {
        $this->apiParas['whNo'] = $whNo;

        return $this;
    }

    public function getOwnerNo()
    {
        return $this->apiParas['ownerNo'];
    }

    public function setOwnerNo($ownerNo)
    {
        $this->apiParas['ownerNo'] = $ownerNo;

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

    public function getPage()
    {
        return $this->apiParas['page'];
    }

    public function setPage($page)
    {
        $this->apiParas['page'] = $page;

        return $this;
    }

    public function getDcNo()
    {
        return $this->apiParas['dcNo'];
    }

    public function setDcNo($dcNo)
    {
        $this->apiParas['dcNo'] = $dcNo;

        return $this;
    }
}
