<?php

namespace Gof\DesignPatterns\Behavioral\Interpreter;

use Gof\DesignPatterns\Behavioral\Interpreter\Interfaces\ExpressionInterface;

class NumberExpression implements ExpressionInterface {

    public function __construct(
            private string $name
    ) {
        
    }

    public function interpret(Context $context) {
        return $context->getVariable($this->name);
    }
}
