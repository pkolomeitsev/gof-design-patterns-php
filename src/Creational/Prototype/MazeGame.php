<?php

namespace Gof\DesignPatterns\Creational\Prototype;

use Gof\DesignPatterns\Creational\Prototype\Enumeration\Direction;

class MazeGame {

    public static function createMaze(MazeFactory $mFactory): Maze {
        $maze = $mFactory->makeMaze();
        $r1 = $mFactory->makeRoom(1);
        $r2 = $mFactory->makeRoom(2);
        $door = $mFactory->makeDoor($r1, $r2);

        $maze->addRoom($r1);
        $maze->addRoom($r2);

        $r1->setSide(Direction::North, $mFactory->makeWall());
        $r1->setSide(Direction::East, $door);
        $r1->setSide(Direction::South, $mFactory->makeWall());
        $r1->setSide(Direction::West, $mFactory->makeWall());

        $r2->setSide(Direction::North, $mFactory->makeWall());
        $r2->setSide(Direction::East, $mFactory->makeWall());
        $r2->setSide(Direction::South, $mFactory->makeWall());
        $r2->setSide(Direction::West, $door);

        return $maze;
    }
}
