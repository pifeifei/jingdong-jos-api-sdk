<?php

namespace ACES\Request;

class ExpressFetchElectronicSheetRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.express.fetch.electronic.sheet';
    }

    public function check()
    {
    }

    public function getPrintObject()
    {
        return $this->apiParas['printObject'];
    }

    public function setPrintObject($printObject)
    {
        $this->apiParas['printObject'] = $printObject;

        return $this;
    }

    public function getUserEnv()
    {
        return $this->apiParas['userEnv'];
    }

    public function setUserEnv($userEnv)
    {
        $this->apiParas['userEnv'] = $userEnv;

        return $this;
    }

    public function getPrintTemplate()
    {
        return $this->apiParas['printTemplate'];
    }

    public function setPrintTemplate($printTemplate)
    {
        $this->apiParas['printTemplate'] = $printTemplate;

        return $this;
    }
}
