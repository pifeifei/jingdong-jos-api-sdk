<?php

namespace ACES\Request;


class EclpMasterQueryShopRequest
{
    private $apiParas = array();
    private $version;
    private $shopNos;
    private $isvShopNos;
    private $deptNo;

    public function getApiMethodName()
    {
        return "jingdong.eclp.master.queryShop";
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

    public function getShopNos()
    {
        return $this->shopNos;
    }

    public function setShopNos($shopNos)
    {
        $this->shopNos = $shopNos;
        $this->apiParas["shopNos"] = $shopNos;
    }

    public function getIsvShopNos()
    {
        return $this->isvShopNos;
    }

    public function setIsvShopNos($isvShopNos)
    {
        $this->isvShopNos = $isvShopNos;
        $this->apiParas["isvShopNos"] = $isvShopNos;
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
}
