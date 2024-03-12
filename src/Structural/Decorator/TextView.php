<?php

namespace Gof\DesignPatterns\Structural\Decorator;

class TextView extends VisualComponent{
    
    public function draw() {
        return 'Draw TextView' . PHP_EOL; 
    }
    
}
