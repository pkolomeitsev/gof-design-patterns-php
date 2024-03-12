<?php

namespace Tests\Behavioral\Mediator;

use PHPUnit\Framework\TestCase;
use Gof\DesignPatterns\Behavioral\Mediator\{
    JuniorDevColleague,
    SeniorDevColleague,
    ManagerMediator
};

class MediatorTest extends TestCase {

    public function testMediator() {
        $june = new JuniorDevColleague();
        $senior = new SeniorDevColleague();

        $manager = new ManagerMediator($june, $senior);

        $this->assertEquals('Message to Junior Dev: Listen to Senior!', $june->send('Listen to Senior!'));
        $this->assertEquals('Message to Senior Dev: Ready to work!', $senior->send('Ready to work!'));
    }
}
