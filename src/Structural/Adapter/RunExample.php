<?php

namespace Gof\DesignPatterns\Structural\Adapter;

use Gof\DesignPatterns\ExampleAbstract;

class RunExample extends ExampleAbstract {

    protected $title = 'Adapter example';

    public function run() {
        $this->result = $this->getTitle() . ':' . PHP_EOL;
        
        $shape = new Shape();
        $this->result .= 'Target call: ' . $shape->request() . PHP_EOL;
        
        $adapter = new TextShape(new TextView());
        $this->result .= 'Adapter call: ' . $adapter->request() . PHP_EOL;
        
    }
}
