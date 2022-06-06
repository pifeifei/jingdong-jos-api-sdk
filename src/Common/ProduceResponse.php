<?php

namespace ACES\Common;

use ACES\Common\Domain\JosBaseResponse;

class ProduceResponse extends JosBaseResponse
{
    private $response;

    /**
     * @return \ACES\Common\Domain\JosSecretApiReportGetResponse
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @param \ACES\Common\Domain\JosSecretApiReportGetResponse|null $response
     */
    public function setResponse($response)
    {
        $this->response = $response;
    }
}

class Status
{
    private $code;
    private $msg;

    public function getCode()
    {
        return $this->code;
    }
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     *
     * @param int|null $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     *
     * @param string|null $msg
     */
    public function setMsg($msg)
    {
        $this->msg = $msg;
    }
}
