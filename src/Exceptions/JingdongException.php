<?php

namespace ACES\Exceptions;

use Exception;
use Throwable;

class JingdongException extends Exception
{
    protected array $context = [];

    public function __construct(string $message = '', array $context = [], Throwable $previous = null, ?int $code = 0)
    {
        parent::__construct($message, $code, $previous);
        $this->setContext($context);
    }

    public function context(): array
    {
        return $this->context;
    }

    public function setContext(array $context)
    {
        $this->context = $context;
    }

    public function contextMerge(array $context)
    {
        $this->context = array_merge($this->context, $context);
    }
}
