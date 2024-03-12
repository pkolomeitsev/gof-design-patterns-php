<?php

namespace Gof\DesignPatterns\Structural\Composite;

use Gof\DesignPatterns\ExampleAbstract;

class RunExample extends ExampleAbstract {

    protected $title = 'Composite example';

    public function run() {
        $this->result = $this->getTitle() . ':' . PHP_EOL;

        $this->result .= PHP_EOL;
        
        $leaf = new Leaf();
        $this->result .= 'Single leaf:' . PHP_EOL;
        $this->result .= $leaf->operation() . PHP_EOL;

        $compositeA = new Composite();
        $compositeA->addComponent(new Leaf());
        $compositeA->addComponent(new Leaf());

        $compositeB = new Composite();
        $compositeB->addComponent(new Leaf());
        $compositeB->addComponent($compositeA);

        $this->result .= PHP_EOL;
        $this->result .= 'Tree composite:' . PHP_EOL;
        $this->result .= $compositeB->operation();
    }
}
