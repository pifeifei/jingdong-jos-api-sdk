<?php

namespace ACES\Request\Domain\UnionOpenCategoryGoodsGet;

class Req
{
    private $params = [
        'parentId' => 0,
        'grade' => 0,
    ];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.union.open.gateway.api.dto.category.base.CategoryReq';
    }

    public function setParentId($parentId)
    {
        $this->params['parentId'] = $parentId;
    }

    public function getParentId()
    {
        return $this->parentId;
    }

    public function setGrade($grade)
    {
        $this->params['grade'] = $grade;
    }

    public function getGrade()
    {
        return $this->grade;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
