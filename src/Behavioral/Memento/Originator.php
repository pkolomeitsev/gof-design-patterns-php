<?php

namespace Gof\DesignPatterns\Behavioral\Memento;

class Originator {

    public function __construct(
            private string $state
    ) {
        
    }

    public function setState($state) {
        $this->state = $state;
    }

    public function getState() {
        return $this->state;
    }

    public function saveToMemento() {
        return new Memento($this->state);
    }
    
    public function restoreFromMemento(Memento $memento) {
        $this->state = $memento->getState();
    }
}
