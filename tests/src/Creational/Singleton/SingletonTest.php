<?php

namespace Tests\Creational\Singleton;

use PHPUnit\Framework\TestCase;
use Gof\DesignPatterns\Creational\Singleton\Singleton;

class SingletonTest extends TestCase {

    public function testNotify() {
        $singleton = Singleton::getInstance();

        $this->assertTrue($singleton instanceof Singleton);
        $this->assertEquals('Singleton notification', $singleton->notify());
    }
}
