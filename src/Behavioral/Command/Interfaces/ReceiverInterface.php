<?php

namespace Gof\DesignPatterns\Behavioral\Command\Interfaces;

interface ReceiverInterface {

    public function makeAction(string $action);
}
