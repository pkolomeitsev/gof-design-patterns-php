<?php

namespace Tests\Structural\Decorator;

use PHPUnit\Framework\TestCase;
use Gof\DesignPatterns\Structural\Facade\{
    Facade
};

class FacadeTest extends TestCase {

    public function testDraw() {
        $this->assertStringContainsString('Scanning Parsing Compiling', (new Facade())->doProcess());
    }
}
