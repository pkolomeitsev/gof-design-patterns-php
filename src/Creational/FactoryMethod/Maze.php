<?php

namespace Gof\DesignPatterns\Creational\FactoryMethod;

class Maze {
    private $rooms = [];
    
    public function addRoom(Room $room) {
        $this->rooms[$room->getRoomNum()] = $room;
    }
    
    public function getRoomByNum(int $num) {
        return $this->rooms[$num];
    }
}
