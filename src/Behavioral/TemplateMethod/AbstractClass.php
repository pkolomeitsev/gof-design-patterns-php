<?php

namespace Gof\DesignPatterns\Behavioral\TemplateMethod;

abstract class AbstractClass {

    public function templateMethod() {
        return $this->abstractMethod();
    }

    abstract public function abstractMethod();
}
