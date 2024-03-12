<?php

namespace Gof\DesignPatterns\Behavioral\Mediator;

class SeniorDevColleague extends Colleague {

    public function notify(string $msg) {
        return 'Message to Senior Dev: ' . $msg;
    }
}
