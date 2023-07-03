<?php

namespace ACESTest;

use ACES\JdClient;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use PHPUnit\Framework\TestCase as BaseTestCase;

/**
 * @internal
 *
 * @coversNothing
 */
final class TestCase extends BaseTestCase
{
    protected function config(): array
    {
        return [
            'appKey' => 'appKey string',
            'appSecret' => 'secret string',
            'redirectUrl' => 'https://localhost/?redirect url',
            'isvSource' => ' string',
            'shopNo' => 'shopNo string',
            'departmentNo' => 'departmentNo string',
            'monthlyAccount' => 'monthlyAccount string',
        ];
    }

    protected function client(): JdClient
    {
        return new JdClient($this->config());
    }

    /**
     * 封装测试请求数据.
     */
    protected function mockHandler(array $queue = null, callable $onFulfilled = null, callable $onRejected = null): HandlerStack
    {
        return HandlerStack::create(new MockHandler($queue, $onFulfilled, $onRejected));
    }
}
