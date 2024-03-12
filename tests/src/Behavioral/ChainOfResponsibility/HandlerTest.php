<?php

namespace Tests\Behavioral\ChainOfResponsibility;

use PHPUnit\Framework\TestCase;
use Gof\DesignPatterns\Behavioral\ChainOfResponsibility\{
    HelpHandler,
    PrintButton,
    PrintDialog
};

class HandlerTest extends TestCase {

    public function testHandleRequest() {

        $handler = (new HelpHandler())
                ->setNext(new PrintDialog());

        $this->assertEquals('Help Handler', $handler->handleRequest('help'));
        $this->assertEquals('Print Dialog handler', $handler->handleRequest('dialog'));
        
        $handler = (new HelpHandler())
                ->setNext(new PrintButton());
        
        $this->assertEquals('Print Button handler', $handler->handleRequest('print'));

    }
}
