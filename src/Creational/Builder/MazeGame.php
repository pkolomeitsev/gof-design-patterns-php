<?php

namespace Gof\DesignPatterns\Creational\Builder;

use Gof\DesignPatterns\Creational\Builder\Enumeration\Direction;

class MazeGame {

    public static function createMaze(MazeBuilder $mBuilder): Maze {
        $mBuilder->buildMaze();
        $mBuilder->buildRoom(1);
        $mBuilder->buildRoom(2);
        $mBuilder->buildDoor(1, 2);
        
        return $mBuilder->getMaze();
    }    
}
