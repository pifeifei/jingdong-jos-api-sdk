<?php

namespace ACES\Request;

class LdopAlphaProviderAutoRecycleDetailRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.ldop.alpha.provider.autoRecycleDetail';
    }

    public function check()
    {
    }

    public function getProviderCode()
    {
        return $this->apiParas['providerCode'];
    }

    public function setProviderCode($providerCode)
    {
        $this->apiParas['providerCode'] = $providerCode;

        return $this;
    }

    public function getStartTime()
    {
        return $this->apiParas['startTime'];
    }

    public function setStartTime($startTime)
    {
        $this->apiParas['startTime'] = $startTime;

        return $this;
    }

    public function getEndTime()
    {
        return $this->apiParas['endTime'];
    }

    public function setEndTime($endTime)
    {
        $this->apiParas['endTime'] = $endTime;

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
