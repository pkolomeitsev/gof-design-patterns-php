<?php

namespace Tests\Structural\Decorator;

use PHPUnit\Framework\TestCase;
use Gof\DesignPatterns\Structural\Decorator\{
    TextView,
    BorderDecorator,
    ScrollDecorator
};

class DecoratorTest extends TestCase {

    public function testDraw() {
        $result = (new ScrollDecorator(new BorderDecorator(new TextView())))->draw();
        
        $this->assertStringContainsString('Draw TextView', $result);
        $this->assertStringContainsString(' -> BorderDecorator drawBorder()', $result);
        $this->assertStringContainsString(' -> ScrollDecorator scrollTo()', $result);
    }
}
