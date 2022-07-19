<?php

namespace ACESTest\Unit\Request;

use ACESTest\TestCase;
use ACESTest\Unit\Request\stub\AbstractRequestStub;

class AbstractRequestTest extends TestCase
{
    public function testVersion()
    {
        $request = new AbstractRequestStub();
        $this->assertNotEmpty($request->version);

        $this->assertNotEmpty($request->version);
        $request->version = 'v3.0';
        $this->assertEquals('v3.0', $request->version);

        $this->assertArrayNotHasKey('version', $request->toArray());
    }

    public function testRequest()
    {
        $request = new AbstractRequestStub();
        $this->assertEmpty($request->toArray());
        $this->assertSame('{}', $request->toJson());

        $request->name = 'name string';
        $this->assertEquals(['name' => 'name string'], $request->toArray());

        $request->age = 30;
        $this->assertSame(['name' => 'name string', 'age' => 30], $request->toArray());

        $this->assertSame('{"name":"name string","age":30}', $request->toJson());
    }

    public function testDeprecatedMethod()
    {
        $request = new AbstractRequestStub();

        $this->assertEmpty($request->all());

        $request->name = 'name string2';
        $request->age = 30;

        $this->assertSame($request->toArray(), $request->all());
        $this->assertSame($request->toArray(), $request->getInstance());
        $this->assertSame($request->toJson(), $request->getApiParas());
        $this->assertSame($request->toJson(), $request . '');

    }
}
