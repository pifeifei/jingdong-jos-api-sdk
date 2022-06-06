<?php

class ExpressFetchElectronicSheetRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.express.fetch.electronic.sheet";
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
    private $printObject;

    public function setPrintObject($printObject)
    {
        $this->apiParas['printObject'] = $printObject;
    }
    public function getPrintObject()
    {
        return $this->apiParas['printObject'];
    }
    private $userEnv;

    public function setUserEnv($userEnv)
    {
        $this->apiParas['userEnv'] = $userEnv;
    }
    public function getUserEnv()
    {
        return $this->apiParas['userEnv'];
    }
    private $printTemplate;

    public function setPrintTemplate($printTemplate)
    {
        $this->apiParas['printTemplate'] = $printTemplate;
    }
    public function getPrintTemplate()
    {
        return $this->apiParas['printTemplate'];
    }
}
