<?php

namespace ACES\Request;

class EclpRtwRejectorderinfoRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.eclp.rtw.rejectorderinfo';
    }

    public function check()
    {
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

    public function getPageStart()
    {
        return $this->apiParas['pageStart'];
    }

    public function setPageStart($pageStart)
    {
        $this->apiParas['pageStart'] = $pageStart;

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
