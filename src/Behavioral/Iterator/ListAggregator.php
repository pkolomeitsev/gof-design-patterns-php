<?php

namespace Gof\DesignPatterns\Behavioral\Iterator;

/**
 * class ListAggregator
 * <p>Interface to create an external Iterator.</p>
 * @link https://php.net/manual/en/class.iteratoraggregate.php
 * @since PHP 5, PHP 7, PHP 8
 */
class ListAggregator implements \IteratorAggregate {

    private $items = [];

    public function getItems() {
        return $this->items;
    }

    public function addItem($item) {
        $this->items[] = $item;
    }

    public function getIterator(): \Iterator {
        return new ListIterator($this);
    }

    public function getReverseIterator(): \Iterator {
        return new ListDescIterator($this);
    }
}
