<?php

namespace Gof\DesignPatterns\Behavioral\State;

use Gof\DesignPatterns\Behavioral\State\Interfaces\WaterStateInterface;

class Water {

    public function __construct(
            private WaterStateInterface $state
    ) {
        
    }

    public function heat() {
        return $this->state->heat($this);
    }

    public function frost() {
        return $this->state->frost($this);
    }

    public function getState() {
        return $this->state;
    }

    public function setState($state) {
        $this->state = $state;
    }
}
