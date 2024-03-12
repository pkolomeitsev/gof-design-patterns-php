<?php

namespace Gof\DesignPatterns\Behavioral\Observer;

/**
 * class Subject
 * <p>The <b>SplSubject</b> interface is used alongside <code>SplObserver</code> to implement the Observer Design Pattern.</p>
 * @link https://php.net/manual/en/class.splsubject.php
 * @since PHP 5 >= 5.1.0, PHP 7, PHP 8
 */
class Subject implements \SplSubject {

    private string $state = '';
    private \SplObjectStorage $observers;

    public function __construct() {
        $this->observers = new \SplObjectStorage();
    }

    public function attach(\SplObserver $observer): void {
        $this->observers->attach($observer);
    }

    public function detach(\SplObserver $observer): void {
        $this->observers->detach($observer);
    }

    public function notify(): void {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function publish($state) {
        $this->state = $state;
    }

    public function getState() {
        return $this->state;
    }
}
