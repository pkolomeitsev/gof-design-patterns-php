<?php

namespace Tests\Structural\Composite;

use PHPUnit\Framework\TestCase;
use Gof\DesignPatterns\Structural\Composite\{
    Leaf,
    Composite
};

class CompositeTest extends TestCase {

    public function testOperation() {
        $leaf = new Leaf();
        $result = $leaf->operation();
        $this->assertEquals('Leaf apply operation', $result);

        $compositeA = new Composite();
        $compositeA->addComponent(new Leaf());
        $compositeA->addComponent(new Leaf());

        $compositeB = new Composite();
        $compositeB->addComponent(new Leaf());
        $compositeB->addComponent($compositeA);

        $result = $compositeB->operation();
        $this->assertStringContainsString('Composite operation', $result);
    }
}
