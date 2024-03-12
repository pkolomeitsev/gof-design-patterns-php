<?php

require_once 'vendor/autoload.php';

use Gof\DesignPatterns\Bootstrap;
use Gof\DesignPatterns\RequestArguments;

echo (new Bootstrap(new RequestArguments($argv)))->runExample();
