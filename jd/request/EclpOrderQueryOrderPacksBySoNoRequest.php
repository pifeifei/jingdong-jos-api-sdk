<?php

class EclpOrderQueryOrderPacksBySoNoRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.order.queryOrderPacksBySoNo";
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
                                                                                                                                    private $pageNo;

    public function setPageNo($pageNo)
    {
        $this->pageNo = $pageNo;
         $this->apiParas["pageNo"] = $pageNo;
    }

    public function getPageNo()
    {
        return $this->pageNo;
    }

                                                        private $soNo;

    public function setSoNo($soNo)
    {
        $this->soNo = $soNo;
         $this->apiParas["soNo"] = $soNo;
    }

    public function getSoNo()
    {
        return $this->soNo;
    }

                                                        private $pageSize;

    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }
}
