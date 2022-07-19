<?php

namespace ACESTest\Unit;

use ACES\JdClient;
use ACESTest\TestCase;
use ACESTest\Unit\Request\stub\AbstractRequestStub;
use GuzzleHttp\Psr7\Response;

class JdClientTest extends TestCase
{
    public function testConfig()
    {
        $config = $this->config();
        $jdClient = new JdClient($config);

        $this->assertSame($config['appKey'], $jdClient->getAppKey());
        $this->assertSame($config['appSecret'], $jdClient->getAppSecret());
        $this->assertSame($config['redirectUrl'], $jdClient->getRedirectUrl());
        $this->assertSame($config['isvSource'], $jdClient->getIsvSource());
        $this->assertSame($config['shopNo'], $jdClient->getShopNo());
        $this->assertSame($config['departmentNo'], $jdClient->getDepartmentNo());
        $this->assertSame($config['monthlyAccount'], $jdClient->getMonthlyAccount());
    }

    public function testDeprecatedConfig()
    {
        $appKey = 'appKey string';
        $appSecret = 'secret string';
        $redirectUrl = 'https://localhost/?redirect ur';

        $jdClient = new JdClient($appKey, $appSecret, $redirectUrl);

        $this->assertSame($appKey, $jdClient->getAppKey());
        $this->assertSame($appSecret, $jdClient->getAppSecret());
        $this->assertSame($redirectUrl, $jdClient->getRedirectUrl());
        $this->assertNull($jdClient->getIsvSource());
        $this->assertNull($jdClient->getShopNo());
        $this->assertNull($jdClient->getDepartmentNo());
        $this->assertNull($jdClient->getMonthlyAccount());
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

        $this->assertSame($config['appKey'], $jdClient->formatRequest($jdRequest)['app_key']);
        $this->assertSame('2.0', $jdClient->formatRequest($jdRequest)['v']);
        $this->assertSame($jdRequest->getApiMethodName(), $jdClient->formatRequest($jdRequest)['method']);
        $this->assertSame('{"name":"name string","age":30}', $jdClient->formatRequest($jdRequest)['360buy_param_json']);
        $this->assertArrayHasKey('timestamp', $jdClient->formatRequest($jdRequest));
        $this->assertArrayHasKey('sign', $jdClient->formatRequest($jdRequest));

        $result = ['foo' => 'foo', 'bar' => 'bar'];
        $handler = $this->mockHandler([new Response(200, [], json_encode($result))]);
        $jdClient->option('handler', $handler);
        $response = $jdClient->execute($jdRequest);
        $this->assertSame($result, $response);
    }


    public function testClientException()
    {
        $this->assertNotEmpty('TODO: 测试异常请求');
    }
}
