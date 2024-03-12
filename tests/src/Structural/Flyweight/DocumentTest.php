<?php

namespace Tests\Structural\Decorator;

use PHPUnit\Framework\TestCase;
use Gof\DesignPatterns\Structural\Flyweight\{
    Document,
    GlyphFactory,
};

class DocumentTest extends TestCase {

    public function testDraw() {
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

        $this->assertStringContainsString('Hello' . PHP_EOL . 'World!', $doc->export());
        $this->assertEquals(11, $doc->symbolsUsed());
        $this->assertEquals(8, $doc->glyphsProduced());
    }
}
