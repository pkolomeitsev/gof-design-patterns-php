<?php

namespace Gof\DesignPatterns\Behavioral\Mediator;

abstract class Colleague {

    public function __construct(
            private ?Mediator $mediator = null
    ) {
        
    }

    public function setMediator($mediator) {
        $this->mediator = $mediator;
    }

    public function send(string $msg) {
        return $this->mediator->send($msg, $this);
    }

    abstract public function notify(string $msg);
}
