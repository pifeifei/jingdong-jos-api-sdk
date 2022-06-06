<?php

namespace ACES\Request;


class JcloudWmsMasterCategoryInfoInsertRequest
{
    private $apiParas = array();
    private $version;
    private $tenantId;
    private $categoryNo;
    private $categoryName;
    private $superior;
    private $operateUser;
    private $operateTime;
    private $sortNo;
    private $memo;

    public function getApiMethodName()
    {
        return "jingdong.jcloud.wms.master.categoryInfo.insert";
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

    public function getTenantId()
    {
        return $this->tenantId;
    }

    public function setTenantId($tenantId)
    {
        $this->tenantId = $tenantId;
        $this->apiParas["tenantId"] = $tenantId;
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
}
