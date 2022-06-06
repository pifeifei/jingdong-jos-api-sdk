<?php

class EclpMasterQueryCustomerRequest
{
    private $apiParas = array();

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

    private $version;

    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function getVersion()
    {
        return $this->version;
    }
                                                                                                                                    private $deptNo;

    public function setDeptNo($deptNo)
    {
        $this->deptNo = $deptNo;
         $this->apiParas["deptNo"] = $deptNo;
    }

    public function getDeptNo()
    {
        return $this->deptNo;
    }

                                                        private $sellerNo;

    public function setSellerNo($sellerNo)
    {
        $this->sellerNo = $sellerNo;
         $this->apiParas["sellerNo"] = $sellerNo;
    }

    public function getSellerNo()
    {
        return $this->sellerNo;
    }

                                                        private $customerNo;

    public function setCustomerNo($customerNo)
    {
        $this->customerNo = $customerNo;
         $this->apiParas["customerNo"] = $customerNo;
    }

    public function getCustomerNo()
    {
        return $this->customerNo;
    }

                                                        private $customerName;

    public function setCustomerName($customerName)
    {
        $this->customerName = $customerName;
         $this->apiParas["customerName"] = $customerName;
    }

    public function getCustomerName()
    {
        return $this->customerName;
    }

                                                        private $warehouseNo;

    public function setWarehouseNo($warehouseNo)
    {
        $this->warehouseNo = $warehouseNo;
         $this->apiParas["warehouseNo"] = $warehouseNo;
    }

    public function getWarehouseNo()
    {
        return $this->warehouseNo;
    }

                                                        private $sellerName;

    public function setSellerName($sellerName)
    {
        $this->sellerName = $sellerName;
         $this->apiParas["sellerName"] = $sellerName;
    }

    public function getSellerName()
    {
        return $this->sellerName;
    }

                                                        private $pageNo;

    public function setPageNo($pageNo)
    {
        $this->pageNo = $pageNo;
         $this->apiParas["pageNo"] = $pageNo;
    }

    public function getPageNo()
    {
        return $this->pageNo;
    }

                                                        private $pageSize;

    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }
}
