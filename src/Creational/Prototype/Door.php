<?php

namespace Gof\DesignPatterns\Creational\Prototype;

class Door extends MapSite {

    private bool $isOpen;

    public function __construct(
            private $r1 = null,
            private $r2 = null,
    ) {
        
    }

    public function enter() {
        return 'Enter Dooor';
    }
    
    public function otherSideFrom(Room $room): Room {
        
    }
    
    public function initialyze(Room $from, Room $to) {
        $this->r1 = $from;
        $this->r2 = $to;
    }
}
