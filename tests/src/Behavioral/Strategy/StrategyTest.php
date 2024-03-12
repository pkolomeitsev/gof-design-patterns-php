<?php

namespace Tests\Behavioral\Observer;

use PHPUnit\Framework\TestCase;
use Gof\DesignPatterns\Behavioral\Strategy\{
    Context,
    StrategyA,
    StrategyB
};

class StrategyTest extends TestCase {

    public function testStrategy() {

        $context = new Context(new StrategyA);

        $this->assertEquals('Strategy A making alogrithm', $context->doContext());

        $context->setStrategy(new StrategyB());

        $this->assertEquals('Strategy B making alogrithm', $context->doContext());
    }
}
