<?php

namespace Gof\DesignPatterns\Behavioral\State;

use Gof\DesignPatterns\Behavioral\State\Interfaces\WaterStateInterface;

class GasState implements WaterStateInterface{
    
    public function frost(Water $water) {
        $water->setState(new LiquidState());
        return 'Making gas liquid...';
    }

    public function heat(Water $water) {
        return 'Already in gas state!';
    }
}
