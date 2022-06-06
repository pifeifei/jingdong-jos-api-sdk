<?php

namespace ACES\Request;


class EclpCategoryGetThirdLevelCategoriesRequest
{
    private $apiParas = array();
    private $version;
    private $secondCategoryNo;
    private $thirdCategoryNo;

    public function getApiMethodName()
    {
        return "jingdong.eclp.category.getThirdLevelCategories";
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

    public function getSecondCategoryNo()
    {
        return $this->secondCategoryNo;
    }

    public function setSecondCategoryNo($secondCategoryNo)
    {
        $this->secondCategoryNo = $secondCategoryNo;
        $this->apiParas["secondCategoryNo"] = $secondCategoryNo;
    }

    public function getThirdCategoryNo()
    {
        return $this->thirdCategoryNo;
    }

    public function setThirdCategoryNo($thirdCategoryNo)
    {
        $this->thirdCategoryNo = $thirdCategoryNo;
        $this->apiParas["thirdCategoryNo"] = $thirdCategoryNo;
    }
}
