<?php

namespace Gof\DesignPatterns\Behavioral\ChainOfResponsibility;

use Gof\DesignPatterns\Behavioral\ChainOfResponsibility\Interfaces\HandlerInterface;

abstract class AbstractHandler implements HandlerInterface {

    protected HandlerInterface $linkedWith;
    
    public function setNext(HandlerInterface $handler) {
        $this->linkedWith = $handler;
        
        return $this;
    }

    abstract public function handleRequest(string $request);
}
