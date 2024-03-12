<?php

namespace Gof\DesignPatterns\Creational\Prototype;

use Gof\DesignPatterns\Creational\Prototype\Enumeration\Direction;

class Room extends MapSite {

    public function __construct(
            private int $roomNum = 0,
            private array $sides = []
    ) {
        
    }

    public function getSide(Direction $direction) {
        return $this->sides[$direction->value];
    }

    public function setSide(Direction $direction, MapSite $mSite) {
        $this->sides[$direction->value] = $mSite;
    }

    public function enter() {
        return 'Enter Room';        
    }
    
    public function getRoomNum() {
        return $this->roomNum;        
    }
}
