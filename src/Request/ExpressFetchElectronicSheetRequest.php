<?php

namespace ACES\Request;


class ExpressFetchElectronicSheetRequest
{
    private $apiParas = array();
    private $version;
    private $printObject;
    private $userEnv;
    private $printTemplate;

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

    public function getVersion()
    {
        return $this->version;
    }

    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function getPrintObject()
    {
        return $this->apiParas['printObject'];
    }

    public function setPrintObject($printObject)
    {
        $this->apiParas['printObject'] = $printObject;
    }

    public function getUserEnv()
    {
        return $this->apiParas['userEnv'];
    }

    public function setUserEnv($userEnv)
    {
        $this->apiParas['userEnv'] = $userEnv;
    }

    public function getPrintTemplate()
    {
        return $this->apiParas['printTemplate'];
    }

    public function setPrintTemplate($printTemplate)
    {
        $this->apiParas['printTemplate'] = $printTemplate;
    }
}
