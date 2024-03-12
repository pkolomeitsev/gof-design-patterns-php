<?php

namespace Gof\DesignPatterns\Structural\Composite;

class Leaf extends Component {

    public function operation() {
        return 'Leaf apply operation';
    }
}
