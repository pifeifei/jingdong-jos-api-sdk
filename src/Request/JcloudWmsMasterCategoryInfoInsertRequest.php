<?php

namespace ACES\Request;

class JcloudWmsMasterCategoryInfoInsertRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.jcloud.wms.master.categoryInfo.insert';
    }

    public function check()
    {
    }

    public function getTenantId()
    {
        return $this->apiParas['tenantId'];
    }

    public function setTenantId($tenantId)
    {
        $this->apiParas['tenantId'] = $tenantId;

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

    public function getCategoryName()
    {
        return $this->apiParas['categoryName'];
    }

    public function setCategoryName($categoryName)
    {
        $this->apiParas['categoryName'] = $categoryName;

        return $this;
    }

    public function getSuperior()
    {
        return $this->apiParas['superior'];
    }

    public function setSuperior($superior)
    {
        $this->apiParas['superior'] = $superior;

        return $this;
    }

    public function getOperateUser()
    {
        return $this->apiParas['operateUser'];
    }

    public function setOperateUser($operateUser)
    {
        $this->apiParas['operateUser'] = $operateUser;

        return $this;
    }

    public function getOperateTime()
    {
        return $this->apiParas['operateTime'];
    }

    public function setOperateTime($operateTime)
    {
        $this->apiParas['operateTime'] = $operateTime;

        return $this;
    }

    public function getSortNo()
    {
        return $this->apiParas['sortNo'];
    }

    public function setSortNo($sortNo)
    {
        $this->apiParas['sortNo'] = $sortNo;

        return $this;
    }

    public function getMemo()
    {
        return $this->apiParas['memo'];
    }

    public function setMemo($memo)
    {
        $this->apiParas['memo'] = $memo;

        return $this;
    }
}
