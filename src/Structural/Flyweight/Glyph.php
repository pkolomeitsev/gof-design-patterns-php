<?php

namespace Gof\DesignPatterns\Structural\Flyweight;

class Glyph {

    public function __construct(
            private string $glyph
    ) {
        
    }
    
    public function __toString() {
        return $this->glyph;
    }
}
