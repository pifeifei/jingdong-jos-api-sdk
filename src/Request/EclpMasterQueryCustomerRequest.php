<?php

namespace ACES\Request;


class EclpMasterQueryCustomerRequest
{
    private $apiParas = array();
    private $version;
    private $deptNo;
    private $sellerNo;
    private $customerNo;
    private $customerName;
    private $warehouseNo;
    private $sellerName;
    private $pageNo;
    private $pageSize;

    public function getApiMethodName()
    {
        return "jingdong.eclp.master.queryCustomer";
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

    public function getDeptNo()
    {
        return $this->deptNo;
    }

    public function setDeptNo($deptNo)
    {
        $this->deptNo = $deptNo;
        $this->apiParas["deptNo"] = $deptNo;
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

    public function getCustomerNo()
    {
        return $this->customerNo;
    }

    public function setCustomerNo($customerNo)
    {
        $this->customerNo = $customerNo;
        $this->apiParas["customerNo"] = $customerNo;
    }

    public function getCustomerName()
    {
        return $this->customerName;
    }

    public function setCustomerName($customerName)
    {
        $this->customerName = $customerName;
        $this->apiParas["customerName"] = $customerName;
    }

    public function getWarehouseNo()
    {
        return $this->warehouseNo;
    }

    public function setWarehouseNo($warehouseNo)
    {
        $this->warehouseNo = $warehouseNo;
        $this->apiParas["warehouseNo"] = $warehouseNo;
    }

    public function getSellerName()
    {
        return $this->sellerName;
    }

    public function setSellerName($sellerName)
    {
        $this->sellerName = $sellerName;
        $this->apiParas["sellerName"] = $sellerName;
    }

    public function getPageNo()
    {
        return $this->pageNo;
    }

    public function setPageNo($pageNo)
    {
        $this->pageNo = $pageNo;
        $this->apiParas["pageNo"] = $pageNo;
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
}
