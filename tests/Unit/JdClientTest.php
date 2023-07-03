<?php

namespace ACESTest\Unit;

use ACES\JdClient;
use ACESTest\TestCase;
use ACESTest\Unit\Request\stub\AbstractRequestStub;
use GuzzleHttp\Psr7\Response;

/**
 * @internal
 *
 * @coversNothing
 */
final class JdClientTest extends TestCase
{
    public function testConfig()
    {
        $config = $this->config();
        $jdClient = new JdClient($config);

        self::assertSame($config['appKey'], $jdClient->getAppKey());
        self::assertSame($config['appSecret'], $jdClient->getAppSecret());
        self::assertSame($config['redirectUrl'], $jdClient->getRedirectUrl());
        self::assertSame($config['isvSource'], $jdClient->getIsvSource());
        self::assertSame($config['shopNo'], $jdClient->getShopNo());
        self::assertSame($config['departmentNo'], $jdClient->getDepartmentNo());
        self::assertSame($config['monthlyAccount'], $jdClient->getMonthlyAccount());
    }

    public function testDeprecatedConfig()
    {
        $appKey = 'appKey string';
        $appSecret = 'secret string';
        $redirectUrl = 'https://localhost/?redirect ur';

        $jdClient = new JdClient($appKey, $appSecret, $redirectUrl);

        self::assertSame($appKey, $jdClient->getAppKey());
        self::assertSame($appSecret, $jdClient->getAppSecret());
        self::assertSame($redirectUrl, $jdClient->getRedirectUrl());
        self::assertNull($jdClient->getIsvSource());
        self::assertNull($jdClient->getShopNo());
        self::assertNull($jdClient->getDepartmentNo());
        self::assertNull($jdClient->getMonthlyAccount());
    }

    /**
     * @throws \ACES\Exceptions\JingdongException
     */
    public function testClient()
    {
        $config = $this->config();
        $jdClient = $this->client();
        $jdRequest = new AbstractRequestStub();
        $jdRequest->name = 'name string';
        $jdRequest->age = 30;

        self::assertSame($config['appKey'], $jdClient->formatRequest($jdRequest)['app_key']);
        self::assertSame('2.0', $jdClient->formatRequest($jdRequest)['v']);
        self::assertSame($jdRequest->getApiMethodName(), $jdClient->formatRequest($jdRequest)['method']);
        self::assertSame('{"name":"name string","age":30}', $jdClient->formatRequest($jdRequest)['360buy_param_json']);
        self::assertArrayHasKey('timestamp', $jdClient->formatRequest($jdRequest));
        self::assertArrayHasKey('sign', $jdClient->formatRequest($jdRequest));

        $result = ['foo' => 'foo', 'bar' => 'bar'];
        $handler = $this->mockHandler([new Response(200, [], json_encode($result))]);
        $jdClient->option('handler', $handler);
        $response = $jdClient->execute($jdRequest);
        self::assertSame($result, $response);
    }

    public function testClientException()
    {
        self::assertNotEmpty('TODO: 测试异常请求');
    }
}
