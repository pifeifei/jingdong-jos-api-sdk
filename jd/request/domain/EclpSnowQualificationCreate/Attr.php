<?php

namespace EclpSnowQualificationCreate;

class Attr
{
    private $params = array();

    function __construct()
    {
        $this->params["@type"] = "com.jd.coldchian.snow.dto.portal.LicenseRequest";
    }

    private $licenseNo;

    public function setLicenseNo($licenseNo)
    {
        $this->params['licenseNo'] = $licenseNo;
    }

    public function getLicenseNo()
    {
        return $this->licenseNo;
    }

    private $startTime;

    public function setStartTime($startTime)
    {
        $this->params['startTime'] = $startTime;
    }

    public function getStartTime()
    {
        return $this->startTime;
    }

    private $endTime;

    public function setEndTime($endTime)
    {
        $this->params['endTime'] = $endTime;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }

    private $type;

    public function setType($type)
    {
        $this->params['type'] = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    private $businessScope;

    public function setBusinessScope($businessScope)
    {
        $this->params['businessScope'] = $businessScope;
    }

    public function getBusinessScope()
    {
        return $this->businessScope;
    }

    function getInstance()
    {
        return $this->params;
    }
}
