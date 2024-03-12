<?php

namespace Gof\DesignPatterns\Behavioral\State;

use Gof\DesignPatterns\ExampleAbstract;

class RunExample extends ExampleAbstract {

    protected $title = 'State example';

    public function run() {
        $this->result = $this->getTitle() . ':' . PHP_EOL;

        $water = new Water(new LiquidState());
        $this->result .= $water->heat() . PHP_EOL;
        $this->result .= $water->frost() . PHP_EOL;
        $this->result .= $water->frost() . PHP_EOL;
    }
}
