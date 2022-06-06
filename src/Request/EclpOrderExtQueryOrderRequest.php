<?php

namespace ACES\Request;


class EclpOrderExtQueryOrderRequest
{
    private $apiParas = array();
    private $version;
    private $isvUUID;
    private $spSoNos;
    private $isvSource;
    private $departmentNo;

    public function getApiMethodName()
    {
        return "jingdong.eclp.order.ext.queryOrder";
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

    public function getIsvUUID()
    {
        return $this->isvUUID;
    }

    public function setIsvUUID($isvUUID)
    {
        $this->isvUUID = $isvUUID;
        $this->apiParas["isvUUID"] = $isvUUID;
    }

    public function getSpSoNos()
    {
        return $this->spSoNos;
    }

    public function setSpSoNos($spSoNos)
    {
        $this->spSoNos = $spSoNos;
        $this->apiParas["spSoNos"] = $spSoNos;
    }

    public function getIsvSource()
    {
        return $this->isvSource;
    }

    public function setIsvSource($isvSource)
    {
        $this->isvSource = $isvSource;
        $this->apiParas["isvSource"] = $isvSource;
    }

    public function getDepartmentNo()
    {
        return $this->departmentNo;
    }

    public function setDepartmentNo($departmentNo)
    {
        $this->departmentNo = $departmentNo;
        $this->apiParas["departmentNo"] = $departmentNo;
    }
}
