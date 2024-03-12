<?php

namespace Gof\DesignPatterns\Structural\Decorator;

class BorderDecorator extends Decorator {

    public function draw() {
        return parent::draw() . ' -> ' . $this->drawBorder();
    }

    public function drawBorder() {
        return 'BorderDecorator drawBorder()' . PHP_EOL;
    }
}
