<?php

namespace Gof\DesignPatterns\Creational\Builder;

class Maze {
    private $rooms = [];
    
    public function addRoom(Room $room) {
        $this->rooms[$room->getRoomNum()] = $room;
    }
    
    public function getRoomByNum(int $num) {
        return $this->rooms[$num];
    }
}
