<?php

namespace ExpressFetchElectronicSheet;

class PrintObject
{
    private $params = array();

    function __construct()
    {
        $this->params["@type"] = "com.jd.ldop.oms.dto.PrintObject";
    }

    private $waybillCodes;

    public function setWaybillCodes($waybillCodes)
    {
        $this->params['waybillCodes'] = $waybillCodes;
    }


    private $electronicSheetType;

    public function setElectronicSheetType($electronicSheetType)
    {
        $this->params['electronicSheetType'] = $electronicSheetType;
    }

    public function getElectronicSheetType()
    {
        return $this->electronicSheetType;
    }

    private $packageCodes;

    public function setPackageCodes($packageCodes)
    {
        $this->params['packageCodes'] = $packageCodes;
    }


    private $boxCodes;

    public function setBoxCodes($boxCodes)
    {
        $this->params['boxCodes'] = $boxCodes;
    }


    private $orderIds;

    public function setOrderIds($orderIds)
    {
        $this->params['orderIds'] = $orderIds;
    }


    private $customProperties;

    public function setCustomProperties($customProperties)
    {
        $this->params['customProperties'] = $customProperties ->getInstance();
    }


    private $codeType;

    public function setCodeType($codeType)
    {
        $this->params['codeType'] = $codeType;
    }

    public function getCodeType()
    {
        return $this->codeType;
    }

    function getInstance()
    {
        return $this->params;
    }
}
