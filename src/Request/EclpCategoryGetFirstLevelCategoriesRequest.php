<?php

namespace ACES\Request;

class EclpCategoryGetFirstLevelCategoriesRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.eclp.category.getFirstLevelCategories';
    }

    public function check()
    {
    }
}
