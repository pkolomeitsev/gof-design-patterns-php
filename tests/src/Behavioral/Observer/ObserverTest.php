<?php

namespace Tests\Behavioral\Observer;

use PHPUnit\Framework\TestCase;
use Gof\DesignPatterns\Behavioral\Observer\{
    Subject,
    Observer,
};

class ObserverTest extends TestCase {

    public function testMemento() {

        $publisher = new Subject();
        $subscriber = new Observer();
        $publisher->attach($subscriber);
        $publisher->publish('New article published!');
        $publisher->notify();
        
        $this->assertEquals('New article published!', $subscriber->getNewState());
    }
}
