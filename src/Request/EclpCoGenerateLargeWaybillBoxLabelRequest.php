<?php

namespace ACES\Request;


class EclpCoGenerateLargeWaybillBoxLabelRequest
{
    private $apiParas = array();
    private $version;
    private $deptNo;
    private $waybillCodes;
    private $jdPackageNos;

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

    public function getVersion()
    {
        return $this->version;
    }

    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function getDeptNo()
    {
        return $this->deptNo;
    }

    public function setDeptNo($deptNo)
    {
        $this->deptNo = $deptNo;
        $this->apiParas["deptNo"] = $deptNo;
    }

    public function getWaybillCodes()
    {
        return $this->waybillCodes;
    }

    public function setWaybillCodes($waybillCodes)
    {
        $this->waybillCodes = $waybillCodes;
        $this->apiParas["waybillCodes"] = $waybillCodes;
    }

    public function getJdPackageNos()
    {
        return $this->jdPackageNos;
    }

    public function setJdPackageNos($jdPackageNos)
    {
        $this->jdPackageNos = $jdPackageNos;
        $this->apiParas["jdPackageNos"] = $jdPackageNos;
    }
}
