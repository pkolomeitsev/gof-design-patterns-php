<?php

namespace Gof\DesignPatterns\Behavioral\Interpreter;

use Gof\DesignPatterns\ExampleAbstract;

class RunExample extends ExampleAbstract {

    protected $title = 'Interpreter example';

    public function run() {
        $this->result = $this->getTitle() . ':' . PHP_EOL;

        $a = 10;
        $b = 5;
        $c = 2;

        // a - b + c
        $context = new Context();
        $context->setVariable('a', $a);
        $context->setVariable('b', $b);
        $context->setVariable('c', $c);

        $exp = new AddExpression(
                new SubtractExpression(
                        new NumberExpression('a'),
                        new NumberExpression('b')
                ),
                new NumberExpression('c')
        );
        
        $this->result .= sprintf('a=%s, b=%s, c=%s; a-b+c=%s', $a,$b,$c, $exp->interpret($context)) . PHP_EOL;
    }
}
