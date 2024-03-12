<?php

namespace Gof\DesignPatterns\Behavioral\ChainOfResponsibility;

class PrintButton extends AbstractHandler {

    public function handleRequest(string $request) {
        if ($request == 'print') {
            return 'Print Button handler';
        }
        if ($this->linkedWith) {
            return $this->linkedWith->handleRequest($request);
        }
    }
}
