<?php

namespace Gof\DesignPatterns\Behavioral\ChainOfResponsibility;

class PrintDialog extends AbstractHandler {

    public function handleRequest(string $request) {
        if ($request == 'dialog') {
            return 'Print Dialog handler';
        }
        if ($this->linkedWith) {
            return $this->linkedWith->handleRequest($request);
        }
    }
}
