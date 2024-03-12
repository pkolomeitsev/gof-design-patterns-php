<?php

namespace Gof\DesignPatterns\Behavioral\Interpreter;

use Gof\DesignPatterns\Behavioral\Interpreter\Interfaces\ExpressionInterface;

class AddExpression extends ArithmeticExpression implements ExpressionInterface {

    public function interpret(Context $context) {
        return $this->expA->interpret($context) + $this->expB->interpret($context);
    }
}
