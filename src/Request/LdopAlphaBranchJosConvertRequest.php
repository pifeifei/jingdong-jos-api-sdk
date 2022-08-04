<?php

namespace ACES\Request;

class LdopAlphaBranchJosConvertRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.ldop.alpha.branch.jos.Convert';
    }

    public function check()
    {
    }

    public function getBranchListXml()
    {
        return $this->apiParas['branchListXml'];
    }

    public function setBranchListXml($branchListXml)
    {
        $this->apiParas['branchListXml'] = $branchListXml;

        return $this;
    }
}
