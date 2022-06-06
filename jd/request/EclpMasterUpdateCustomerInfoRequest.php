<?php

class EclpMasterUpdateCustomerInfoRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.master.updateCustomerInfo";
    }

    public function getApiParas()
    {
        if (empty($this->apiParas)) {
            return "{}";
        }
        return json_encode($this->apiParas);
    }

    public function check()
    {
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }

    private $version;

    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function getVersion()
    {
        return $this->version;
    }
    private $CustomerOut;

    public function setCustomerOut($CustomerOut)
    {
        $this->apiParas['CustomerOut'] = $CustomerOut;
    }
    public function getCustomerOut()
    {
        return $this->apiParas['CustomerOut'];
    }
}
