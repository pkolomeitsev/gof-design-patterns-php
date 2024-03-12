<?php

namespace Tests\Structural\Bridge;

use PHPUnit\Framework\TestCase;
use Gof\DesignPatterns\Structural\Bridge\{
    RefinedAbstraction,
    ConcreteImplementorB
};

class AbstractionTest extends TestCase {

    public function testCallOperation() {
        $implementation = new ConcreteImplementorB();
        $abstraction = new RefinedAbstraction($implementation);
        $result = $abstraction->callOperation();
        
        $this->assertStringContainsString('Refined operation', $result);
    }
}
