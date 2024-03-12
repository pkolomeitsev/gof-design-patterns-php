<?php

namespace Gof\DesignPatterns\Behavioral\Strategy;

use Gof\DesignPatterns\Behavioral\Strategy\{
    Context,
    StrategyA,
    StrategyB
};

use Gof\DesignPatterns\ExampleAbstract;

class RunExample extends ExampleAbstract {

    protected $title = 'Strategy example';

    public function run() {
        $this->result = $this->getTitle() . ':' . PHP_EOL;

        $context = new Context(new StrategyA);
        $this->result .= $context->doContext() . PHP_EOL;
        $this->result .= 'Change Strategy!' . PHP_EOL;
        
        $context->setStrategy(new StrategyB());
        $this->result .= $context->doContext() . PHP_EOL;
    }
}
