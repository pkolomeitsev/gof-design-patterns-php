<?php

namespace Gof\DesignPatterns\Behavioral\State;

use Gof\DesignPatterns\Behavioral\State\Interfaces\WaterStateInterface;

class LiquidState implements WaterStateInterface{
    
    public function frost(Water $water) {
        $water->setState(new SolidState());
        return 'Turning liquid to solid state...';
    }

    public function heat(Water $water) {
        $water->setState(new GasState());
        return 'Turning liquid to gas state...';
    }
}
