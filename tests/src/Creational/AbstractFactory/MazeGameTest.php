<?php

namespace Tests\Creational\AbstractFactory;

use PHPUnit\Framework\TestCase;
use Gof\DesignPatterns\Creational\AbstractFactory\{
    MazeFactory,
    MazeGame,
    Maze,
    Room
};

class MazeGameTest extends TestCase {

    public function testCreateMaze() {
        $maze = MazeGame::createMaze(new MazeFactory());
        $this->assertTrue($maze instanceof Maze);

        $room2 = $maze->getRoomByNum(2);
        $this->assertTrue($room2 instanceof Room);
        $this->assertStringContainsString('Enter Room', $room2->enter());
    }
}
