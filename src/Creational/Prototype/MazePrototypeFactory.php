<?php

namespace Gof\DesignPatterns\Creational\Prototype;

class MazePrototypeFactory extends MazeFactory {

    public function __construct(
            private Maze $maze,
            private Wall $wall,
            private Room $room,
            private Door $door
    ) {
        
    }

    public function makeWall(): Wall {
        return clone $this->wall;
    }

    public function makeDoor(Room $from, Room $to): Door {
        $door = clone $this->door;
        $door->initialyze($from, $to);
        return $door;
    }
}
