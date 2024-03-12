<?php

namespace Gof\DesignPatterns\Structural\Proxy;

use Gof\DesignPatterns\Structural\Proxy\Interfaces\GraphicInterface;

class ImageProxy implements GraphicInterface {

    public function __construct(
            private Image $image
    ) {
        
    }

    public function request() {
        $result = $this->someAction() . PHP_EOL;
        $result .= 'ImageProxy (real subjects) send a request' . PHP_EOL;
        return $result;
    }

    public function someAction() {
        return 'Proxy action running...';
    }
}
