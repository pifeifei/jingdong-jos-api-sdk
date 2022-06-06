<?php

namespace ExpressFetchElectronicSheet;

class PrintTemplate
{
    private $params = array();

    function __construct()
    {
        $this->params["@type"] = "com.jd.ldop.oms.dto.PrintTemplate";
    }

    private $paperSize;

    public function setPaperSize($paperSize)
    {
        $this->params['paperSize'] = $paperSize;
    }

    public function getPaperSize()
    {
        return $this->paperSize;
    }

    function getInstance()
    {
        return $this->params;
    }
}
