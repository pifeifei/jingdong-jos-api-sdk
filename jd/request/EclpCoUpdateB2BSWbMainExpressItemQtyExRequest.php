<?php

class EclpCoUpdateB2BSWbMainExpressItemQtyExRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.co.updateB2BSWbMainExpressItemQtyEx";
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

                                                        private $newWBType;

    public function setNewWBType($newWBType)
    {
        $this->newWBType = $newWBType;
         $this->apiParas["newWBType"] = $newWBType;
    }

    public function getNewWBType()
    {
        return $this->newWBType;
    }

                                                        private $no;

    public function setNo($no)
    {
        $this->no = $no;
         $this->apiParas["no"] = $no;
    }

    public function getNo()
    {
        return $this->no;
    }

                                                        private $expressItemQty;

    public function setExpressItemQty($expressItemQty)
    {
        $this->expressItemQty = $expressItemQty;
         $this->apiParas["expressItemQty"] = $expressItemQty;
    }

    public function getExpressItemQty()
    {
        return $this->expressItemQty;
    }

                                                        private $isvOrderAmount;

    public function setIsvOrderAmount($isvOrderAmount)
    {
        $this->isvOrderAmount = $isvOrderAmount;
         $this->apiParas["isvOrderAmount"] = $isvOrderAmount;
    }

    public function getIsvOrderAmount()
    {
        return $this->isvOrderAmount;
    }

                                                                                                                                                                                                                                                                                                                                                                                               private $packageNo;
    public function setPackageNo($packageNo)
    {
        $this->packageNo = $packageNo;
        $this->apiParas["packageNo"] = $packageNo;
    }

    public function getPackageNo()
    {
        return $this->packageNo;
    }
                                                                                                                                                                        private $extendParam;

    public function setExtendParam($extendParam)
    {
        $this->extendParam = $extendParam;
         $this->apiParas["extendParam"] = $extendParam;
    }

    public function getExtendParam()
    {
        return $this->extendParam;
    }
}
