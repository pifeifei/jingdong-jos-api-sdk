<?php

namespace ACESTest\Unit\Request\stub;

use ACES\Request\AbstractRequest;

/**
 * @property string $name
 * @property int $age
 */
class AbstractRequestStub extends AbstractRequest
{
    public function getApiMethodName(): string
    {
        return 'test.request';
    }

    public function isRequireAccessToken(): bool
    {
        return false;
    }
}
