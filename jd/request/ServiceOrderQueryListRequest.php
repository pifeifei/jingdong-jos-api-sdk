<?php

class ServiceOrderQueryListRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.service.order.query.list";
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

    private $version;

    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function getVersion()
    {
        return $this->version;
    }
    private $serviceApiRequest;

    public function setServiceApiRequest($serviceApiRequest)
    {
        $this->apiParas['serviceApiRequest'] = $serviceApiRequest;
    }
    public function getServiceApiRequest()
    {
        return $this->apiParas['serviceApiRequest'];
    }
    private $curPage;

    public function setCurPage($curPage)
    {
        $this->apiParas['curPage'] = $curPage;
    }
    public function getCurPage()
    {
        return $this->apiParas['curPage'];
    }
    private $pageSize;

    public function setPageSize($pageSize)
    {
        $this->apiParas['pageSize'] = $pageSize;
    }
    public function getPageSize()
    {
        return $this->apiParas['pageSize'];
    }
}
