<?php

namespace Gof\DesignPatterns\Creational\AbstractFactory;

class Door extends MapSite {

    private bool $isOpen;

    public function __construct(
            private Room $r1,
            private Room $r2,
    ) {
        
    }

    public function enter() {
        return 'Enter Dooor';
    }
    
    public function otherSideFrom(Room $room): Room {
        
    }
}
