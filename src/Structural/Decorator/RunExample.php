<?php

namespace Gof\DesignPatterns\Structural\Decorator;

use Gof\DesignPatterns\ExampleAbstract;

class RunExample extends ExampleAbstract {

    protected $title = 'Decorator example';

    public function run() {
        $this->result = $this->getTitle() . ':' . PHP_EOL;

        $this->result .= (new ScrollDecorator(new BorderDecorator(new TextView())))->draw();
    }
}
