<?php

namespace Gof\DesignPatterns\Behavioral\ChainOfResponsibility;

use Gof\DesignPatterns\ExampleAbstract;

class RunExample extends ExampleAbstract {

    protected $title = 'Chain of responsibility example';

    public function run() {
        $this->result = $this->getTitle() . ':' . PHP_EOL;
        
        $handler = (new HelpHandler())
                ->setNext(new PrintDialog());
        
        $this->result .= $handler->handleRequest('dialog') . PHP_EOL;
        
    }
}
