<?php

namespace Gof\DesignPatterns;

class Bootstrap {

    const NAMESPACE_MASK = 'Gof\DesignPatterns\%s\%s\RunExample';
    
    private RequestArguments $request;

    /**
     * @param RequestArguments $request
     */
    public function __construct(RequestArguments $request) {
        $this->request = $request;
    }

    /**
     * Main logic to run appropriate example 
     * 
     * @return string
     * @throws \Exception
     */
    public function runExample() {
        if (!$this->request->getType()) {
            
            return $this->help();
        }

        $namespace = sprintf(self::NAMESPACE_MASK,
                ucfirst($this->request->getType()),
                ucfirst($this->request->getPattern())
        );
        
        if (class_exists($namespace)) {
            /** @var \Gof\DesignPatterns\ExampleAbstract **/
            $example = new $namespace();
            $example->run();

            return $example->getResult();
        }

        throw new \Exception('Cannot load ' . $namespace);
    }

    public function help() {
        return
                '--help show documentation' . PHP_EOL
                . $this->getTypeHelp() . PHP_EOL
                . $this->getNameHelp() . PHP_EOL;
    }

    private function getTypeHelp() {
        return '--type [--type=structural] pattern type, possible values: creational, structural, behavioral';
    }

    private function getNameHelp() {
        $offset = '    > ';
        $result = '--pattern [--pattern=bridge] pattern name, possible values:' . PHP_EOL;
        $result .= $offset . 'abstractFactory, factoryMethod, builder, prototype, singleton' . PHP_EOL;
        $result .= $offset . 'adapter, bridge, composite, decorator, flyweight, proxy, facade' . PHP_EOL;
        $result .= $offset . 'chainOfResponsibility, command, interpreter, iterator, mediator' . PHP_EOL . PHP_EOL;
        $result .= 'Example: php index.php --type=behavioral --pattern=mediator' . PHP_EOL;
        return $result;
    }
}
