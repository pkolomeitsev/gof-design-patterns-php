<?php

namespace Tests\Creational\FactoryMethod;

use PHPUnit\Framework\TestCase;
use Gof\DesignPatterns\Creational\FactoryMethod\{
    MazeGame,
    Maze,
    Room
};

class MazeGameTest extends TestCase {

    public function testCreateMaze() {
        $maze = MazeGame::createMaze();
        $this->assertTrue($maze instanceof Maze);

        $room2 = $maze->getRoomByNum(2);
        $this->assertTrue($room2 instanceof Room);
        $this->assertStringContainsString('Enter Room', $room2->enter());
    }
}
