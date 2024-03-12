<?php

namespace Tests\Behavioral\Observer;

use PHPUnit\Framework\TestCase;
use Gof\DesignPatterns\Behavioral\State\{
    Water,
    LiquidState
};

class StateTest extends TestCase {

    public function testState() {

        $water = new Water(new LiquidState());
        
        $this->assertEquals('Turning liquid to gas state...', $water->heat());
        $this->assertEquals('Making gas liquid...', $water->frost());
        $this->assertEquals('Turning liquid to solid state...', $water->frost());
    }
}
