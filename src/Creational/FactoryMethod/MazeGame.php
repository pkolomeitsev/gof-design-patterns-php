<?php

namespace Gof\DesignPatterns\Creational\FactoryMethod;

use Gof\DesignPatterns\Creational\FactoryMethod\Enumeration\Direction;

class MazeGame {

    public static function createMaze(): Maze {
        $maze = self::makeMaze();
        $r1 = self::makeRoom(1);
        $r2 = self::makeRoom(2);
        $door = self::makeDoor($r1, $r2);

        $maze->addRoom($r1);
        $maze->addRoom($r2);

        $r1->setSide(Direction::North, self::makeWall());
        $r1->setSide(Direction::East, $door);
        $r1->setSide(Direction::South, self::makeWall());
        $r1->setSide(Direction::West, self::makeWall());

        $r2->setSide(Direction::North, self::makeWall());
        $r2->setSide(Direction::East, self::makeWall());
        $r2->setSide(Direction::South, self::makeWall());
        $r2->setSide(Direction::West, $door);

        return $maze;
    }

    private static function makeMaze() {
        return new Maze();
    }

    private static function makeRoom(int $num) {
        return new Room($num);
    }

    private static function makeWall(): Wall {
        return new Wall();
    }

    private static function makeDoor(Room $from, Room $to) {
        return new Door($from, $to);
    }
}
