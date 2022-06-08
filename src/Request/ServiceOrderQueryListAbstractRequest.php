<?php

namespace ACES\Request;

class ServiceOrderQueryListAbstractRequest extends AbstractRequest
{
    /**
     * {@inheritDoc}
     */
    public function getApiMethodName()
    {
        return 'jingdong.service.order.query.list';
    }

    public function check()
    {
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
    }

    public function getServiceApiRequest()
    {
        return $this->apiParas['serviceApiRequest'];
    }

    public function setServiceApiRequest($serviceApiRequest)
    {
        $this->apiParas['serviceApiRequest'] = $serviceApiRequest;
    }

    public function getCurPage()
    {
        return $this->apiParas['curPage'];
    }

    public function setCurPage($curPage)
    {
        $this->apiParas['curPage'] = $curPage;
    }

    public function getPageSize()
    {
        return $this->apiParas['pageSize'];
    }

    public function setPageSize($pageSize)
    {
        $this->apiParas['pageSize'] = $pageSize;
    }
}
