<?php

namespace Gof\DesignPatterns\Structural\Bridge;

use Gof\DesignPatterns\Structural\Bridge\Interfaces\Implementation;

/**
 * Description of ConcreteImplementorA
 *
 * @author user
 */
class ConcreteImplementorA implements Implementation {

    public function operation() {
        return __CLASS__ . ' operation()' . PHP_EOL;
    }
}
