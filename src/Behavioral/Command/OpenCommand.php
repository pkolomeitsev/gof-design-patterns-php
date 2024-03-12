<?php

namespace Gof\DesignPatterns\Behavioral\Command;

use Gof\DesignPatterns\Behavioral\Command\Interfaces\CommandInterface;

class OpenCommand implements CommandInterface {

    public function __construct(
            private Document $doc
    ) {
        
    }

    public function execute(string $action) {
        // some other actions
        return $this->doc->makeAction($action);
    }
}
