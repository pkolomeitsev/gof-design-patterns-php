<?php

namespace Gof\DesignPatterns\Behavioral\Visitor;

class ConcreteElementA extends AbstractElement{
    
    public function accept(AbstractVisitor $visitor) {
        return $visitor->visitConcreteElementA($this);
    }
    
    public function operationA() {
        return 'Operation A has been running';
    }
}
