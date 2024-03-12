<?php

namespace Gof\DesignPatterns\Structural\Bridge;

class RefinedAbstraction extends Abstraction {

    public function callOperation() {
        return 'Refined operation' . PHP_EOL .
                $this->imp->operation();
    }
}
