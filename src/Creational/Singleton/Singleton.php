<?php

namespace Gof\DesignPatterns\Creational\Singleton;

class Singleton {

    private static $instance;

    public static function getInstance() {
        self::$instance = self::$instance ??= new self();
        return self::$instance;
    }
    
    public function notify() {
        return 'Singleton notification';
    }

    /**
     * is not allowed to call from outside to prevent from creating multiple instances,
     * to use the singleton, you have to obtain the instance from DbConn::getInstance() instead
     */
    private function __construct() {
        
    }

    /**
     * prevent the instance from being cloned (which would create a second instance of it)
     */
    private function __clone() {
        
    }

    /**
     * prevent from being unserialized (which would create a second instance of it)
     */
    public function __wakeup() {
        
    }
}
