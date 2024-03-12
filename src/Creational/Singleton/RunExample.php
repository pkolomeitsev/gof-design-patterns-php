<?php

namespace Gof\DesignPatterns\Creational\Singleton;

use Gof\DesignPatterns\ExampleAbstract;


class RunExample extends ExampleAbstract {

    protected $title = 'Prototype example';

    public function run() {
        $this->result = $this->getTitle() . ':' . PHP_EOL;
        
        $this->result .= Singleton::getInstance()->notify() . PHP_EOL;
    }
}
