<?php

namespace ACES\Common\Domain;

class JosMasterKeyGetResponse extends JosBaseResponse
{
    private $response;

    /**
     * @return \ACES\Common\KeyResponse
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @param null|\ACES\Common\KeyResponse $response
     */
    public function setResponse($response)
    {
        $this->response = $response;
    }
}
