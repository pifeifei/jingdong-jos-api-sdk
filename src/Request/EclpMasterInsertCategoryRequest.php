<?php

namespace ACES\Request;


class EclpMasterInsertCategoryRequest
{
    private $apiParas = array();
    private $version;
    private $categoryNo;
    private $categoryName;
    private $superior;
    private $sortNo;
    private $memo;
    private $operateUser;
    private $operateTime;

    public function getApiMethodName()
    {
        return "jingdong.eclp.master.insertCategory";
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

    public function getCategoryNo()
    {
        return $this->categoryNo;
    }

    public function setCategoryNo($categoryNo)
    {
        $this->categoryNo = $categoryNo;
        $this->apiParas["categoryNo"] = $categoryNo;
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

    public function getSuperior()
    {
        return $this->superior;
    }

    public function setSuperior($superior)
    {
        $this->superior = $superior;
        $this->apiParas["superior"] = $superior;
    }

    public function getSortNo()
    {
        return $this->sortNo;
    }

    public function setSortNo($sortNo)
    {
        $this->sortNo = $sortNo;
        $this->apiParas["sortNo"] = $sortNo;
    }

    public function getMemo()
    {
        return $this->memo;
    }

    public function setMemo($memo)
    {
        $this->memo = $memo;
        $this->apiParas["memo"] = $memo;
    }

    public function getOperateUser()
    {
        return $this->operateUser;
    }

    public function setOperateUser($operateUser)
    {
        $this->operateUser = $operateUser;
        $this->apiParas["operateUser"] = $operateUser;
    }

    public function getOperateTime()
    {
        return $this->operateTime;
    }

    public function setOperateTime($operateTime)
    {
        $this->operateTime = $operateTime;
        $this->apiParas["operateTime"] = $operateTime;
    }
}
