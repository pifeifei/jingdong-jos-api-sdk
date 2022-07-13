<?php

namespace ACES\Request\Domain\ExpressFetchElectronicSheet;

class PrintTemplate
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.ldop.oms.dto.PrintTemplate';
    }

    public function getPaperSize()
    {
        return $this->params['paperSize'];
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
