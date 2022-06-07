<?php

namespace ACES\Request;


class EclpSnowUploadImageRequest
{
    private $apiParas = array();
    private $version;
    private $deptNo;
    private $imageString;

    public function getApiMethodName()
    {
        return "jingdong.eclp.snow.uploadImage";
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

    public function getImageString()
    {
        return $this->imageString;
    }

    public function setImageString($imageString)
    {
        $this->imageString = $imageString;
        $this->apiParas["imageString"] = $imageString;
    }
}