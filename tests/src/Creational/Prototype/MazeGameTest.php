<?php

namespace Tests\Creational\Prototype;

use PHPUnit\Framework\TestCase;
use Gof\DesignPatterns\Creational\Prototype\{
    MazeGame,
    MazePrototypeFactory,
    Maze,
    Room,
    Wall,
    Door
};

class MazeGameTest extends TestCase {

    public function testCreateMaze() {
        
        $prototype = new MazePrototypeFactory(new Maze, new Wall, new Room, new Door);
        $maze = MazeGame::createMaze($prototype);
        $this->assertTrue($maze instanceof Maze);

        $room2 = $maze->getRoomByNum(2);
        $this->assertTrue($room2 instanceof Room);
        $this->assertStringContainsString('Enter Room', $room2->enter());
    }
}
