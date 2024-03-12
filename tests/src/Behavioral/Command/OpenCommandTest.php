<?php

namespace Tests\Behavioral\Command;

use PHPUnit\Framework\TestCase;
use Gof\DesignPatterns\Behavioral\Command\{
    OpenCommand,
    Document,
};

class OpenCommandTest extends TestCase {

    public function testHandleRequest() {

        $command = new OpenCommand(new Document());

        $this->assertEquals('Document is making open action...', $command->execute('open'));
        $this->assertEquals('Document is making copy action...', $command->execute('copy'));
        $this->assertEquals('Action "play" is not allowed!', $command->execute('play'));
        $this->assertEquals('Document is making close action...', $command->execute('close'));
    }
}
