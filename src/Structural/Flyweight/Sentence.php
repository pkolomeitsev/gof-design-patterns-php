<?php

namespace Gof\DesignPatterns\Structural\Flyweight;

class Sentence {
    private $glyphs = [];
    
    public function addGlyph(Glyph $glyph) {
        $this->glyphs [] = $glyph;        
    }
    
    public function __toString() {
        return implode('', $this->glyphs);
    }
}
