<?php

class EclpPoQueryPoNoRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.po.queryPoNo";
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
                                                                                                                                                                private $deptNo;

    public function setDeptNo($deptNo)
    {
        $this->deptNo = $deptNo;
         $this->apiParas["deptNo"] = $deptNo;
    }

    public function getDeptNo()
    {
        return $this->deptNo;
    }

                                                        private $poStatus;

    public function setPoStatus($poStatus)
    {
        $this->poStatus = $poStatus;
         $this->apiParas["poStatus"] = $poStatus;
    }

    public function getPoStatus()
    {
        return $this->poStatus;
    }

                                                        private $dateType;

    public function setDateType($dateType)
    {
        $this->dateType = $dateType;
         $this->apiParas["dateType"] = $dateType;
    }

    public function getDateType()
    {
        return $this->dateType;
    }

                                                        private $startDate;

    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
         $this->apiParas["startDate"] = $startDate;
    }

    public function getStartDate()
    {
        return $this->startDate;
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

                                                        private $outPoNo;

    public function setOutPoNo($outPoNo)
    {
        $this->outPoNo = $outPoNo;
         $this->apiParas["outPoNo"] = $outPoNo;
    }

    public function getOutPoNo()
    {
        return $this->outPoNo;
    }
}
