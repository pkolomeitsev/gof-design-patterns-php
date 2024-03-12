<?php

namespace Gof\DesignPatterns\Behavioral\Memento;

class Memento {

    public function __construct(
            private string $state
    ) {
        
    }

    public function getState() {
        return $this->state;
    }
}
