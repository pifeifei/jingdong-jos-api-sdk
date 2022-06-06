<?php

namespace ACES\Request;


class EclpMasterQueryStoreInfoRequest
{
    private $apiParas = array();
    private $version;
    private $page;
    private $pageSize;
    private $sellerNo;
    private $storeNo;

    public function getApiMethodName()
    {
        return "jingdong.eclp.master.queryStoreInfo";
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

    public function getPage()
    {
        return $this->page;
    }

    public function setPage($page)
    {
        $this->page = $page;
        $this->apiParas["page"] = $page;
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

    public function getSellerNo()
    {
        return $this->sellerNo;
    }

    public function setSellerNo($sellerNo)
    {
        $this->sellerNo = $sellerNo;
        $this->apiParas["sellerNo"] = $sellerNo;
    }

    public function getStoreNo()
    {
        return $this->storeNo;
    }

    public function setStoreNo($storeNo)
    {
        $this->storeNo = $storeNo;
        $this->apiParas["storeNo"] = $storeNo;
    }
}
