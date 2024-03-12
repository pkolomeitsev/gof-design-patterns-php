<?php

namespace Gof\DesignPatterns\Behavioral\Visitor;

abstract class AbstractElement {

    abstract public function accept(AbstractVisitor $visitor);
}
