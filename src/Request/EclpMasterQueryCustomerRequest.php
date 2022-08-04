<?php

namespace ACES\Request;

class EclpMasterQueryCustomerRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.eclp.master.queryCustomer';
    }

    public function check()
    {
    }

    public function getDeptNo()
    {
        return $this->apiParas['deptNo'];
    }

    public function setDeptNo($deptNo)
    {
        $this->apiParas['deptNo'] = $deptNo;

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

    public function getCustomerNo()
    {
        return $this->apiParas['customerNo'];
    }

    public function setCustomerNo($customerNo)
    {
        $this->apiParas['customerNo'] = $customerNo;

        return $this;
    }

    public function getCustomerName()
    {
        return $this->apiParas['customerName'];
    }

    public function setCustomerName($customerName)
    {
        $this->apiParas['customerName'] = $customerName;

        return $this;
    }

    public function getWarehouseNo()
    {
        return $this->apiParas['warehouseNo'];
    }

    public function setWarehouseNo($warehouseNo)
    {
        $this->apiParas['warehouseNo'] = $warehouseNo;

        return $this;
    }

    public function getSellerName()
    {
        return $this->apiParas['sellerName'];
    }

    public function setSellerName($sellerName)
    {
        $this->apiParas['sellerName'] = $sellerName;

        return $this;
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
