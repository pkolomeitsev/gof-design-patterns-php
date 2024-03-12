<?php

namespace Gof\DesignPatterns\Behavioral\Memento;

class CareTaker {

    private $memento;

    public function setMemento($memento) {
        $this->memento = $memento;
    }

    public function getMemento() {
        return $this->memento;
    }
}
