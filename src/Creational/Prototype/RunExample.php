<?php

namespace Gof\DesignPatterns\Creational\Prototype;

use Gof\DesignPatterns\ExampleAbstract;
use Gof\DesignPatterns\Creational\Prototype\MazeFactory;
use Gof\DesignPatterns\Creational\Prototype\MazeGame;

class RunExample extends ExampleAbstract {

    protected $title = 'Prototype example';

    public function run() {
        $this->result = $this->getTitle() . ':' . PHP_EOL;

        $prototype = new MazePrototypeFactory(new Maze, new Wall, new Room, new Door);
        $maze = MazeGame::createMaze($prototype);
        
        $room1 = $maze->getRoomByNum(1);
        $room2 = $maze->getRoomByNum(2);
        
        $this->result .= $room1->enter() . '#1' . PHP_EOL;
        $this->result .= $room2->enter() . '#2' . PHP_EOL;
    }
}
