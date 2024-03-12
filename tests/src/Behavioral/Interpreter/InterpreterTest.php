<?php

namespace Tests\Behavioral\Interpreter;

use PHPUnit\Framework\TestCase;
use Gof\DesignPatterns\Behavioral\Interpreter\{
    Context,
    NumberExpression,
    AddExpression,
    SubtractExpression
};

class InterpreterTest extends TestCase {

    /**
     * @dataProvider dataProvider
     */
    public function testHandleRequest($a, $b, $c, $expected) {

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

        $this->assertEquals($expected, $exp->interpret($context));
    }

    public static function dataProvider() {
        // a - b + c
        return [
            [10, 5, 2, 7],
            [3, 5, 2, 0],
            [5, 10, 2, -3],
        ];
    }
}
