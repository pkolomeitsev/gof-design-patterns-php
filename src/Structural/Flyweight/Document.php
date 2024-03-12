<?php

namespace Gof\DesignPatterns\Structural\Flyweight;

class Document {

    public function __construct(
            private GlyphFactory $glFactory,
            private int $symbolsWritten = 0,
            private array $sentences = []
    ) {
        
    }

    public function write(int $row, string $symbol) {
        if (empty($this->sentences[$row])) {
            $this->sentences[$row] = new Sentence();
        }

        $glyph = $this->glFactory->fetchGlyph($symbol);

        $this->sentences[$row]->addGlyph($glyph);
        $this->symbolsWritten++;
    }

    public function export() {
        $accumulate = '';
        foreach ($this->sentences as $sentence) {
            $accumulate .= $sentence . PHP_EOL;
        }

        return $accumulate;
    }

    public function glyphsProduced() {
        return $this->glFactory->glyphsProduced();
    }

    public function symbolsUsed() {
        return $this->symbolsWritten;
    }
}
