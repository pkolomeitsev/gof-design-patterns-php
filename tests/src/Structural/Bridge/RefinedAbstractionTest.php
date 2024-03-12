<?php

namespace Tests\Structural\Bridge;

use PHPUnit\Framework\TestCase;
use Gof\DesignPatterns\Structural\Bridge\{
    Abstraction,
    ConcreteImplementorA
};

class RefinedAbstractionTest extends TestCase {

    public function testCallOperation() {
        $implementation = new ConcreteImplementorA();
        $abstraction = new Abstraction($implementation);
        $result = $abstraction->callOperation();
        
        $this->assertStringContainsString('Base operation', $result);
    }
}
