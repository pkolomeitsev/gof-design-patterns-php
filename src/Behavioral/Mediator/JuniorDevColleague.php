<?php

namespace Gof\DesignPatterns\Behavioral\Mediator;

class JuniorDevColleague extends Colleague {

    public function notify(string $msg) {
        return 'Message to Junior Dev: ' . $msg;
    }
}
