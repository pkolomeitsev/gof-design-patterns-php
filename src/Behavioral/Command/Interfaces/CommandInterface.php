<?php

namespace Gof\DesignPatterns\Behavioral\Command\Interfaces;

interface CommandInterface {

    public function execute(string $action);
}
