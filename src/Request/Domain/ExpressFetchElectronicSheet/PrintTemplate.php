<?php

namespace ACES\Request\Domain\ExpressFetchElectronicSheet;

class PrintTemplate
{
    private $params = [];
    private $paperSize;

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.ldop.oms.dto.PrintTemplate';
    }

    public function getPaperSize()
    {
        return $this->paperSize;
    }

    public function setPaperSize($paperSize)
    {
        $this->params['paperSize'] = $paperSize;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
