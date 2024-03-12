<?php

namespace Gof\DesignPatterns\Behavioral\Visitor;

class ConcreteVisitor2 extends AbstractVisitor {

    public function visitConcreteElementA(ConcreteElementA $el) {
        return $el->operationA();
    }

    public function visitConcreteElementB(ConcreteElementB $el) {
        return $el->operationB();
    }
}
