<?php

namespace Gof\DesignPatterns\Structural\Composite;

class Composite extends Component {

    public function operation(): string {
        $result = 'Composite operation:' . PHP_EOL;
        foreach ($this->components as $component) {
            $result .= $component->operation() . PHP_EOL;
        }
        return $result;
    }

    public function isComposite(): bool {
        return true;
    }
}
