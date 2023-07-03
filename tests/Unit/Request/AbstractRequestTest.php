<?php

namespace ACESTest\Unit\Request;

use ACESTest\TestCase;
use ACESTest\Unit\Request\stub\AbstractRequestStub;

/**
 * @internal
 *
 * @coversNothing
 */
final class AbstractRequestTest extends TestCase
{
    public function testVersion()
    {
        $request = new AbstractRequestStub();
        self::assertNotEmpty($request->version);

        self::assertNotEmpty($request->version);
        $request->version = 'v3.0';
        self::assertSame('v3.0', $request->version);

        self::assertArrayNotHasKey('version', $request->toArray());
    }

    public function testRequest()
    {
        $request = new AbstractRequestStub();
        self::assertEmpty($request->toArray());
        self::assertSame('{}', $request->toJson());

        $request->name = 'name string';
        self::assertSame(['name' => 'name string'], $request->toArray());

        $request->age = 30;
        self::assertSame(['name' => 'name string', 'age' => 30], $request->toArray());

        self::assertSame('{"name":"name string","age":30}', $request->toJson());
    }

    public function testDeprecatedMethod()
    {
        $request = new AbstractRequestStub();

        self::assertEmpty($request->all());

        $request->name = 'name string2';
        $request->age = 30;

        self::assertSame($request->toArray(), $request->all());
        self::assertSame($request->toArray(), $request->getInstance());
        self::assertSame($request->toJson(), $request->getApiParas());
        self::assertSame($request->toJson(), $request . '');
    }
}
