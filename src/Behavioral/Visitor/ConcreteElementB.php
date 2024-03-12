<?php

namespace Gof\DesignPatterns\Behavioral\Visitor;

class ConcreteElementB  extends AbstractElement {
    
    public function accept(AbstractVisitor $visitor) {
        return $visitor->visitConcreteElementB($this);
    }
     
    public function operationB() {
        return 'Operation B has been running';
    }
}
