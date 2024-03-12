<?php

namespace Gof\DesignPatterns\Behavioral\Strategy;

use Gof\DesignPatterns\Behavioral\Strategy\Interfaces\StrategyInterface;

class Context {

    private $strategy;

    public function __construct(StrategyInterface $strategy) {
        $this->strategy = $strategy;
    }

    public function setStrategy(StrategyInterface $strategy) {
        $this->strategy = $strategy;
    }

    public function doContext(): string {
        return $this->strategy->algorithm();
    }
}
