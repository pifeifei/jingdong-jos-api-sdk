<?php

class HairQueryBookRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.hair.queryBook";
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
                                                                                                                                    private $beginDate;

    public function setBeginDate($beginDate)
    {
        $this->beginDate = $beginDate;
         $this->apiParas["beginDate"] = $beginDate;
    }

    public function getBeginDate()
    {
        return $this->beginDate;
    }

                                                        private $supNo;

    public function setSupNo($supNo)
    {
        $this->supNo = $supNo;
         $this->apiParas["supNo"] = $supNo;
    }

    public function getSupNo()
    {
        return $this->supNo;
    }

                                                        private $poNo;

    public function setPoNo($poNo)
    {
        $this->poNo = $poNo;
         $this->apiParas["poNo"] = $poNo;
    }

    public function getPoNo()
    {
        return $this->poNo;
    }

                                                                                    private $endDate;

    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
         $this->apiParas["endDate"] = $endDate;
    }

    public function getEndDate()
    {
        return $this->endDate;
    }

                                                        private $whNo;

    public function setWhNo($whNo)
    {
        $this->whNo = $whNo;
         $this->apiParas["whNo"] = $whNo;
    }

    public function getWhNo()
    {
        return $this->whNo;
    }

                                                        private $ownerNo;

    public function setOwnerNo($ownerNo)
    {
        $this->ownerNo = $ownerNo;
         $this->apiParas["ownerNo"] = $ownerNo;
    }

    public function getOwnerNo()
    {
        return $this->ownerNo;
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

                                                        private $page;

    public function setPage($page)
    {
        $this->page = $page;
         $this->apiParas["page"] = $page;
    }

    public function getPage()
    {
        return $this->page;
    }

                                                        private $dcNo;

    public function setDcNo($dcNo)
    {
        $this->dcNo = $dcNo;
         $this->apiParas["dcNo"] = $dcNo;
    }

    public function getDcNo()
    {
        return $this->dcNo;
    }
}
