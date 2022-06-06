<?php

class EclpSnowUploadImageRequest
{
    private $apiParas = array();

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

                                                        private $imageString;

    public function setImageString($imageString)
    {
        $this->imageString = $imageString;
         $this->apiParas["imageString"] = $imageString;
    }

    public function getImageString()
    {
        return $this->imageString;
    }
}
