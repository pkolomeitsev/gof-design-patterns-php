<?php

namespace Gof\DesignPatterns\Structural\Adapter;

class TextShape extends Shape {

    public function __construct(
            private TextView $textView
    ) {
        
    }

    public function request() {
        return $this->textView->specificRequest();
    }
}
