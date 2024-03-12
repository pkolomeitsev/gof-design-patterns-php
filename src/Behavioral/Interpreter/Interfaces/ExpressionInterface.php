<?php

namespace Gof\DesignPatterns\Behavioral\Interpreter\Interfaces;

use Gof\DesignPatterns\Behavioral\Interpreter\Context;

interface ExpressionInterface {

    public function interpret(Context $context);
}
