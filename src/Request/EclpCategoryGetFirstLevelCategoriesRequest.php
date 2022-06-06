<?php

namespace ACES\Request;


class EclpCategoryGetFirstLevelCategoriesRequest
{
    private $apiParas = array();
    private $version;

    public function getApiMethodName()
    {
        return "jingdong.eclp.category.getFirstLevelCategories";
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
}
