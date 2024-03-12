<?php

namespace Gof\DesignPatterns\Behavioral\Observer;

use Gof\DesignPatterns\ExampleAbstract;

class RunExample extends ExampleAbstract {

    protected $title = 'Observer example';

    public function run() {
        $this->result = $this->getTitle() . ':' . PHP_EOL;

        $publisher = new Subject();
        $subscriber = new Observer();
        $publisher->attach($subscriber);
        $publisher->publish('New article published!');
        $publisher->notify();
        
        $this->result .= $subscriber->getNewState() . PHP_EOL;
    }
}
