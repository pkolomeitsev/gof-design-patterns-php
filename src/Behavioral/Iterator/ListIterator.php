<?php

namespace Gof\DesignPatterns\Behavioral\Iterator;

/**
 * class ListIterator
 * <p>Interface for external iterators or objects that can be iterated themselves internally.</p>
 * @link https://php.net/manual/en/class.iterator.php
 * @since PHP 5, PHP 7, PHP 8
 */
class ListIterator implements \Iterator {

    protected \IteratorAggregate $aggregator;
    protected $position = 0;
    protected $reverse = false;

    public function __construct(\IteratorAggregate $aggregator) {
        $this->aggregator = $aggregator;
    }

    public function rewind(): void {
        $this->position = $this->reverse ?
                count($this->aggregator->getItems()) - 1 : 0;
    }

    public function current(): mixed {
        return $this->aggregator->getItems()[$this->position];
    }

    public function key(): mixed {
        return $this->position;
    }

    public function next(): void {
        $this->position = $this->position + ($this->reverse ? -1 : 1);
    }

    public function valid(): bool {
        return isset($this->aggregator->getItems()[$this->position]);
    }
}
