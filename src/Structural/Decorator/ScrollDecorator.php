<?php

namespace Gof\DesignPatterns\Structural\Decorator;

class ScrollDecorator extends Decorator {

    public function draw() {
        return parent::draw() . ' -> ' . $this->scrollTo();
    }

    public function scrollTo() {
        return 'ScrollDecorator scrollTo()' . PHP_EOL;
    }
}
