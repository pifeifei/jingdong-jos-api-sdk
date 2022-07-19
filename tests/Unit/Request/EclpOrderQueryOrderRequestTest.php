<?php

namespace ACESTest\Unit\Request;

use ACES\Request\EclpOrderQueryOrderRequest;
use ACESTest\TestCase;

class EclpOrderQueryOrderRequestTest extends TestCase
{
    public function test()
    {
        $request = new EclpOrderQueryOrderRequest();
        $this->assertEmpty($request->toArray());

        $request->eclpSoNo = 'foo';
        $this->assertSame(['eclpSoNo' => 'foo'], $request->toArray());
    }
}
