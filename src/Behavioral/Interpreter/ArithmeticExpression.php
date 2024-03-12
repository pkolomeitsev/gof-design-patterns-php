<?php

namespace Gof\DesignPatterns\Behavioral\Interpreter;

use Gof\DesignPatterns\Behavioral\Interpreter\Interfaces\ExpressionInterface;

class ArithmeticExpression {
    public function __construct(
            protected ExpressionInterface $expA,
            protected ExpressionInterface $expB
    ) {
        
    }
    
}
