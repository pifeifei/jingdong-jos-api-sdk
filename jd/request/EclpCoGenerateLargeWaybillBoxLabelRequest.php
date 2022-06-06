<?php

class EclpCoGenerateLargeWaybillBoxLabelRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.co.generateLargeWaybillBoxLabel";
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

                                                                                                                                                                                                                                                                                                                                                                                               private $waybillCodes;
    public function setWaybillCodes($waybillCodes)
    {
        $this->waybillCodes = $waybillCodes;
        $this->apiParas["waybillCodes"] = $waybillCodes;
    }

    public function getWaybillCodes()
    {
        return $this->waybillCodes;
    }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               private $jdPackageNos;
    public function setJdPackageNos($jdPackageNos)
    {
        $this->jdPackageNos = $jdPackageNos;
        $this->apiParas["jdPackageNos"] = $jdPackageNos;
    }

    public function getJdPackageNos()
    {
        return $this->jdPackageNos;
    }
}
