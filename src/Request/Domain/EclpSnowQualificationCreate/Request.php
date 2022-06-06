<?php

namespace ACES\Request\Domain\EclpSnowQualificationCreate;




class Request
{
    private $params = array();
    private $deptNo;
    private $supplierNo;
    private $classification;
    private $customerNo;
    private $licenses;
    private $goodsNo;
    private $type;

    function __construct()
    {
        $this->params["@type"] = "com.jd.coldchian.snow.dto.portal.QualificateRequest";
    }

    public function getDeptNo()
    {
        return $this->deptNo;
    }

    public function setDeptNo($deptNo)
    {
        $this->params['deptNo'] = $deptNo;
    }

    public function getSupplierNo()
    {
        return $this->supplierNo;
    }

    public function setSupplierNo($supplierNo)
    {
        $this->params['supplierNo'] = $supplierNo;
    }

    public function getClassification()
    {
        return $this->classification;
    }

    public function setClassification($classification)
    {
        $this->params['classification'] = $classification;
    }

    public function getCustomerNo()
    {
        return $this->customerNo;
    }

    public function setCustomerNo($customerNo)
    {
        $this->params['customerNo'] = $customerNo;
    }

    public function setLicenses($licenses)
    {
        $size = count($licenses);
        for ($i = 0; $i < $size; $i++) {
            $licenses [$i] = $licenses [$i]->getInstance();
        }
        $this->params['licenses'] = $licenses;
    }

    public function getGoodsNo()
    {
        return $this->goodsNo;
    }

    public function setGoodsNo($goodsNo)
    {
        $this->params['goodsNo'] = $goodsNo;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->params['type'] = $type;
    }

    function getInstance()
    {
        return $this->params;
    }
}
