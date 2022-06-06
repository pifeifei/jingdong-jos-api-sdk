<?php

namespace ACES\Request;


class EclpCoQueryB2BSWbMainRequest
{
    private $apiParas = array();
    private $version;
    private $deptNo;
    private $newWBType;
    private $no;

    public function getApiMethodName()
    {
        return "jingdong.eclp.co.queryB2BSWbMain";
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

    public function getNewWBType()
    {
        return $this->newWBType;
    }

    public function setNewWBType($newWBType)
    {
        $this->newWBType = $newWBType;
        $this->apiParas["newWBType"] = $newWBType;
    }

    public function getNo()
    {
        return $this->no;
    }

    public function setNo($no)
    {
        $this->no = $no;
        $this->apiParas["no"] = $no;
    }
}
