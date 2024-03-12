<?php

namespace Gof\DesignPatterns\Structural\Proxy;

use Gof\DesignPatterns\Structural\Proxy\Interfaces\GraphicInterface;

class Image implements GraphicInterface {

    public function request() {
        return 'Image (real subjects) send a request';
    }
}
