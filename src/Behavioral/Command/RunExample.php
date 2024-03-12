<?php

namespace Gof\DesignPatterns\Behavioral\Command;

use Gof\DesignPatterns\ExampleAbstract;

class RunExample extends ExampleAbstract {

    protected $title = 'Command example';

    public function run() {
        $this->result = $this->getTitle() . ':' . PHP_EOL;

        $command = new OpenCommand(new Document());
        $this->result .= $command->execute('open') . PHP_EOL;
        $this->result .= $command->execute('copy') . PHP_EOL;
        $this->result .= $command->execute('play') . PHP_EOL;
        $this->result .= $command->execute('close') . PHP_EOL;
    }
}
