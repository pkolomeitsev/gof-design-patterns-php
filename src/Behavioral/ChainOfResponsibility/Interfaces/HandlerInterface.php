<?php

namespace Gof\DesignPatterns\Behavioral\ChainOfResponsibility\Interfaces;

interface HandlerInterface {
    public function handleRequest(string $request);
}
