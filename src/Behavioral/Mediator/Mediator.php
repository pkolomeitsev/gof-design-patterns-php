<?php

namespace Gof\DesignPatterns\Behavioral\Mediator; 

abstract class Mediator {
    abstract public function send(string $msg, Colleague $colleague);
}