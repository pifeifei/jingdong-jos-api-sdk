<?php

namespace ACES\Request\Domain;

use JsonSerializable;

abstract class AbstractParams implements JsonSerializable
{
    protected $params = [];

    public function jsonSerialize(): mixed
    {
        return $this->params;
    }
}
