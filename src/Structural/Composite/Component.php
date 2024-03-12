<?php

namespace Gof\DesignPatterns\Structural\Composite;

abstract class Component {

    protected $components = [];

    abstract public function operation();

    public function addComponent($component) {
        $this->components[] = $component;
    }

    public function getComponent($id): Component {
        return $this->components[$id];
    }

    public function removeComponent($id) {
        unset($this->components[$id]);
    }

    public function hasComponent(): bool {
        return !empty($this->components);
    }

    public function isComposite(): bool {
        return false;
    }
}
