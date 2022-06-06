<?php

namespace ACES\Request;


class EclpPoExtQueryPoOrderRequest
{
    private $apiParas = array();
    private $version;
    private $poOrderNo;
    private $queryItemFlag;
    private $queryBoxFlag;
    private $queryQcFlag;
    private $queryPoRejectFlag;
    private $queryBatAttrFlag;

    public function getApiMethodName()
    {
        return "jingdong.eclp.po.ext.queryPoOrder";
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

    public function getPoOrderNo()
    {
        return $this->poOrderNo;
    }

    public function setPoOrderNo($poOrderNo)
    {
        $this->poOrderNo = $poOrderNo;
        $this->apiParas["poOrderNo"] = $poOrderNo;
    }

    public function getQueryItemFlag()
    {
        return $this->queryItemFlag;
    }

    public function setQueryItemFlag($queryItemFlag)
    {
        $this->queryItemFlag = $queryItemFlag;
        $this->apiParas["queryItemFlag"] = $queryItemFlag;
    }

    public function getQueryBoxFlag()
    {
        return $this->queryBoxFlag;
    }

    public function setQueryBoxFlag($queryBoxFlag)
    {
        $this->queryBoxFlag = $queryBoxFlag;
        $this->apiParas["queryBoxFlag"] = $queryBoxFlag;
    }

    public function getQueryQcFlag()
    {
        return $this->queryQcFlag;
    }

    public function setQueryQcFlag($queryQcFlag)
    {
        $this->queryQcFlag = $queryQcFlag;
        $this->apiParas["queryQcFlag"] = $queryQcFlag;
    }

    public function getQueryPoRejectFlag()
    {
        return $this->queryPoRejectFlag;
    }

    public function setQueryPoRejectFlag($queryPoRejectFlag)
    {
        $this->queryPoRejectFlag = $queryPoRejectFlag;
        $this->apiParas["queryPoRejectFlag"] = $queryPoRejectFlag;
    }

    public function getQueryBatAttrFlag()
    {
        return $this->queryBatAttrFlag;
    }

    public function setQueryBatAttrFlag($queryBatAttrFlag)
    {
        $this->queryBatAttrFlag = $queryBatAttrFlag;
        $this->apiParas["queryBatAttrFlag"] = $queryBatAttrFlag;
    }
}
