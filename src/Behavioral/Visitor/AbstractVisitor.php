<?php

namespace Gof\DesignPatterns\Behavioral\Visitor;

abstract class AbstractVisitor {

    abstract public function visitConcreteElementA(ConcreteElementA $el);

    abstract public function visitConcreteElementB(ConcreteElementB $el);
}
