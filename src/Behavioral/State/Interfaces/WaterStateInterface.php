<?php

namespace Gof\DesignPatterns\Behavioral\State\Interfaces;

use Gof\DesignPatterns\Behavioral\State\Water;

interface WaterStateInterface {

    public function heat(Water $water);

    public function frost(Water $water);
}
