<?php

namespace Gof\DesignPatterns\Behavioral\Command;

use Gof\DesignPatterns\Behavioral\Command\Interfaces\ReceiverInterface;

class Document implements ReceiverInterface {

    private $actions = ['open', 'close', 'copy'];

    public function makeAction(string $action) {
        
        return (in_array($action, $this->actions)) 
                ? sprintf('Document is making %s action...', $action)
                : sprintf('Action "%s" is not allowed!', $action);
    }
}
