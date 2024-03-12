<?php

namespace Gof\DesignPatterns\Structural\Proxy;

use Gof\DesignPatterns\ExampleAbstract;

class RunExample extends ExampleAbstract {

    protected $title = 'Proxy example';

    public function run() {
        $this->result = $this->getTitle() . ':' . PHP_EOL;
        $this->result .= '> Real subject code execution' . PHP_EOL;
        $this->result .= (new Image())->request() . PHP_EOL;

        $this->result .= '> Proxy code execution' . PHP_EOL;
        $this->result .= (new ImageProxy(new Image()))->request();
    }
}
