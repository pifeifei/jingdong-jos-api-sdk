<?php

namespace PrintingTemplateGetTemplateList;

class Param1
{
    private $params = array();

    function __construct()
    {
        $this->params["@type"] = "com.jd.jcloud.wms.printing.dto.GetTemplateListReqDTO";
    }

    private $templateId;

    public function setTemplateId($templateId)
    {
        $this->params['templateId'] = $templateId;
    }

    public function getTemplateId()
    {
        return $this->templateId;
    }

    private $templateType;

    public function setTemplateType($templateType)
    {
        $this->params['templateType'] = $templateType;
    }

    public function getTemplateType()
    {
        return $this->templateType;
    }

    private $wayTempleteType;

    public function setWayTempleteType($wayTempleteType)
    {
        $this->params['wayTempleteType'] = $wayTempleteType;
    }

    public function getWayTempleteType()
    {
        return $this->wayTempleteType;
    }

    private $pin;

    public function setPin($pin)
    {
        $this->params['pin'] = $pin;
    }

    public function getPin()
    {
        return $this->pin;
    }

    private $cpCode;

    public function setCpCode($cpCode)
    {
        $this->params['cpCode'] = $cpCode;
    }

    public function getCpCode()
    {
        return $this->cpCode;
    }

    private $isvResourceType;

    public function setIsvResourceType($isvResourceType)
    {
        $this->params['isvResourceType'] = $isvResourceType;
    }

    public function getIsvResourceType()
    {
        return $this->isvResourceType;
    }

    private $appKey;

    public function setAppKey($appKey)
    {
        $this->params['appKey'] = $appKey;
    }

    public function getAppKey()
    {
        return $this->appKey;
    }

    function getInstance()
    {
        return $this->params;
    }
}
