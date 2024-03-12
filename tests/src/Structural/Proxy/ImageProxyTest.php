<?php

namespace Tests\Structural\Decorator;

use PHPUnit\Framework\TestCase;
use Gof\DesignPatterns\Structural\Proxy\{
    Image,
    ImageProxy,
};

class ImageProxyTest extends TestCase {

    public function testDraw() {
        $this->assertStringContainsString('', (new Image())->request());
        $this->assertStringContainsString(
                'Proxy action running...' . PHP_EOL . 'ImageProxy (real subjects) send a request',
                (new ImageProxy(new Image()))->request()
        );
    }
}
