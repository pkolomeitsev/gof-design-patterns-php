<?php

namespace Gof\DesignPatterns\Creational\Builder;

class MazeFactory {

    public function makeMaze(): Maze {
        return new Maze();
    }

    public function makeWall(): Wall {
        return new Wall();
    }

    public function makeDoor(Room $r1, Room $r2): Door {
        return new Door($r1, $r2);
    }

    public function makeRoom(int $num): Room {
        return new Room($num);
    }
}
