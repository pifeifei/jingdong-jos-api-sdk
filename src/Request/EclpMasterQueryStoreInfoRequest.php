<?php

namespace ACES\Request;

class EclpMasterQueryStoreInfoRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.eclp.master.queryStoreInfo';
    }

    public function check()
    {
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

    public function getSellerNo()
    {
        return $this->apiParas['sellerNo'];
    }

    public function setSellerNo($sellerNo)
    {
        $this->apiParas['sellerNo'] = $sellerNo;

        return $this;
    }

    public function getStoreNo()
    {
        return $this->apiParas['storeNo'];
    }

    public function setStoreNo($storeNo)
    {
        $this->apiParas['storeNo'] = $storeNo;

        return $this;
    }
}
