<?php

namespace Gof\DesignPatterns\Behavioral\Strategy;

use Gof\DesignPatterns\Behavioral\Strategy\Interfaces\StrategyInterface;

class StrategyB implements StrategyInterface {
    
    public function algorithm(): string {
        return 'Strategy B making alogrithm';
    }
}
