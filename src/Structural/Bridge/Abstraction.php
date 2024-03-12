<?php

namespace Gof\DesignPatterns\Structural\Bridge;

use Gof\DesignPatterns\Structural\Bridge\Interfaces\Implementation;

/**
 * Description of Abstraction
 *
 * @author user
 */
class Abstraction {

    protected Implementation $imp;

    public function __construct(Implementation $imp) {
        $this->imp = $imp;
    }
    
    public function callOperation() {
        return 'Base operation' . PHP_EOL 
                . $this->imp->operation();
    }
}
