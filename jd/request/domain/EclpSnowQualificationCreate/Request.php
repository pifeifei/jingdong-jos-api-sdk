<?php

namespace EclpSnowQualificationCreate;

class Request
{
    private $params = array();

    function __construct()
    {
        $this->params["@type"] = "com.jd.coldchian.snow.dto.portal.QualificateRequest";
    }

    private $deptNo;

    public function setDeptNo($deptNo)
    {
        $this->params['deptNo'] = $deptNo;
    }

    public function getDeptNo()
    {
        return $this->deptNo;
    }

    private $supplierNo;

    public function setSupplierNo($supplierNo)
    {
        $this->params['supplierNo'] = $supplierNo;
    }

    public function getSupplierNo()
    {
        return $this->supplierNo;
    }

    private $classification;

    public function setClassification($classification)
    {
        $this->params['classification'] = $classification;
    }

    public function getClassification()
    {
        return $this->classification;
    }

    private $customerNo;

    public function setCustomerNo($customerNo)
    {
        $this->params['customerNo'] = $customerNo;
    }

    public function getCustomerNo()
    {
        return $this->customerNo;
    }

    private $licenses;

    public function setLicenses($licenses)
    {
        $size = count($licenses);
        for ($i = 0; $i < $size; $i++) {
            $licenses [$i] = $licenses [$i] ->getInstance();
        }
        $this->params['licenses'] = $licenses;
    }


    private $goodsNo;

    public function setGoodsNo($goodsNo)
    {
        $this->params['goodsNo'] = $goodsNo;
    }

    public function getGoodsNo()
    {
        return $this->goodsNo;
    }

    private $type;

    public function setType($type)
    {
        $this->params['type'] = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    function getInstance()
    {
        return $this->params;
    }
}
