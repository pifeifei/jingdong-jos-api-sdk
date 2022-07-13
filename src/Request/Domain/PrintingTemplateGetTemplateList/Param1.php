<?php

namespace ACES\Request\Domain\PrintingTemplateGetTemplateList;

class Param1
{
    private array $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.jcloud.wms.printing.dto.GetTemplateListReqDTO';
    }

    public function setTemplateId($templateId)
    {
        $this->params['templateId'] = $templateId;
    }

    public function getTemplateId()
    {
        return $this->params['templateId'];
    }

    public function setTemplateType($templateType)
    {
        $this->params['templateType'] = $templateType;
    }

    public function getTemplateType()
    {
        return $this->params['templateType'];
    }

    public function setWayTempleteType($wayTempleteType)
    {
        $this->params['wayTempleteType'] = $wayTempleteType;
    }

    public function getWayTempleteType()
    {
        return $this->params['wayTempleteType'];
    }

    public function setPin($pin)
    {
        $this->params['pin'] = $pin;
    }

    public function getPin()
    {
        return $this->params['pin'];
    }

    public function setCpCode($cpCode)
    {
        $this->params['cpCode'] = $cpCode;
    }

    public function getCpCode()
    {
        return $this->params['cpCode'];
    }

    public function setIsvResourceType($isvResourceType)
    {
        $this->params['isvResourceType'] = $isvResourceType;
    }

    public function getIsvResourceType()
    {
        return $this->params['isvResourceType'];
    }

    public function setAppKey($appKey)
    {
        $this->params['appKey'] = $appKey;
    }

    public function getAppKey()
    {
        return $this->params['appKey'];
    }

    public function getInstance()
    {
        return $this->params;
    }
}
