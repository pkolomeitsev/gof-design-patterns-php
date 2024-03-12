<?php

namespace Tests\Behavioral\Observer;

use PHPUnit\Framework\TestCase;
use Gof\DesignPatterns\Behavioral\Visitor\ObjectStructure;

class VisitorTest extends TestCase {
    
    private ObjectStructure $objStruct;
    private string $namespace = 'Gof\DesignPatterns\Behavioral\Visitor';

    protected function setUp(): void {
        $this->objStruct = new ObjectStructure();
    }

    /**
     * @dataProvider dataProvider
     */
    public function testVisitor($element, $visitor, $expected) {

        $element = $this->addNameSpace($element);
        $visitor = $this->addNameSpace($visitor);
        
        $this->objStruct->add(new $element());
        $result = $this->objStruct->accept(new $visitor());
        
        $this->assertEquals($expected, $result);
    }

    public static function dataProvider() {
        return [
            ['element' => 'ConcreteElementA', 'visitor' => 'ConcreteVisitor1', 'exp' => 'Operation A has been running' . PHP_EOL],
            ['element' => 'ConcreteElementA', 'visitor' => 'ConcreteVisitor2', 'exp' => 'Operation A has been running' . PHP_EOL],
            ['element' => 'ConcreteElementB', 'visitor' => 'ConcreteVisitor1', 'exp' => 'Operation B has been running' . PHP_EOL],
            ['element' => 'ConcreteElementB', 'visitor' => 'ConcreteVisitor2', 'exp' => 'Operation B has been running' . PHP_EOL]
        ];
    }
    
    public function addNameSpace($class) {
        return $this->namespace . '\\' . $class;
    }
}
