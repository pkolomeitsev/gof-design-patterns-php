<?php

namespace Gof\DesignPatterns;

abstract class ExampleAbstract {

    protected $result;
    protected $title = 'Here should be Design Patter title';

    abstract public function run();

    public function getResult() {
        return $this->result;
    }
    
    public function getTitle() {
        return $this->title;
    }
}
