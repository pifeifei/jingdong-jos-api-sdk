<?php

namespace ACES\Request;

class EclpMasterQuerySellerCategoryRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.eclp.master.querySellerCategory';
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

    public function getCategoryNo()
    {
        return $this->apiParas['categoryNo'];
    }

    public function setCategoryNo($categoryNo)
    {
        $this->apiParas['categoryNo'] = $categoryNo;

        return $this;
    }
}
