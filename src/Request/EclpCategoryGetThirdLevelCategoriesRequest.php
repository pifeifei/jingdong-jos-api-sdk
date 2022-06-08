<?php

namespace ACES\Request;

class EclpCategoryGetThirdLevelCategoriesRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.eclp.category.getThirdLevelCategories';
    }

    public function check()
    {
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

    public function getThirdCategoryNo()
    {
        return $this->apiParas['thirdCategoryNo'];
    }

    public function setThirdCategoryNo($thirdCategoryNo)
    {
        $this->apiParas['thirdCategoryNo'] = $thirdCategoryNo;

        return $this;
    }
}
