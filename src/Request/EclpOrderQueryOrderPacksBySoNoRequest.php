<?php

namespace ACES\Request;

class EclpOrderQueryOrderPacksBySoNoRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.eclp.order.queryOrderPacksBySoNo';
    }

    public function check()
    {
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

    public function getSoNo()
    {
        return $this->apiParas['soNo'];
    }

    public function setSoNo($soNo)
    {
        $this->apiParas['soNo'] = $soNo;

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
