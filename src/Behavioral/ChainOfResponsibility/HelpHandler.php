<?php

namespace Gof\DesignPatterns\Behavioral\ChainOfResponsibility;

class HelpHandler extends AbstractHandler {

    public function handleRequest(string $request) {
        if ($request == 'help') {
            return 'Help Handler';
        }
        if ($this->linkedWith) {
            return $this->linkedWith->handleRequest($request);
        }
    }
}
