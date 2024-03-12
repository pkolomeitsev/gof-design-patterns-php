<?php

namespace Gof\DesignPatterns\Behavioral\Visitor;

use Gof\DesignPatterns\ExampleAbstract;

class RunExample extends ExampleAbstract {

    protected $title = 'Visitor example';

    public function run() {
        $this->result = $this->getTitle() . ':' . PHP_EOL;

        $struct = new ObjectStructure();
        $struct->add(new ConcreteElementA());
        $struct->add(new ConcreteElementB());
        $this->result .= 'Accepting Visitor #1' . PHP_EOL;
        $this->result .= $struct->accept(new ConcreteVisitor1());
        $this->result .= 'Accepting Visitor #2' . PHP_EOL;
        $this->result .= $struct->accept(new ConcreteVisitor2());
    }
}
