<?php

namespace Gof\DesignPatterns\Behavioral\Mediator;

class ManagerMediator extends Mediator {

    public function __construct(
            private Colleague $juniorDeveloper,
            private Colleague $seniorDeveloper,
    ) {
        $this->juniorDeveloper->setMediator($this);
        $this->seniorDeveloper->setMediator($this);
    }

    public function send(string $msg, Colleague $colleague) {
        if ($colleague instanceof JuniorDevColleague) {
            return $this->juniorDeveloper->notify($msg);
        }

        if ($colleague instanceof SeniorDevColleague) {
            return $this->seniorDeveloper->notify($msg);
        }
    }
}
