<?php

namespace ACES\Request;

class EclpMasterInsertSellerCategoryRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.eclp.master.insertSellerCategory';
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

    public function getCategoryName()
    {
        return $this->apiParas['categoryName'];
    }

    public function setCategoryName($categoryName)
    {
        $this->apiParas['categoryName'] = $categoryName;

        return $this;
    }

    public function getPreviousCategoryNo()
    {
        return $this->apiParas['previousCategoryNo'];
    }

    public function setPreviousCategoryNo($previousCategoryNo)
    {
        $this->apiParas['previousCategoryNo'] = $previousCategoryNo;

        return $this;
    }
}
