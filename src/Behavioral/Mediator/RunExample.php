<?php

namespace Gof\DesignPatterns\Behavioral\Mediator;

use Gof\DesignPatterns\ExampleAbstract;

class RunExample extends ExampleAbstract {

    protected $title = 'Mediator example';

    public function run() {
        $this->result = $this->getTitle() . ':' . PHP_EOL;

        $june = new JuniorDevColleague();
        $senior = new SeniorDevColleague();

        $manager = new ManagerMediator($june, $senior);

        $this->result .= $june->send('Listen to Senior!') . PHP_EOL;
        $this->result .= $senior->send('Ready to work!') . PHP_EOL;
    }
}
