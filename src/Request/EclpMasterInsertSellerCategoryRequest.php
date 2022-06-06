<?php

namespace ACES\Request;


class EclpMasterInsertSellerCategoryRequest
{
    private $apiParas = array();
    private $version;
    private $deptNo;
    private $categoryName;
    private $previousCategoryNo;

    public function getApiMethodName()
    {
        return "jingdong.eclp.master.insertSellerCategory";
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

    public function getCategoryName()
    {
        return $this->categoryName;
    }

    public function setCategoryName($categoryName)
    {
        $this->categoryName = $categoryName;
        $this->apiParas["categoryName"] = $categoryName;
    }

    public function getPreviousCategoryNo()
    {
        return $this->previousCategoryNo;
    }

    public function setPreviousCategoryNo($previousCategoryNo)
    {
        $this->previousCategoryNo = $previousCategoryNo;
        $this->apiParas["previousCategoryNo"] = $previousCategoryNo;
    }
}
