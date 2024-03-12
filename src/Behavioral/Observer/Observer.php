<?php

namespace Gof\DesignPatterns\Behavioral\Observer;

/**
 * class Observer
 * <p>The <b>SplObserver</b> interface is used alongside <code>SplSubject</code> to implement the Observer Design Pattern.</p>
 * @link https://php.net/manual/en/class.splobserver.php
 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
 */
class Observer implements \SplObserver {
    
    private $newState = '';

    public function update(\SplSubject $subject): void {
        if ($subject->getState()) {
            $this->newState = $subject->getState();
        }
    }
    
    public function getNewState() {
        return $this->newState;
    }
}
