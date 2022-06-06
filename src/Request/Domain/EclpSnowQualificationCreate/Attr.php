<?php

namespace ACES\Request\Domain\EclpSnowQualificationCreate;




class Attr
{
    private $params = array();
    private $licenseNo;
    private $startTime;
    private $endTime;
    private $type;
    private $businessScope;

    function __construct()
    {
        $this->params["@type"] = "com.jd.coldchian.snow.dto.portal.LicenseRequest";
    }

    public function getLicenseNo()
    {
        return $this->licenseNo;
    }

    public function setLicenseNo($licenseNo)
    {
        $this->params['licenseNo'] = $licenseNo;
    }

    public function getStartTime()
    {
        return $this->startTime;
    }

    public function setStartTime($startTime)
    {
        $this->params['startTime'] = $startTime;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }

    public function setEndTime($endTime)
    {
        $this->params['endTime'] = $endTime;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->params['type'] = $type;
    }

    public function getBusinessScope()
    {
        return $this->businessScope;
    }

    public function setBusinessScope($businessScope)
    {
        $this->params['businessScope'] = $businessScope;
    }

    function getInstance()
    {
        return $this->params;
    }
}
