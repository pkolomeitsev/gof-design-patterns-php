<?php

namespace Gof\DesignPatterns\Structural\Facade;

use Gof\DesignPatterns\ExampleAbstract;

class RunExample extends ExampleAbstract {

    protected $title = 'Facade example';

    public function run() {
        $this->result = $this->getTitle() . ':' . PHP_EOL;
        
        $this->result .= (new Facade)->doProcess() . PHP_EOL;
    }
}
