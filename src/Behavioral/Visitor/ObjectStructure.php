<?php

namespace Gof\DesignPatterns\Behavioral\Visitor;

class ObjectStructure {

    private $elements = [];

    public function add($element) {
        $this->elements[] = $element;
    }

    public function accept(AbstractVisitor $visitor) {
        $result = '';
        foreach ($this->elements as $element) {
            $result .= $element->accept($visitor) . PHP_EOL;
        }
        return $result;
    }
}
