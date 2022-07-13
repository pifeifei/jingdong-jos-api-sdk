<?php

namespace ACES\Request\Domain\EclpSnowQualificationCreate;

class Request
{
    private array $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.coldchian.snow.dto.portal.QualificateRequest';
    }

    public function getDeptNo()
    {
        return $this->params['deptNo'];
    }

    public function setDeptNo($deptNo)
    {
        $this->params['deptNo'] = $deptNo;
    }

    public function getSupplierNo()
    {
        return $this->params['supplierNo'];
    }

    public function setSupplierNo($supplierNo)
    {
        $this->params['supplierNo'] = $supplierNo;
    }

    public function getClassification()
    {
        return $this->params['classification'];
    }

    public function setClassification($classification)
    {
        $this->params['classification'] = $classification;
    }

    public function getCustomerNo()
    {
        return $this->params['customerNo'];
    }

    public function setCustomerNo($customerNo)
    {
        $this->params['customerNo'] = $customerNo;
    }

    public function setLicenses($licenses)
    {
        $size = count($licenses);
        for ($i = 0; $i < $size; ++$i) {
            $licenses[$i] = $licenses[$i]->getInstance();
        }
        $this->params['licenses'] = $licenses;
    }

    public function getGoodsNo()
    {
        return $this->params['goodsNo'];
    }

    public function setGoodsNo($goodsNo)
    {
        $this->params['goodsNo'] = $goodsNo;
    }

    public function getType()
    {
        return $this->params['type'];
    }

    public function setType($type)
    {
        $this->params['type'] = $type;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
