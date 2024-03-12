<?php

namespace Tests\Behavioral\Observer;

use PHPUnit\Framework\TestCase;
use Gof\DesignPatterns\Behavioral\TemplateMethod\{
    ConcreteClass
};

class TemplateMethodTest extends TestCase {

    public function testTemplateMethod() {

        $concrete = new ConcreteClass();

        $this->assertEquals('Concrete implemenation of abstract method', $concrete->templateMethod());
    }
}
