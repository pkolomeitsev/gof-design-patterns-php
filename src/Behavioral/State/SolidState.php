<?php

namespace Gof\DesignPatterns\Behavioral\State;

use Gof\DesignPatterns\Behavioral\State\Interfaces\WaterStateInterface;

class SolidState implements WaterStateInterface {

    public function frost(Water $water) {
        return 'Already solid state to frost!';
    }

    public function heat(Water $water) {
        $water->setState(new LiquidState());
        return 'Set to liquid state...';
    }
}
