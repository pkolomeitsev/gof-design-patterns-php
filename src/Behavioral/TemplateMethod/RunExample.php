<?php

namespace Gof\DesignPatterns\Behavioral\TemplateMethod;

use Gof\DesignPatterns\ExampleAbstract;


class RunExample extends ExampleAbstract {

    protected $title = 'Template method example';

    public function run() {
        $this->result = $this->getTitle() . ':' . PHP_EOL;
        
        $concrete = new ConcreteClass();
        $this->result .= $concrete->templateMethod() . PHP_EOL;        
    }
}
