<?php

namespace Gof\DesignPatterns\Structural\Facade;

class Facade {

    public function doProcess() {
        $result = (new Scaner())->scanning();
        $result .= ' ' . (new Parser())->parsing();
        $result .= ' ' . (new Compiler)->compiling();
        
        return $result;
    }
}
