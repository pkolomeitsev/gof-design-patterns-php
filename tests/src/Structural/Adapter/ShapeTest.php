<?php

namespace Tests\Structural\Adapter;

use PHPUnit\Framework\TestCase;
use Gof\DesignPatterns\Structural\Adapter\{
    Shape,
    TextShape,
    TextView
};

class ShapeTest extends TestCase {

    public function testCallOperation() {
        $shape = new Shape();
        $this->assertStringContainsString('Shape request', $shape->request());

        $adapter = new TextShape(new TextView());
        $this->assertStringContainsString('TextView specific Request', $adapter->request());
    }
}
