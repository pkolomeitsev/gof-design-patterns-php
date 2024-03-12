<?php

namespace Gof\DesignPatterns\Structural\Flyweight;

class GlyphFactory {

    private $glyphs = [];

    public function fetchGlyph(string $symbol): Glyph {
        if (!empty($this->glyphs[$symbol])) {
            return $this->glyphs[$symbol];
        }
        $this->glyphs[$symbol] = new Glyph($symbol);
        
        return $this->glyphs[$symbol];
    }

    public function glyphsProduced() {
        return count($this->glyphs);
    }
}
