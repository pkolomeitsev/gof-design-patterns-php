<?php

namespace Gof\DesignPatterns\Behavioral\Iterator;

use Gof\DesignPatterns\ExampleAbstract;

class RunExample extends ExampleAbstract {

    protected $title = 'Iterator example';

    public function run() {
        $this->result = $this->getTitle() . ':' . PHP_EOL;

        $this->result .= 'Queue messages:' . PHP_EOL;
        $queue = new ListAggregator();
        $queue->addItem('Message #1');
        $queue->addItem('Message #2');
        $queue->addItem('Message #3');

        foreach ($queue->getIterator() as $message) {
            $this->result .= $message . PHP_EOL;
        }

        $this->result .= 'In reverse order:' . PHP_EOL;

        foreach ($queue->getReverseIterator() as $message) {
            $this->result .= $message . PHP_EOL;
        }
    }
}
