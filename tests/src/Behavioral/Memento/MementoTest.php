<?php

namespace Tests\Behavioral\Memento;

use PHPUnit\Framework\TestCase;
use Gof\DesignPatterns\Behavioral\Memento\{
    Originator,
    CareTaker,
};

class MementoTest extends TestCase {

    public function testMemento() {

        $origin = new Originator('Init originator state');
        $origin->setState('State #2');
        
        $store = new CareTaker();
        $store->setMemento($origin->saveToMemento());
        $expected = $origin->getState();

        $origin->setState('State #3');
        $origin->setState('State #4');
        
        $origin->restoreFromMemento($store->getMemento());

        $this->assertEquals($expected, $origin->getState());
    }
}
