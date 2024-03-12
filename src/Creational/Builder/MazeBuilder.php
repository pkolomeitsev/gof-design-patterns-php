<?php

namespace Gof\DesignPatterns\Creational\Builder;

class MazeBuilder {

    private $maze;

    public function __construct(
            private MazeFactory $mFactory
    ) {
        
    }

    public function buildMaze() {
        $this->maze = $this->mFactory->makeMaze();
    }

    public function buildRoom(int $num) {
        $this->maze->addRoom($this->mFactory->makeRoom($num));
    }

    public function buildDoor(int $roomFrom, int $roomTo) {
        $r1 = $this->maze->getRoomByNum($roomFrom);
        $r2 = $this->maze->getRoomByNum($roomTo);
        $this->mFactory->makeDoor($r1, $r2);
    }

    public function getMaze(): Maze {
        return $this->maze;
    }
}
