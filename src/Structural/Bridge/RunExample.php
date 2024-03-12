<?php

namespace Gof\DesignPatterns\Structural\Bridge;

use Gof\DesignPatterns\ExampleAbstract;

class RunExample extends ExampleAbstract {

    protected $title = 'Bridge example';

    public function run() {
        $this->result = $this->getTitle() . ':' . PHP_EOL;

        $implementation = new ConcreteImplementorA();
        $abstraction = new Abstraction($implementation);
        $this->result .= $abstraction->callOperation();

        $this->result .= PHP_EOL;

        $implementation = new ConcreteImplementorB();
        $abstraction = new RefinedAbstraction($implementation);
        $this->result .= $abstraction->callOperation();

        $this->result .= PHP_EOL;
    }
}
