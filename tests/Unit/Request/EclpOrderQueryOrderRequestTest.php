<?php

namespace ACESTest\Unit\Request;

use ACES\Request\EclpOrderQueryOrderRequest;
use ACESTest\TestCase;

/**
 * @internal
 *
 * @coversNothing
 */
final class EclpOrderQueryOrderRequestTest extends TestCase
{
    public function test()
    {
        $request = new EclpOrderQueryOrderRequest();
        self::assertEmpty($request->toArray());

        $request->eclpSoNo = 'foo';
        self::assertSame(['eclpSoNo' => 'foo'], $request->toArray());
    }
}
