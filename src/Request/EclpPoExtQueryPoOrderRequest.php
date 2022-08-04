<?php

namespace ACES\Request;

class EclpPoExtQueryPoOrderRequest extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'jingdong.eclp.po.ext.queryPoOrder';
    }

    public function check()
    {
    }

    public function getPoOrderNo()
    {
        return $this->apiParas['poOrderNo'];
    }

    public function setPoOrderNo($poOrderNo)
    {
        $this->apiParas['poOrderNo'] = $poOrderNo;

        return $this;
    }

    public function getQueryItemFlag()
    {
        return $this->apiParas['queryItemFlag'];
    }

    public function setQueryItemFlag($queryItemFlag)
    {
        $this->apiParas['queryItemFlag'] = $queryItemFlag;

        return $this;
    }

    public function getQueryBoxFlag()
    {
        return $this->apiParas['queryBoxFlag'];
    }

    public function setQueryBoxFlag($queryBoxFlag)
    {
        $this->apiParas['queryBoxFlag'] = $queryBoxFlag;

        return $this;
    }

    public function getQueryQcFlag()
    {
        return $this->apiParas['queryQcFlag'];
    }

    public function setQueryQcFlag($queryQcFlag)
    {
        $this->apiParas['queryQcFlag'] = $queryQcFlag;

        return $this;
    }

    public function getQueryPoRejectFlag()
    {
        return $this->apiParas['queryPoRejectFlag'];
    }

    public function setQueryPoRejectFlag($queryPoRejectFlag)
    {
        $this->apiParas['queryPoRejectFlag'] = $queryPoRejectFlag;

        return $this;
    }

    public function getQueryBatAttrFlag()
    {
        return $this->apiParas['queryBatAttrFlag'];
    }

    public function setQueryBatAttrFlag($queryBatAttrFlag)
    {
        $this->apiParas['queryBatAttrFlag'] = $queryBatAttrFlag;

        return $this;
    }
}
