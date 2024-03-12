<?php

namespace Gof\DesignPatterns\Behavioral\Memento;

use Gof\DesignPatterns\ExampleAbstract;

class RunExample extends ExampleAbstract {

    protected $title = 'Memento example';

    public function run() {
        $this->result = $this->getTitle() . ':' . PHP_EOL;

        $origin = new Originator('Init originator state');
        $this->result .= $origin->getState() . PHP_EOL;
        
        $origin->setState('State #2');
        $this->result .= $origin->getState() . PHP_EOL;
        
        $this->result .= 'Store state' . PHP_EOL;
        $store = new CareTaker();
        $store->setMemento($origin->saveToMemento());
        
        $origin->setState('State #3');
        $this->result .= $origin->getState() . PHP_EOL;
        
        $origin->setState('State #4');
        $this->result .= $origin->getState() . PHP_EOL;
        
        $origin->setState('State #5');
        $this->result .= $origin->getState() . PHP_EOL;
        
        $this->result .= 'Restore state' . PHP_EOL;
        $origin->restoreFromMemento($store->getMemento());
        $this->result .= $origin->getState() . PHP_EOL;
    }
}
