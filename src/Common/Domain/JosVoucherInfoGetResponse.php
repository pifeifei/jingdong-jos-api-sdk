<?php

namespace ACES\Common\Domain;

class JosVoucherInfoGetResponse extends JosBaseResponse
{
    private $response;

    /**
     * @return GetVoucherInfoRes
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @param null|GetVoucherInfoRes $response
     */
    public function setResponse($response)
    {
        $this->response = $response;
    }
}
