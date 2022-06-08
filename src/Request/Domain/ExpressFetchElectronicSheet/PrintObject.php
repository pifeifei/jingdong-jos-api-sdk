<?php

namespace ACES\Request\Domain\ExpressFetchElectronicSheet;

class PrintObject
{
    private $params = [];
    private $waybillCodes;
    private $electronicSheetType;
    private $packageCodes;
    private $boxCodes;
    private $orderIds;
    private $customProperties;
    private $codeType;

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.ldop.oms.dto.PrintObject';
    }

    public function setWaybillCodes($waybillCodes)
    {
        $this->params['waybillCodes'] = $waybillCodes;
    }

    public function getElectronicSheetType()
    {
        return $this->electronicSheetType;
    }

    public function setElectronicSheetType($electronicSheetType)
    {
        $this->params['electronicSheetType'] = $electronicSheetType;
    }

    public function setPackageCodes($packageCodes)
    {
        $this->params['packageCodes'] = $packageCodes;
    }

    public function setBoxCodes($boxCodes)
    {
        $this->params['boxCodes'] = $boxCodes;
    }

    public function setOrderIds($orderIds)
    {
        $this->params['orderIds'] = $orderIds;
    }

    public function setCustomProperties($customProperties)
    {
        $this->params['customProperties'] = $customProperties->getInstance();
    }

    public function getCodeType()
    {
        return $this->codeType;
    }

    public function setCodeType($codeType)
    {
        $this->params['codeType'] = $codeType;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
