<?php

namespace Gof\DesignPatterns\Structural\Flyweight;

use Gof\DesignPatterns\ExampleAbstract;

class RunExample extends ExampleAbstract {

    protected $title = 'Flyweight example';

    public function run() {
        $this->result = $this->getTitle() . ':' . PHP_EOL;

        $this->result .= PHP_EOL;

        $doc = new Document(new GlyphFactory());

        $doc->write(1, 'H');
        $doc->write(2, 'W');
        $doc->write(1, 'e');
        $doc->write(1, 'l');
        $doc->write(1, 'l');
        $doc->write(2, 'o');
        $doc->write(2, 'r');
        $doc->write(2, 'l');
        $doc->write(1, 'o');
        $doc->write(2, 'd');
        $doc->write(2, '!');

        $this->result .= $doc->export() . PHP_EOL;

        $this->result .= sprintf('Document symbols used: %s' . PHP_EOL, $doc->symbolsUsed());
        $this->result .= sprintf('Glyphs produced: %s' . PHP_EOL, $doc->glyphsProduced());
    }
}
