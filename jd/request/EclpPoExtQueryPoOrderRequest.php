<?php

class EclpPoExtQueryPoOrderRequest
{
    private $apiParas = array();

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

    private $version;

    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function getVersion()
    {
        return $this->version;
    }
                                                                                                                                    private $poOrderNo;

    public function setPoOrderNo($poOrderNo)
    {
        $this->poOrderNo = $poOrderNo;
         $this->apiParas["poOrderNo"] = $poOrderNo;
    }

    public function getPoOrderNo()
    {
        return $this->poOrderNo;
    }

                                                        private $queryItemFlag;

    public function setQueryItemFlag($queryItemFlag)
    {
        $this->queryItemFlag = $queryItemFlag;
         $this->apiParas["queryItemFlag"] = $queryItemFlag;
    }

    public function getQueryItemFlag()
    {
        return $this->queryItemFlag;
    }

                                                        private $queryBoxFlag;

    public function setQueryBoxFlag($queryBoxFlag)
    {
        $this->queryBoxFlag = $queryBoxFlag;
         $this->apiParas["queryBoxFlag"] = $queryBoxFlag;
    }

    public function getQueryBoxFlag()
    {
        return $this->queryBoxFlag;
    }

                                                        private $queryQcFlag;

    public function setQueryQcFlag($queryQcFlag)
    {
        $this->queryQcFlag = $queryQcFlag;
         $this->apiParas["queryQcFlag"] = $queryQcFlag;
    }

    public function getQueryQcFlag()
    {
        return $this->queryQcFlag;
    }

                                                        private $queryPoRejectFlag;

    public function setQueryPoRejectFlag($queryPoRejectFlag)
    {
        $this->queryPoRejectFlag = $queryPoRejectFlag;
         $this->apiParas["queryPoRejectFlag"] = $queryPoRejectFlag;
    }

    public function getQueryPoRejectFlag()
    {
        return $this->queryPoRejectFlag;
    }

                                                        private $queryBatAttrFlag;

    public function setQueryBatAttrFlag($queryBatAttrFlag)
    {
        $this->queryBatAttrFlag = $queryBatAttrFlag;
         $this->apiParas["queryBatAttrFlag"] = $queryBatAttrFlag;
    }

    public function getQueryBatAttrFlag()
    {
        return $this->queryBatAttrFlag;
    }
}
