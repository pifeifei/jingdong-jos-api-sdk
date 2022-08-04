<?php

namespace ACES\Request;

class PrintingTemplateGetTemplateListRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.printing.template.getTemplateList';
    }

    public function check()
    {
    }

    public function getParam1()
    {
        return $this->apiParas['param1'];
    }

    public function setParam1($param1)
    {
        $this->apiParas['param1'] = $param1;

        return $this;
    }
}
