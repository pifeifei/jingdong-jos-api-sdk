<?php

namespace ACES\Request;

class EclpCategoryGetSecondLevelCategoriesRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.eclp.category.getSecondLevelCategories';
    }

    public function check()
    {
    }

    public function getFirstCategoryNo()
    {
        return $this->apiParas['firstCategoryNo'];
    }

    public function setFirstCategoryNo($firstCategoryNo)
    {
        $this->apiParas['firstCategoryNo'] = $firstCategoryNo;

        return $this;
    }

    public function getSecondCategoryNo()
    {
        return $this->apiParas['secondCategoryNo'];
    }

    public function setSecondCategoryNo($secondCategoryNo)
    {
        $this->apiParas['secondCategoryNo'] = $secondCategoryNo;

        return $this;
    }
}
