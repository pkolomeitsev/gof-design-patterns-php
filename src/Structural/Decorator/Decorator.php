<?php

namespace Gof\DesignPatterns\Structural\Decorator;

class Decorator extends VisualComponent {

    protected $visualComponent;

    public function __construct(VisualComponent $component) {
        $this->visualComponent = $component;
    }

    public function draw() {
        return $this->visualComponent->draw();
    }
}
