<?php

namespace Gof\DesignPatterns\Creational\FactoryMethod;

use Gof\DesignPatterns\ExampleAbstract;
use Gof\DesignPatterns\Creational\FactoryMethod\MazeFactory;
use Gof\DesignPatterns\Creational\FactoryMethod\MazeGame;

class RunExample extends ExampleAbstract {

    protected $title = 'FactoryMenthod example';

    public function run() {
        $this->result = $this->getTitle() . ':' . PHP_EOL;

        $maze = MazeGame::createMaze();
        
        $room1 = $maze->getRoomByNum(1);
        $room2 = $maze->getRoomByNum(2);
        
        $this->result .= $room1->enter() . '#1' . PHP_EOL;
        $this->result .= $room2->enter() . '#2' . PHP_EOL;
    }
}
