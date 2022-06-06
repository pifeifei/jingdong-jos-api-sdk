<?php

class EclpMasterInsertSellerCategoryRequest
{
    private $apiParas = array();

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

                                                        private $categoryName;

    public function setCategoryName($categoryName)
    {
        $this->categoryName = $categoryName;
         $this->apiParas["categoryName"] = $categoryName;
    }

    public function getCategoryName()
    {
        return $this->categoryName;
    }

                                                        private $previousCategoryNo;

    public function setPreviousCategoryNo($previousCategoryNo)
    {
        $this->previousCategoryNo = $previousCategoryNo;
         $this->apiParas["previousCategoryNo"] = $previousCategoryNo;
    }

    public function getPreviousCategoryNo()
    {
        return $this->previousCategoryNo;
    }
}
