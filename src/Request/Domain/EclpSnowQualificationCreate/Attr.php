<?php

namespace ACES\Request\Domain\EclpSnowQualificationCreate;

class Attr
{
    private array $params = [];


    public function __construct()
    {
        $this->params['@type'] = 'com.jd.coldchian.snow.dto.portal.LicenseRequest';
    }

    public function getLicenseNo()
    {
        return $this->params['licenseNo'];
    }

    public function setLicenseNo($licenseNo)
    {
        $this->params['licenseNo'] = $licenseNo;
    }

    public function getStartTime()
    {
        return $this->params['startTime'];
    }

    public function setStartTime($startTime)
    {
        $this->params['startTime'] = $startTime;
    }

    public function getEndTime()
    {
        return $this->params['endTime'];
    }

    public function setEndTime($endTime)
    {
        $this->params['endTime'] = $endTime;
    }

    public function getType()
    {
        return $this->params['type'];
    }

    public function setType($type)
    {
        $this->params['type'] = $type;
    }

    public function getBusinessScope()
    {
        return $this->params['businessScope'];
    }

    public function setBusinessScope($businessScope)
    {
        $this->params['businessScope'] = $businessScope;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
