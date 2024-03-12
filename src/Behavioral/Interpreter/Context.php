<?php

namespace Gof\DesignPatterns\Behavioral\Interpreter;

class Context {

    private $valiables = [];

    public function setVariable(string $name, string $value) {
        $this->valiables[$name] = $value;
    }

    public function getVariable(string $name) {
        return $this->valiables[$name];
    }
}
