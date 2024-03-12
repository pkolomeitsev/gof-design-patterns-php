<?php

namespace Gof\DesignPatterns\Creational\AbstractFactory;

use Gof\DesignPatterns\ExampleAbstract;
use Gof\DesignPatterns\Creational\AbstractFactory\MazeFactory;
use Gof\DesignPatterns\Creational\AbstractFactory\MazeGame;

class RunExample extends ExampleAbstract {

    protected $title = 'AbstractFactory example';

    public function run() {
        $this->result = $this->getTitle() . ':' . PHP_EOL;

        $maze = MazeGame::createMaze(new MazeFactory());
        
        $room1 = $maze->getRoomByNum(1);
        $room2 = $maze->getRoomByNum(2);
        
        $this->result .= $room1->enter() . '#1' . PHP_EOL;
        $this->result .= $room2->enter() . '#2' . PHP_EOL;
    }
}
